<?php

	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'aviso-legal';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Aviso legal de VQZ Constructora: datos identificativos, condiciones de uso del sitio web y régimen de propiedad intelectual.">
	<title>VQZ - Constructora - Aviso Legal</title>

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

	<!-- Contenido AVISO LEGAL -->
	<section id="app" class="obras page_contacto legal">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Informacion -->
		<section class="first_section container informacion">

		  <div class="row titulo">
		  	<div class="col-md-6 offset-md-3">
		  		<h1 data-aos="fade-up" class="bebas">AVISO LEGAL</h1>
		  	</div>
		  </div>

		  <div class="row">
		  	<div class="col-md-10 offset-md-1 content_data">

		  		<p><em>Contenido de ejemplo / placeholder. Este texto sigue una estructura legal estándar y será reemplazado por el contenido definitivo provisto por el cliente.</em></p>

		  		<h2 class="bebas">1. Datos identificativos</h2>
		  		<p>
		  			En cumplimiento del deber de información, se indican a continuación los datos identificativos de la empresa titular de este sitio web:
		  		</p>
		  		<p>
		  			<strong>Titular:</strong> Vazquez Obras &amp; Servicios (VQZ Constructora)<br>
		  			<strong>Domicilio:</strong> Av. Tte. Gral. Donato Álvarez 221, Oficina 105 (C1406BOA), Ciudad Autónoma de Buenos Aires, Argentina<br>
		  			<strong>Correo electrónico de contacto:</strong> <a class="transition" href="mailto:info@vazquez.net">info@vazquez.net</a><br>
		  			<strong>Teléfono:</strong> +54 11 4633-1200
		  		</p>

		  		<h2 class="bebas">2. Objeto</h2>
		  		<p>
		  			El presente Aviso Legal regula el acceso y uso del sitio web (en adelante, "el Sitio"), del que es titular VQZ Constructora. La navegación por el Sitio atribuye la condición de usuario e implica la aceptación plena de las condiciones incluidas en este Aviso Legal.
		  		</p>

		  		<h2 class="bebas">3. Condiciones de uso</h2>
		  		<p>
		  			El usuario se compromete a hacer un uso adecuado y lícito del Sitio, de conformidad con la legislación aplicable, la buena fe, el orden público y el presente Aviso Legal. Queda prohibido el uso del Sitio con fines ilícitos o lesivos, o que de cualquier forma puedan causar perjuicio o impedir el normal funcionamiento del Sitio.
		  		</p>

		  		<h2 class="bebas">4. Propiedad intelectual e industrial</h2>
		  		<p>
		  			Todos los contenidos del Sitio (textos, imágenes, marcas, logotipos, diseños, código fuente, entre otros) son propiedad de VQZ Constructora o de terceros que han autorizado su uso, y están protegidos por la normativa de propiedad intelectual e industrial vigente. Queda prohibida su reproducción, distribución o comunicación pública total o parcial sin autorización expresa del titular.
		  		</p>

		  		<h2 class="bebas">5. Exclusión de responsabilidad</h2>
		  		<p>
		  			VQZ Constructora no se responsabiliza de los daños y perjuicios de cualquier naturaleza que pudieran derivarse de la falta de disponibilidad o continuidad del funcionamiento del Sitio, ni de la presencia de virus u otros elementos lesivos, salvo en los casos en que así lo establezca la normativa aplicable.
		  		</p>

		  		<h2 class="bebas">6. Enlaces a terceros</h2>
		  		<p>
		  			El Sitio puede contener enlaces a sitios web de terceros (por ejemplo, mapas o redes sociales). VQZ Constructora no asume responsabilidad alguna por el contenido, políticas de privacidad o prácticas de dichos sitios de terceros.
		  		</p>

		  		<h2 class="bebas">7. Legislación aplicable</h2>
		  		<p>
		  			Las presentes condiciones se rigen por la legislación vigente. Para cualquier controversia derivada del uso del Sitio, las partes se someten a los tribunales que correspondan según la normativa aplicable.
		  		</p>

		  		<p>
		  			Para más información sobre el tratamiento de datos personales, consultá nuestra <a class="transition" href="./politica-privacidad.php">Política de Privacidad</a>. Para información sobre el uso de cookies, consultá nuestra <a class="transition" href="./politica-cookies.php">Política de Cookies</a>.
		  		</p>

		  	</div>
		  </div>

		</section>
		<!-- Informacion end -->

	</section>
	<!-- Contenido AVISO LEGAL end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script src="https://www.google.com/recaptcha/api.js?render=<?= $_ENV['RECAPTCHA_KEY_SITE'] ?>"></script>
	<script src="./dist/bundle.js"></script>

</body>

</html>
