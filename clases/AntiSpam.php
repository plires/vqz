<?php

class AntiSpam
{
  protected $conexion;
  private $maxAttemptsPerIP;
  private $timeWindow;
  private $minFormTime;
  private $spamKeywords;

  public function __construct($conexion)
  {
    $this->conexion = $conexion;

    // Cargar configuración desde .env con valores por defecto
    $this->maxAttemptsPerIP = isset($_ENV['ANTISPAM_MAX_ATTEMPTS'])
      ? (int)$_ENV['ANTISPAM_MAX_ATTEMPTS']
      : 5;

    $this->timeWindow = isset($_ENV['ANTISPAM_TIME_WINDOW'])
      ? (int)$_ENV['ANTISPAM_TIME_WINDOW']
      : 3600;

    $this->minFormTime = isset($_ENV['ANTISPAM_MIN_FORM_TIME'])
      ? (int)$_ENV['ANTISPAM_MIN_FORM_TIME']
      : 3;

    // Cargar keywords desde .env
    if (isset($_ENV['ANTISPAM_KEYWORDS']) && !empty($_ENV['ANTISPAM_KEYWORDS'])) {
      $this->spamKeywords = array_map('trim', explode(',', $_ENV['ANTISPAM_KEYWORDS']));
    } else {
      // Valores por defecto si no están en .env
      $this->spamKeywords = [
        'viagra',
        'casino',
        'poker',
        'loan',
        'credit',
        'bitcoin',
        'cryptocurrency',
        'forex',
        'investment',
        'pharmacy',
        'pills',
        'weight loss',
        'click here',
        'buy now',
        'limited time',
        'earn money',
        'work from home',
        'sex',
        'porn',
        'xxx',
        'prestamo',
        'credito',
        'bitcoin',
        'inversion',
        'farmacia',
        'pastillas',
        'haz clic aqui',
        'compra ahora',
        'gana dinero',
        'trabaja desde casa',
        'sexo'
      ];
    }
  }

  /**
   * Verifica el honeypot (campo invisible que solo los bots llenan)
   */
  public function checkHoneypot($post)
  {
    // Si el campo honeypot tiene contenido, es un bot
    if (!empty($post['website']) || !empty($post['url_check'])) {
      $this->logSpamAttempt($post, 'honeypot');
      return false;
    }
    return true;
  }

  /**
   * Verifica que el formulario no se haya llenado demasiado rápido
   */
  public function checkFormTiming($post)
  {
    if (!isset($post['form_token']) || !isset($post['form_time'])) {
      return false;
    }

    $formTime = (int)$post['form_time'];
    $currentTime = time();
    $elapsedTime = $currentTime - $formTime;

    // Si se llenó en menos de X segundos, probablemente es un bot
    if ($elapsedTime < $this->minFormTime) {
      $this->logSpamAttempt($post, 'timing');
      return false;
    }

    // Si pasó más de 1 hora, el token expiró
    if ($elapsedTime > 3600) {
      return false;
    }

    return true;
  }

  /**
   * Rate limiting: verifica cuántos envíos ha hecho esta IP
   */
  public function checkRateLimit($ip)
  {

    if (!$this->conexion) {
      return true; // Si no hay conexión, permitir (no bloquear por falta de DB)
    }

    try {
      // Crear tabla si no existe
      $this->createRateLimitTable();

      // Limpiar intentos antiguos
      $sql = "DELETE FROM spam_attempts WHERE created_at < DATE_SUB(NOW(), INTERVAL {$this->timeWindow} SECOND)";
      $this->conexion->exec($sql);

      // Contar intentos de esta IP en el periodo
      $sql = "SELECT COUNT(*) as attempts FROM spam_attempts WHERE ip_address = :ip";
      $stmt = $this->conexion->prepare($sql);
      $stmt->bindValue(':ip', $ip, PDO::PARAM_STR);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($result['attempts'] >= $this->maxAttemptsPerIP) {
        $this->logSpamAttempt(['ip' => $ip], 'rate_limit');
        return false;
      }

      // Registrar este intento
      $sql = "INSERT INTO spam_attempts (ip_address, created_at) VALUES (:ip, NOW())";
      $stmt = $this->conexion->prepare($sql);
      $stmt->bindValue(':ip', $ip, PDO::PARAM_STR);
      $stmt->execute();

      return true;
    } catch (Exception $e) {
      error_log("AntiSpam rate limit error: " . $e->getMessage());
      return true; // En caso de error, permitir (no bloquear legítimos por error)
    }
  }

