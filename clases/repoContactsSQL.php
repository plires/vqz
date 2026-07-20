<?php

require_once("repoContacts.php");

class RepoContactsSQL extends repoContacts
{
  protected $conexion;

  public function __construct($conexion)
  {
    $this->conexion = $conexion;
  }

  /**
   * Obtener la conexión PDO para usar en otras clases
   */
  public function getConexion()
  {
    return $this->conexion;
  }

  public function saveContactFormContactInBDD($post)
  {

    try {

      $sql = "INSERT INTO contacts (name, email, phone, comments, origin, created_at, consent_accepted_at, consent_ip)
              VALUES (:name, :email, :phone, :comments, :origin, :created_at, :consent_accepted_at, :consent_ip)";
      $stmt = $this->conexion->prepare($sql);
      $stmt->bindValue(":name", $post['name'], PDO::PARAM_STR);
      $stmt->bindValue(":email", $post['email'], PDO::PARAM_STR);
      $stmt->bindValue(":phone", $post['phone'], PDO::PARAM_STR);
      $stmt->bindValue(":comments", $post['comments'], PDO::PARAM_STR);
      $stmt->bindValue(":origin", $post['origin'], PDO::PARAM_STR);
      $stmt->bindValue(":created_at", date("Y-m-d H:i:s"), PDO::PARAM_STR);
      $stmt->bindValue(":consent_accepted_at", date("Y-m-d H:i:s"), PDO::PARAM_STR);
      $stmt->bindValue(":consent_ip", $this->getRequestIp(), PDO::PARAM_STR);

      $save = $stmt->execute();

      return $save;
    } catch (Exception $e) {

      $section = $_POST['section'];
      $errors['base'] = 'Error al grabar datos intente nuevamente por favor';

      header("Location: " . BASE . "index.php?errors=" . urlencode(serialize($errors)) . "#error");
      die();
    }
  }

  // Prioriza X-Forwarded-For (proxy inverso en producción) sobre REMOTE_ADDR.
  private function getRequestIp()
  {
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $forwardedFor = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
      return trim($forwardedFor[0]);
    }

    return $_SERVER['REMOTE_ADDR'] ?? '';
  }
}
