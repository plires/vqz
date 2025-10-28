<?php

include('../includes/config.inc.php');
include('../clases/app.php');
include('../clases/AntiSpam.php');

require_once("../clases/repositorioSQL.php");

$db = new RepositorioSQL();
$app = new App;
$antiSpam = new AntiSpam($db->getRepoContacts()->getConexion());

// Obtener IP del usuario
$userIP = $_SERVER['REMOTE_ADDR'];

// === VERIFICACIONES ANTI-SPAM ===

// 1. Verificar Honeypot
if (!$antiSpam->checkHoneypot($_POST)) {
	$errors['spam'] = 'Solicitud rechazad. Verificá los datos ingresados.';
	header("Location: " . BASE . "index.php?errors=" . urlencode(serialize($errors)) . "#error");
	exit;
}

// 2. Verificar timing del formulario
if (!$antiSpam->checkFormTiming($_POST)) {
	$errors['spam'] = 'Por favor, tómate tu tiempo para llenar el formulario.';
	header("Location: " . BASE . "index.php?errors=" . urlencode(serialize($errors)) . "#error");
	exit;
}

// 3. Verificar rate limiting
if (!$antiSpam->checkRateLimit($userIP)) {
	$errors['spam'] = 'Has excedido el límite de envíos. Por favor, intenta más tarde.';
	header("Location: " . BASE . "index.php?errors=" . urlencode(serialize($errors)) . "#error");
	exit;
}

// 4. Verificar referer
if (!$antiSpam->checkReferer()) {
	$errors['spam'] = 'Solicitud rechazada. Verificá los datos ingresados.';
	header("Location: " . BASE . "index.php?errors=" . urlencode(serialize($errors)) . "#error");
	exit;
}

// === VERIFICACIÓN RECAPTCHA ===
$data = $app->verifyRecaptcha($_POST);

if ($data['success'] == 1 && $data['score'] >= 0.5) {

	// === VERIFICACIONES DE CAMPOS ===

	if ($app->emptyInput($_POST['name'])) {
		$errors['error_name'] = 'Ingresa tu nombre';
	} else {
		$name = $_POST['name'];

		// Detectar gibberish
		if (!$antiSpam->isValidHumanText($name)) {
			$errors['error_name'] = 'Por favor ingresa un nombre válido';
		}

		// Verificar contenido spam en nombre
		if (!$antiSpam->checkSpamContent($name)) {
			$errors['error_name'] = 'El nombre contiene contenido no permitido';
		}
	}

	// Validación mejorada de email
	if (!$antiSpam->validateEmail($_POST['email'])) {
		$errors['error_email'] = 'Por favor ingresa un email válido';
	} else {
		$email = $_POST['email'];
	}

	// Validación mejorada de teléfono
	if (!$antiSpam->validatePhone($_POST['phone'])) {
		$errors['error_phone'] = 'Por favor ingresa un teléfono válido';
	} else {
		$phone = $_POST['phone'];
	}

	if ($app->emptyInput($_POST['comments'])) {
		$errors['error_comments'] = 'Ingresa tu consulta';
	} else {
		$comments = $_POST['comments'];

		// Detectar gibberish
		if (!$antiSpam->isValidHumanText($comments)) {
			$errors['error_comments'] = 'Por favor ingresa un mensaje válido';
		}

		// Verificar contenido spam en comentarios
		if (!$antiSpam->checkSpamContent($comments)) {
			$errors['error_comments'] = 'El mensaje contiene contenido no permitido';
		}
	}

	if (!isset($errors)) {

		// Sanitizar datos antes de guardar
		$_POST['name'] = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
		$_POST['email'] = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
		$_POST['phone'] = htmlspecialchars(trim($_POST['phone']), ENT_QUOTES, 'UTF-8');
		$_POST['comments'] = htmlspecialchars(trim($_POST['comments']), ENT_QUOTES, 'UTF-8');

		//grabamos en la base de datos
		$save = $db->getRepoContacts()->saveContactFormContactInBDD($_POST);

		//Enviamos los mails al cliente y usuario
		$sendClient = $app->sendEmail('Cliente', 'Contacto Cliente', $_POST);
		$sendUser = $app->sendEmail('Usuario', 'Contacto Usuario', $_POST);

		if ($sendClient) {
			$msg_contacto = 'Mensaje recibido. Le contestaremos a la brevedad. Muchas gracias!';
			header("Location: " . BASE . "index.php?msg_contacto=" . urlencode($msg_contacto) . "#msg_contacto");
			exit;
		} else {
			$errors['mail'] = 'Error al enviar la consulta, por favor intente nuevamente';
			header("Location: " . BASE . "index.php?errors=" . urlencode(serialize($errors)) . "#error");
			exit;
		}
	} else {
		$phone = $_POST['phone'];
		header("Location: " . BASE . "index.php?name=$name&email=$email&phone=$phone&errors=" . urlencode(serialize($errors)) . "#error");
		exit;
	}
} else {
	// Robot detectado por reCAPTCHA
	$errors['robot'] = 'Verificación de seguridad fallida. Por favor intenta nuevamente.';
	header("Location: " . BASE . "index.php?errors=" . urlencode(serialize($errors)) . "#error");
	exit;
}