  /**
   * Detecta contenido spam en los campos de texto
   */
  public function checkSpamContent($text)
  {
    $text = strtolower($text);

    foreach ($this->spamKeywords as $keyword) {
      if (strpos($text, strtolower($keyword)) !== false) {
        return false;
      }
    }

    // Verificar si hay demasiados enlaces
    $linkCount = substr_count($text, 'http://') + substr_count($text, 'https://') + substr_count($text, 'www.');
    if ($linkCount > 2) {
      return false;
    }

    return true;
  }

  /**
   * Verifica que el referer sea correcto
   */
  public function checkReferer()
  {
    if (!isset($_SERVER['HTTP_REFERER'])) {
      return false;
    }

    $referer = $_SERVER['HTTP_REFERER'];
    $host = $_SERVER['HTTP_HOST'];

    // Verificar que el referer contenga nuestro dominio
    if (strpos($referer, $host) === false) {
      return false;
    }

    return true;
  }

  /**
   * Validación avanzada de email
   */
  public function validateEmail($email)
  {
    // Emails temporales comunes usados por spammers
    $tempEmailDomains = [
      'mailinator.com',
      'guerrillamail.com',
      'temp-mail.org',
      '10minutemail.com',
      'throwaway.email',
      'yopmail.com'
    ];

    $domain = substr(strrchr($email, "@"), 1);

    if (in_array(strtolower($domain), $tempEmailDomains)) {
      return false;
    }

    // Verificar formato
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return false;
    }

    return true;
  }

  /**
   * Validación de teléfono (evitar números falsos)
   */
  public function validatePhone($phone)
  {
    // Remover espacios y caracteres especiales
    $phone = preg_replace('/[^0-9+]/', '', $phone);

    // Verificar que no sea una secuencia repetitiva obvia
    if (preg_match('/^(\d)\1+$/', $phone)) { // 1111111, 2222222, etc
      return false;
    }

    // Verificar longitud mínima
    if (strlen($phone) < 8) {
      return false;
    }

    return true;
  }

  /**
   * Detecta si el texto parece generado aleatoriamente (gibberish)
   * Retorna true si el texto es válido, false si parece spam
   */
  public function isValidHumanText($text)
  {
    $text = trim($text);

    // Muy corto o muy largo
    if (strlen($text) < 2 || strlen($text) > 100) {
      return false;
    }

    // Contar cambios de mayúsculas/minúsculas
    $caseChanges = 0;
    for ($i = 1; $i < strlen($text); $i++) {
      if (ctype_alpha($text[$i - 1]) && ctype_alpha($text[$i])) {
        if ((ctype_upper($text[$i - 1]) && ctype_lower($text[$i])) ||
          (ctype_lower($text[$i - 1]) && ctype_upper($text[$i]))
        ) {
          $caseChanges++;
        }
      }
    }

    // Si hay más de 5 cambios de caso en un nombre corto, es sospechoso
    // Ejemplo: "wUuXQEZLBiQNdzBdCqu" tiene muchos cambios
    $caseChangeRatio = $caseChanges / max(strlen($text), 1);
    if ($caseChangeRatio > 0.3) { // Más del 30% son cambios de caso
      return false;
    }

    // Verificar que tenga al menos algunas vocales
    $vowels = preg_match_all('/[aeiouáéíóúAEIOUÁÉÍÓÚ]/i', $text);
    if ($vowels < 2) { // Al menos 2 vocales
      return false;
    }

    // Verificar que no sea todo letras sin espacios (para nombres compuestos)
    // Un nombre real como "Juan Perez" tiene espacio, "wUuXQEZLBiQNdzBdCqu" no
    if (strlen($text) > 15 && !preg_match('/\s/', $text) && ctype_alpha(str_replace(' ', '', $text))) {
      // Es un string largo sin espacios, sospechoso
      return false;
    }

    return true;
  }

  /**
   * Crea la tabla para rate limiting si no existe
   */
  private function createRateLimitTable()
  {
    $sql = "CREATE TABLE IF NOT EXISTS spam_attempts (
            id INT AUTO_INCREMENT PRIMARY KEY,
            ip_address VARCHAR(45) NOT NULL,
            created_at DATETIME NOT NULL,
            INDEX idx_ip_time (ip_address, created_at)
        )";
    $this->conexion->exec($sql);
  }

  /**
   * Registra intentos de spam para análisis
   */
  private function logSpamAttempt($post, $reason)
  {
    // Opcional: guardar logs de spam para análisis
    error_log("SPAM attempt detected - Reason: {$reason} - IP: " . $_SERVER['REMOTE_ADDR']);
  }
}
