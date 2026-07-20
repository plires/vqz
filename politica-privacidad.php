<?php

	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'politica-privacidad';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Política de privacidad de VQZ Constructora: cómo tratamos los datos personales de nuestros usuarios y clientes.">
	<title>VQZ - Constructora - Política de Privacidad</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

	<link rel="stylesheet" type="text/css" href="./node_modules/normalize.css/normalize.css">
	<link rel="stylesheet" type="text/css" href="./fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/aos/dist/aos.css"/>
	<link rel="stylesheet" type="text/css" href="./css/app.css">
	<link rel="stylesheet" type="text/css" href="./css/cookieconsent.css">
</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Contenido POLITICA DE PRIVACIDAD -->
	<section id="app" class="obras page_contacto legal">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Informacion -->
		<section class="first_section container informacion">

		  <div class="row titulo">
		  	<div class="col-md-6 offset-md-3">
		  		<h1 data-aos="fade-up" class="bebas">POLÍTICA DE PRIVACIDAD</h1>
		  	</div>
		  </div>

		  <div class="row">
		  	<div class="col-md-10 offset-md-1 content_data">

		  		<p><em>Contenido de ejemplo / placeholder. Este texto sigue una estructura acorde al RGPD (GDPR) y será reemplazado por el contenido definitivo provisto por el cliente.</em></p>

		  		<h2 class="bebas">1. Responsable del tratamiento</h2>
		  		<p>
		  			<strong>Responsable:</strong> Vazquez Obras &amp; Servicios (VQZ Constructora)<br>
		  			<strong>Domicilio:</strong> Av. Tte. Gral. Donato Álvarez 221, Oficina 105 (C1406BOA), Ciudad Autónoma de Buenos Aires, Argentina<br>
		  			<strong>Correo electrónico:</strong> <a class="transition" href="mailto:info@vazquez.net">info@vazquez.net</a>
		  		</p>

		  		<h2 class="bebas">2. Finalidad del tratamiento</h2>
		  		<p>
		  			Los datos personales que nos facilitás a través de los formularios de contacto del Sitio (nombre, correo electrónico, teléfono y comentarios) se utilizan exclusivamente para:
		  		</p>
		  		<ul>
		  			<li>Responder a tus consultas y solicitudes de información sobre nuestros proyectos y servicios.</li>
		  			<li>Gestionar la relación comercial que, en su caso, se derive de tu consulta.</li>
		  			<li>Elaborar estadísticas de uso del Sitio de forma agregada (cookies de análisis, sujetas a tu consentimiento).</li>
		  		</ul>

		  		<h2 class="bebas">3. Legitimación</h2>
		  		<p>
		  			La base legal para el tratamiento de tus datos es el consentimiento que nos otorgás al completar y enviar el formulario de contacto, y al aceptar las categorías de cookies correspondientes en el panel de preferencias del Sitio.
		  		</p>

		  		<h2 class="bebas">4. Destinatarios</h2>
		  		<p>
		  			No cedemos tus datos personales a terceros, salvo obligación legal. Podemos utilizar proveedores tecnológicos (por ejemplo, servicios de analítica web como Google Analytics, o de verificación anti-spam como Google reCAPTCHA) que actúan como encargados del tratamiento bajo nuestras instrucciones y sus propias políticas de privacidad.
		  		</p>

		  		<h2 class="bebas">5. Plazo de conservación</h2>
		  		<p>
		  			Conservamos tus datos personales durante el tiempo necesario para atender tu consulta y, en su caso, durante el plazo que exija la relación comercial o la normativa aplicable, tras lo cual serán eliminados o anonimizados.
		  		</p>

		  		<h2 class="bebas">6. Tus derechos (Acceso, Rectificación, Cancelación/Supresión, Oposición, y Portabilidad y Limitación)</h2>
		  		<p>
		  			Podés ejercer en cualquier momento tus derechos de:
		  		</p>
		  		<ul>
		  			<li><strong>Acceso:</strong> conocer qué datos tuyos tratamos.</li>
		  			<li><strong>Rectificación:</strong> corregir datos inexactos o incompletos.</li>
		  			<li><strong>Cancelación / Supresión:</strong> solicitar la eliminación de tus datos.</li>
		  			<li><strong>Oposición:</strong> oponerte a un tratamiento concreto de tus datos.</li>
		  			<li><strong>Portabilidad:</strong> recibir tus datos en un formato estructurado.</li>
		  			<li><strong>Limitación del tratamiento:</strong> solicitar que se restrinja el uso de tus datos en determinados supuestos.</li>
		  		</ul>
		  		<p>
		  			Para ejercer estos derechos, podés escribirnos a <a class="transition" href="mailto:info@vazquez.net">info@vazquez.net</a>, indicando el derecho que querés ejercer y adjuntando una copia de un documento que acredite tu identidad.
		  		</p>

		  		<h2 class="bebas">7. Cookies</h2>
		  		<p>
		  			El Sitio utiliza cookies propias y de terceros. Podés gestionar tu consentimiento en cualquier momento desde el enlace "Cambiar preferencias de cookies" disponible en el pie de página, o consultando el detalle completo en nuestra <a class="transition" href="./politica-cookies.php">Política de Cookies</a>.
		  		</p>

		  		<h2 class="bebas">8. Cambios en esta política</h2>
		  		<p>
		  			Esta Política de Privacidad puede actualizarse para adaptarse a novedades legislativas o cambios en nuestros servicios. Te recomendamos revisarla periódicamente.
		  		</p>

		  	</div>
		  </div>

		</section>
		<!-- Informacion end -->

	</section>
	<!-- Contenido POLITICA DE PRIVACIDAD end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script src="https://www.google.com/recaptcha/api.js?render=<?= $_ENV['RECAPTCHA_KEY_SITE'] ?>"></script>
	<script src="./dist/bundle.js"></script>

</body>

</html>
