<?php

	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'politica-cookies';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Política de cookies de VQZ Constructora: qué cookies utiliza este sitio, con qué finalidad y cómo podés gestionar tu consentimiento.">
	<title>VQZ - Constructora - Política de Cookies</title>

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

	<!-- Contenido POLITICA DE COOKIES -->
	<section id="app" class="obras page_contacto legal">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Informacion -->
		<section class="first_section container informacion">

		  <div class="row titulo">
		  	<div class="col-md-6 offset-md-3">
		  		<h1 data-aos="fade-up" class="bebas">POLÍTICA DE COOKIES</h1>
		  	</div>
		  </div>

		  <div class="row">
		  	<div class="col-md-10 offset-md-1 content_data">

		  		<p><em>Contenido de ejemplo / placeholder. Este texto sigue una estructura acorde al RGPD (GDPR) y será reemplazado por el contenido definitivo provisto por el cliente.</em></p>

		  		<h2 class="bebas">1. ¿Qué son las cookies?</h2>
		  		<p>
		  			Las cookies son pequeños archivos de texto que los sitios web almacenan en tu navegador cuando los visitás. Permiten, entre otras cosas, recordar tus preferencias, mantener sesiones activas y obtener información estadística sobre el uso del sitio.
		  		</p>

		  		<h2 class="bebas">2. Categorías de cookies que utiliza este sitio</h2>
		  		<p>
		  			Gestionamos el consentimiento de cookies por categorías. Podés aceptarlas, rechazarlas o personalizar tu elección en cualquier momento desde el panel de preferencias:
		  		</p>
		  		<ul>
		  			<li><strong>Necesarias:</strong> imprescindibles para el funcionamiento del Sitio. No requieren consentimiento y no se pueden desactivar.</li>
		  			<li><strong>Análisis:</strong> nos permiten medir y analizar el uso del Sitio (Google Analytics vía Google Tag Manager). Requieren tu consentimiento.</li>
		  			<li><strong>Contenido embebido de terceros:</strong> habilitan la visualización de contenido alojado en plataformas externas, como videos de YouTube o mapas de Google Maps. Requieren tu consentimiento.</li>
		  		</ul>

		  		<h2 class="bebas">3. Detalle de cookies</h2>
		  		<div class="table-responsive">
		  			<table class="table table-bordered cookie-table">
		  				<thead>
		  					<tr>
		  						<th>Nombre</th>
		  						<th>Finalidad</th>
		  						<th>Duración</th>
		  						<th>Tipo</th>
		  					</tr>
		  				</thead>
		  				<tbody>
		  					<tr>
		  						<td>cc_cookie</td>
		  						<td>Guarda tu elección de preferencias de cookies (categorías aceptadas/rechazadas).</td>
		  						<td>6 meses</td>
		  						<td>Necesaria, propia</td>
		  					</tr>
		  					<tr>
		  						<td>_ga</td>
		  						<td>Google Analytics. Distingue usuarios de forma anónima para generar estadísticas de uso del Sitio.</td>
		  						<td>2 años</td>
		  						<td>Análisis, tercero (Google)</td>
		  					</tr>
		  					<tr>
		  						<td>_ga_*</td>
		  						<td>Google Analytics 4. Mantiene el estado de la sesión de análisis.</td>
		  						<td>2 años</td>
		  						<td>Análisis, tercero (Google)</td>
		  					</tr>
		  					<tr>
		  						<td>_gid</td>
		  						<td>Google Analytics. Distingue usuarios de forma anónima durante 24 horas.</td>
		  						<td>24 horas</td>
		  						<td>Análisis, tercero (Google)</td>
		  					</tr>
		  					<tr>
		  						<td>VISITOR_INFO1_LIVE</td>
		  						<td>YouTube. Se usa al reproducir videos embebidos para estimar el ancho de banda del usuario.</td>
		  						<td>6 meses</td>
		  						<td>Contenido embebido, tercero (Google/YouTube)</td>
		  					</tr>
		  					<tr>
		  						<td>NID</td>
		  						<td>Google Maps. Recuerda preferencias del usuario al mostrar mapas embebidos.</td>
		  						<td>6 meses</td>
		  						<td>Contenido embebido, tercero (Google)</td>
		  					</tr>
		  				</tbody>
		  			</table>
		  		</div>
		  		<p>
		  			<small>Nota: las cookies de análisis y de contenido embebido de terceros solo se instalan si aceptás la categoría correspondiente. Antes de tu consentimiento, Google Consent Mode v2 mantiene estas categorías en estado "denegado".</small>
		  		</p>

		  		<h2 class="bebas">4. ¿Cómo gestionar tus preferencias?</h2>
		  		<p>
		  			Podés cambiar tu elección de cookies en cualquier momento haciendo clic
		  			<a class="transition js-cookie-preferences" href="javascript:void(0)">acá para abrir el panel de preferencias de cookies</a>,
		  			o desde el enlace "Cambiar preferencias de cookies" disponible en el pie de página de cualquier página del Sitio. También podés eliminar o bloquear las cookies desde la configuración de tu navegador, aunque esto podría afectar el funcionamiento de algunas secciones del Sitio.
		  		</p>

		  		<p>
		  			Para más información sobre el tratamiento de tus datos personales, consultá nuestra <a class="transition" href="./politica-privacidad.php">Política de Privacidad</a>.
		  		</p>

		  	</div>
		  </div>

		</section>
		<!-- Informacion end -->

	</section>
	<!-- Contenido POLITICA DE COOKIES end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script src="https://www.google.com/recaptcha/api.js?render=<?= $_ENV['RECAPTCHA_KEY_SITE'] ?>"></script>
	<script src="./dist/bundle.js"></script>

</body>

</html>
