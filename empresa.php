<?php
	
	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'empresa';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A través de los años, Vazquez Obras y Servicios se ha encaminado hacia una actividad integrada, especializándose en la implementación y desarrollo de procesos industriales relacionados con el diseño y la construcción de proyectos de inversión, vivienda y oficinas.">
	<title>VQZ - Constructora - Nuestra Empresa</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

	<link rel="stylesheet" type="text/css" href="./node_modules/normalize.css/normalize.css">
	<link rel="stylesheet" type="text/css" href="./fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/aos/dist/aos.css"/>
	<link rel="stylesheet" type="text/css" href="./css/app.css">
</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Contenido EMPRESA -->
	<section id="app" class="obras page_contacto empresa">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Informacion -->
		<section class="first_section container informacion">
		  
		  <div class="row titulo">
		  	<div class="col-md-6 offset-md-3">
		  		<h1 data-aos="fade-up" class="bebas">NUESTRA EMPRESA</h1>
		  	</div>
		  </div>

		  <div class="row">
		  	<div class="col-md-10 offset-md-1 content_data">
		  		
		  		<div class="row sucursales">

		  			<div data-aos="fade-right" class="col-md-6 col-izq">
		  				<h2 class="bebas">BUENOS AIRES / BARCELONA</h2>
		  				<p>
		  					Vazquez nació al calor del entusiasmo de un grupo de emprendedores en los años 80'. Rápidamente se pusieron de acuerdo en el fin del negocio, dar respuestas habitacionales concretas y fáciles de llevar a cabo. En esa etapa por razones logísticas y de conocimiento del terreno, los esfuerzos y emprendimientos estuvieron localizados en los barrios de Flores, caballito y belgrano. Realidades económicas y políticas inestables a lo largo de estos cuarenta años nos llevó a reconfigurarnos, adaptarnos a los nuevos escenarios, pero nunca dejando de ser punta de lanza cuando hablamos de construcciones desde el día cero.
		  				</p>
		  			</div>

		  			<div data-aos="fade-left" class="col-md-6 col-der">
		  				<p>
		  					Es un orgullo para nosotros contar con un plantel propios de arquitectos, ilustradores, diseñadores que conforman nuestro equipo creativo que de manera mancomunada trabajan para dar respuesta a las necesidades de nuestros potenciales clientes.
		  				</p>
		  				<p>
								De aquellos inicios en los 80' a hoy llevamos construidos más de 40 edificios ubicados en su mayoría en los barrios anteriormente mencionados, desde monoambientes a pisos de categoría senior, todas nuestras construcciones llevan el inconfundible sello de la familia Vazquez
							</p>
							<p>
								Además para nosotros es un enorme orgullo contarles que en 2017 abrimos una sucursal de nuestra empresa en Barcelona, España, donde ya llevamos adelante el primer proyecto de pronta culminación.
		  				</p>
		  			</div>

		  		</div>

		  		<div class="row innovacion">

		  			<div data-aos="fade-right" class="col-md-6 col-izq">
		  				<div class="content_img">
		  					<img class="img-fluid" src="./img/empresa/empresa-a.jpg" alt="edificio vqz construccion a">
		  				</div>
		  				<h2 class="bebas">INTEGRIDAD</h2>
		  				<p>
		  					Nos relacionamos con nuestros clientes teniendo un trato honesto, transparente y respetuoso. De esta forma, nos aseguramos de entablar buenas relaciones con aquellos que decidan comprar nuestros servicios. Así, podemos complacer más a la clientela y hacerlos sentir mas cómodos en nuestras edificaciones.
		  				</p>
		  			</div>

		  			<div data-aos="fade-left" class="col-md-6 col-der">
		  				<h2 class="bebas">INNOVACIÓN</h2>
		  				<p>
		  					A través de los años, Vazquez Obras y Servicios se ha encaminado hacia una actividad integrada, especializándose en la implementación y desarrollo de procesos industriales relacionados con el diseño y la construcción de proyectos de inversión, vivienda y oficinas. Uno de nuestros objetivos principales es la modernización constante de nuestros proyectos, aspirando a mejorar cada día y brindar un servicio de mejor calidad.
		  				</p>
		  				<div class="content_img">
		  					<img class="img-fluid" src="./img/empresa/empresa-b.jpg" alt="edificio vqz construccion b">
		  				</div>
		  			</div>

		  		</div>

		  	</div>
		  </div>

		</section>
		<!-- Informacion end -->

		<!--  Números -->
		<section class="container-fluid numeros">
			<div class="container">
				<div class="row">
					<div class="col-md-12 container_numeros">

						<div data-aos="fade-up" class="content_numeros">
							<p class="bebas"><span id="years">35</span><br><span class="description">años</span></p>
						</div>

						<div data-aos="fade-up" class="content_numeros">
							<p class="bebas"><span id="constructions">40</span><br><span class="description">obras</span></p>
						</div>
						
					</div>
				</div>
			</div>
		</section>
		<!--  Números end -->

		<!-- Contacto -->
		<?php include_once('./includes/modulo-contacto.php'); ?>

	</section>
	<!-- Contenido EMPRESA end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script src="https://www.google.com/recaptcha/api.js?render=<?= $_ENV['RECAPTCHA_KEY_SITE'] ?>"></script>
	<script src="./dist/bundle.js"></script>

</body>

</html>