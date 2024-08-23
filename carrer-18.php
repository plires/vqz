<?php

require('includes/config.inc.php');
require('includes/get-variable-handling.php');
$current = 'obra_curso';
$obra = 'carrer_18';

echo "
	<script>
		var section_detalle = true
		var obra = 'carrer_18'
	</script>
	";

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Estamos poniendo en marcha un nuevo proyecto que transformará la zona. Muy pronto vas a conocer todos los detalles.">
	<title>VQZ - Constructora - Carrer de les Premses 18</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

	<link rel="stylesheet" type="text/css" href="./node_modules/normalize.css/normalize.css">
	<link rel="stylesheet" type="text/css" href="./fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/aos/dist/aos.css" />
	<link rel="stylesheet" type="text/css" href="./node_modules/lightbox2/dist/css/lightbox.min.css" />
	<link rel="stylesheet" type="text/css" href="./css/app.css">
</head>

<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Contenido OBRA DETALLE -->
	<section id="app" class="obra_detalle aranguren_1061 muniz_1060 placa_casernas_12 carrer_18">

		<!-- Manchas -->
		<div id="manchas_top"></div>
		<div id="manchas_middle"></div>
		<div id="manchas_bottom"></div>
		<!-- Manchas end -->

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Video -->
		<section class="first_section video_content">
			<div class="video"></div>
			<div data-aos="fade-left" class="direccion">
				<h1>
					<span class="calle bebas">Carrer de les Premses</span>
					<span class="numero bebas">18</span>
				</h1>
			</div>
		</section>
		<!-- Video end -->

		<!-- Caracteristicas -->
		<section class="container caracteristicas">

			<div class="row">
				<div class="col-md-6">
					<h2 data-aos="fade-up" class="bebas">ALGO<br><span>NUEVO ESTÁ<br>LLEGANDO</span></h2>
				</div>
				<div class="col-md-6">
					<p data-aos="fade-up">
						Estamos poniendo en marcha un nuevo proyecto que transformará el barrio. Muy pronto vas a conocer todos los detalles.
					</p>
					<p data-aos="fade-up">
						Un edificio con unidades de calidad, construido con los mejores materiales y accesorios de primera línea.
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
					<h2 class="bebas ultimas_unidades">ENTREGA DICIEMBRE 2025</h2>
				</div>
			</div>

		</section>
		<!-- Caracteristicas end -->

		<!-- Planos Mobile -->
		<section data-aos="fade-up" class="container planos_mobile">
			<div class="row">
				<div class="col-sm-12">

					<h2 class="bebas">Planos Carrer de les Premses</h2>

					<div id="carouselPlanosMobile" class="carousel slide carousel-fade" data-bs-ride="carousel">
						<div class="carousel-inner">

							<div class="carousel-item active">
								<h4 class="bebas">Planta Primera</h4>
								<img
									src="./img/obras-individuales/carrer-18/slide-mobile/planta-primera.png"
									class="d-block w-100"
									alt="primer planta">
							</div>

							<div class="carousel-item">
								<h4 class="bebas">Planta Segunda</h4>
								<img
									src="./img/obras-individuales/carrer-18/slide-mobile/planta-segunda.png"
									class="d-block w-100"
									alt="segunda planta">
							</div>

						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselPlanosMobile" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselPlanosMobile" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>

				</div>
			</div>
		</section>
		<!-- Planos Mobile end -->

		<!-- Planos Desktop -->
		<section class="container-fluid planos_desktop">
			<div class="container">

				<div class="row">
					<h2 id="title_floor" class="bebas">Planos Carrer de les Premses</h2>
					<h3 data-aos="fade-up" class="bebas" id="title_ambiente">Planta Segunda</h3>
				</div>

				<div class="row">

					<div class="col-sm-6 content_plano">
						<div data-aos="fade-up" class="content_map">
							<img class="img-fluid" src="./img/obras-individuales/carrer-18/planos-plantas.png" alt="plano carrer presmes 18">

							<svg
								id="map1"
								version="1.1"
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink"
								x="0px"
								y="0px"
								viewBox="0 0 116 150"
								style="enable-background:new 0 0 116 150;"
								xml:space="preserve">
								<path
									data-plano="1"
									data-plano-title="Planta Primera"
									data-plano-floor="Planos Carrer de les Premses"
									class="map transition"
									d="M13.4,156c0-0.1,0-0.4-0.1-0.4c-0.3-0.1-0.6-0.1-1.1-0.2c0.3-0.4,0.6-0.7,0.9-0.9c-0.3-0.4-0.6-0.7-1-1.1
										c0.3-0.2,0.7-0.6,0.3-1.1c-0.3-0.4-0.7-0.6-1.3-1c0.6,0.1,1,0.1,1.7,0.2c-0.4-0.4-0.6-0.6-0.8-0.8c0.1,0,0.2-0.1,0.2-0.1
										c0.5,0.2,1,0.2,1.5,0c0.4-0.1,0.8,0,1.3,0c0.2-0.7-0.2-1.6,0.5-2.3c0.3,0.2,0.7,0.4,1.1,0.7c0.2-0.5,0.2-1.2,1-1.2
										c0.2,0.2,0.3,0.5,0.6,0.8c0.4-0.2,0.7-0.4,1-0.6c0-0.3,0.1-0.7,0.1-1.1c0.1,0,0.1,0,0.2,0c0.1,0.3,0.2,0.5,0.3,0.7
										c0.3-0.3,0.7-0.6,1.2-1.1c-0.2-1-0.4-2.3-0.7-3.6c-1.3,0.2-2.5,0.3-3.8,0.5c-0.2-0.5-0.4-1-0.7-1.5c-0.1-0.1-0.4,0-0.7,0
										c0,0.5,0,0.9,0,1.5c-0.5-0.3-0.9-0.4-1.3-0.6c0.3-0.1,0.4-0.2,0.7-0.4c-0.8-0.4-1.6-1-2.4-1.2c-0.7-0.2-0.9-0.5-1-1.1
										c0.6,0.1,1.2,0.3,1.9,0.1c-1.1-0.7-1.1-0.7-1.9-0.1c-0.1-0.1-0.2-0.2-0.3-0.2c0.1-0.2,0.3-0.4,0.5-0.6c-0.3,0-0.6,0-1,0
										c0.2-0.6,0.3-1.1,0.4-1.6c-0.4-0.3-0.8-0.6-1.2-1c0.3-0.3,0.4-0.6,0.7-0.9c-0.3-0.1-0.6-0.2-0.8-0.3c0.2-0.4,0.5-0.9,0.7-1.4
										c-0.4-0.1-0.6-0.2-1-0.3c0.8-0.1,0.4-1.3,1.3-1.3c-0.4-0.1-0.8-0.3-1.3-0.5c0.6-0.4,1.1-0.8,1.6-1.2c-0.2-0.3-0.3-0.5-0.5-0.7
										c0.2-0.4,0.5-0.8,0.7-1.3c0.2-0.4,0.3-0.7,0.2-1.2c-0.1-0.5-0.2-1.5,0.9-1.5c0.1,0,0.3-0.5,0.4-0.8c0.6,0.5,1,0.9,1.4,1.2
										c0.4-0.8,1,0,1.5-0.1c0.5,0,1-0.1,1.7-0.2c-0.1-1.1-0.3-2.1-0.4-3.3c3.1-0.6,6.1-1.2,9.3-1.8c-1.4-7.1-2.7-14-4.1-21
										c-0.4-0.1-0.7-0.2-1.1-0.4c0-0.1-0.1-0.2-0.1-0.3c-0.2-0.8-0.3-1.6-0.5-2.4c-0.1-0.4-0.2-0.8,0.2-1.1c0.1-0.2,0.2-0.5,0.1-0.8
										c-1.9-7.3-2.9-14.9-4.5-22.3c-0.4-1.8-0.9-3.7-1.4-5.5c0.3-0.1,0.6-0.3,1-0.5C12.1,47.2,8.4,27.5,4.6,7.7c62.1,0,124,0,186.1,0
										c0,17,0,33.9,0,50.9c17.1,0.1,34.1,0.1,51.2,0.2c0.1,4.3,0,8.5,0,12.6c0,4.2,0,8.4,0,12.6c0,4.2,0,8.4,0,12.5c1,0.3,55.2,0.3,56.5,0
										c0-6.3,0-12.7,0-19.2c28.4,0,56.6,0,85,0C379.2,54,375.1,31,370.9,7.8c16,0,32,0,48,0c0,2,0,4,0,6c0,2,0,4,0,6s0,4,0,6s0,4,0,6
										c0,2,0,4,0,6c0,2.1,0,4.1,0,6.2c0,2,0,4,0,6c0,2,0,4,0,6c0,2,0,4,0,6c0,2,0,4,0,6c0,2,0,4,0,6.1c0.5,0,0.9,0.1,1.3,0.1
										c5.6,0,11.2,0,16.9,0c1.6,0,3.3-0.1,4.9-0.2c0.3,0,0.7,0,1,0c1.1,0.1,1.2,0.2,1.4,1.3c1,4.7,1.9,9.5,2.8,14.2
										c2.6,14,5.2,28,7.8,41.9c2.3,12.6,4.7,25.2,7,37.8c3,16.1,6,32.2,9,48.3c1.4,7.5,2.8,15,4.2,22.5c0.1,0.4,0.1,0.7,0.1,1.2
										c-0.4-0.1-0.7-0.1-1-0.2c-8-2.1-15.9-4.1-23.9-6.2c-2.4-0.6-4.7-1.4-7.1-2c-1.1-0.3-2.3-0.3-3.5-0.4c-0.2-0.9-1,0.1-1.4-0.5
										c-0.2-0.4-0.9-0.5-1.5-0.6c-0.6-0.2-1.2-0.3-1.8-0.5c-5.2-1.4-10.4-2.8-15.7-4.2c-0.4-0.1-0.7-0.2-1.1-0.3c0-0.5,0-0.9,0-1.4
										c-0.4-0.1-0.8-0.3-1.1-0.4c-2.2-0.6-4.4-1.1-6.6-1.8c-1-0.3-1.9-0.3-2.9-0.2c-6.9,1-13.7,2-20.6,2.9c-7.2,1-14.4,2.1-21.7,3.1
										c-7.3,1-14.5,2-21.8,3.1c-7.8,1.1-15.7,2.2-23.5,3.3c-6.7,0.9-13.4,1.9-20.1,2.8c-6.7,0.9-13.4,1.9-20.1,2.9
										c-6.7,0.9-13.4,1.9-20.1,2.8c-6.7,0.9-13.4,1.9-20.1,2.9c-6.7,0.9-13.4,1.9-20.1,2.8c-6.1,0.9-12.3,1.8-18.4,2.6
										c-6.7,0.9-13.4,1.9-20.1,2.8c-6.7,0.9-13.4,1.9-20.1,2.9c-7.3,1-14.5,2-21.8,3c-6.1,0.9-12.3,1.8-18.4,2.6
										c-6.7,0.9-13.4,1.9-20.1,2.8c-6.7,0.9-13.4,1.9-20.1,2.9c-6.1,0.9-12.3,1.7-18.4,2.6c-2,0.3-4.1,0.6-6.1,0.9
										c-0.4,0.1-0.9,0.1-1.4,0.1c-1-5.1-1.9-10-2.9-15.2c-3.2,0.6-6.3,1.1-9.5,1.7c-3.2-16.6-6.3-33.2-9.5-49.8c3.1-0.7,6.2-1.3,9.4-2
										c-2.3-11.9-4.5-23.7-6.8-35.7c-1.7,0.3-3.2,0.5-4.8,0.9c-1.5,0.3-3.1,0.2-4.4,1.3c-0.3-0.8-0.7-1.7-1-2.7c0.3-0.4,0.3-1,0-1.4
										c-0.3-0.3-1-0.3-1.4,0.3c-0.4,0.5-0.9,0.4-1.2,0.1c-0.5-0.5-0.9-0.2-1.5-0.1c0.2,0.8,0.3,1.6,0.5,2.5c-0.9-0.4-0.7,0.7-1.4,0.8
										c-0.1-0.2-0.3-0.4-0.6-0.7c-0.1,0.3-0.2,0.6-0.3,1.1c-0.2-0.5-0.3-0.8-0.4-1.2c-0.7,0.1-1.4-0.5-2.2,0.1c0.4-0.7,0.8-1.5,1.2-2.4
										c-0.5,0.2-0.8,0.3-1.2,0.5c0.1-0.2,0.8-1,1.2-1.3c-0.2-0.4-0.4-0.9-0.5-1.2c-0.7-0.1-1.3-0.3-2-0.4c-0.4-0.4,0.9-0.4,0.4-1.1
										c-0.2-0.2,0.1-0.8,0.2-1.3c-0.3,0-0.6-0.1-0.9-0.1c0.1-0.5,0.2-0.9,0.4-1.7c-0.3,0.3-0.4,0.4-0.5,0.5c-0.3-0.5-0.7-0.9-1.1-1.4
										c0,0,0.1-0.1,0.1-0.1c0.3,0.1,0.6,0.4,0.8,0.3c0.3,0,0.5-0.4,0.7-0.5c0.5-0.3,0.9-0.8,1.6-0.4c0.2,0.1,0.5,0.1,0.7,0.2
										c0.2-0.5,0.5-1,0.7-1.6c0.2,0.2,0.4,0.3,0.6,0.4c0,0,0.1-0.1,0.1-0.1c-0.3-1.8-0.4-3.7-1.1-5.5c-0.2-0.6-0.3-1.2-0.4-1.9
										c-1,0.1-1.1,0.2-0.9,0.8c0.2,1,0.5,1.9,0.9,2.8c0.3,0.8,0.3,1.5-0.1,2.2c-1-0.2-1.9-0.6-2.9-1c0.2-0.3,0.4-0.5,0.6-0.7
										c-0.1-0.1-0.2-0.2-0.2-0.2c-0.6,0.3-1.2,0.2-1.7-0.2c-0.3-0.3-0.7-0.5-1.2-0.9C13,156,13.3,156,13.4,156c0.3,0.1,0.5,0.2,0.9,0.4
										C14.2,155.6,14.2,155.6,13.4,156z M17.1,166.6c0.7,0.4,1.2,0.3,1.4,0.1c0.1-0.1,0-0.4,0-0.7C17.9,166.2,17.5,166.4,17.1,166.6z
										M19.7,152.5c0,0.1,0.1,0.2,0.1,0.3c0.4-0.1,0.8-0.2,1.2-0.4c0-0.1-0.1-0.2-0.1-0.3C20.5,152.2,20.1,152.3,19.7,152.5z M13.9,126.5
										c-0.2-0.1-0.3-0.2-0.5-0.2c-0.1,0-0.2,0.2-0.2,0.2c0,0.1,0.1,0.3,0.2,0.3C13.5,126.8,13.6,126.6,13.9,126.5z" />
							</svg>

							<svg
								id="map2"
								version="1.1"
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink"
								x="0px"
								y="0px"
								viewBox="0 0 115 148"
								style="enable-background:new 0 0 115 148;"
								xml:space="preserve">
								<path
									data-plano="2"
									data-plano-title="Planta Segunda"
									data-plano-floor="Planos Carrer de les Premses"
									class="map transition active"
									d="M9,146.1c0.6-0.7,1.4-0.7,2.3-0.6c0.1-0.7,0.3-1.4,0.5-2.2c0.4,0.2,0.8,0.4,1.3,0.7c-0.1-0.8,0.4-1,1-1.2
										c0.1,0.2,0.3,0.4,0.4,0.6c0.6,0.2,1.3-0.5,1.4-1.5c0.1,0.3,0.2,0.5,0.4,0.9c0.2-0.4,0.2-0.7,0.4-0.9c0.2-0.2,0.5-0.2,0.8-0.3
										c-0.2-1.3-0.5-2.5-0.7-3.8c-1.3,0.2-2.5,0.4-3.8,0.6c-0.4-1.9-0.7-3.6-1.1-5.3c-0.3,1.3,0.2,2.5,0.3,3.8c-0.1,0-0.3,0.1-0.6,0.1
										c0,0.4,0,0.8,0,1.4c-0.5-0.2-0.8-0.4-1.3-0.6c0.2-0.2,0.4-0.3,0.6-0.5c-0.9-0.5-1.7-0.9-2.5-1.4l0,0c0.4-0.3,0.7-0.5,1.2-0.9
										c-0.8-0.3-1.6-0.6-2.5-1c0.1-0.5,0.2-1.1,0.3-1.7c-0.1,0-0.3,0-0.6,0c-0.1-0.2-0.3-0.5-0.5-0.9c0.2-0.2,0.4-0.4,0.7-0.7
										c-0.4-0.1-0.7-0.2-0.9-0.3c0.2-0.5,0.4-0.9,0.7-1.4c-0.3-0.1-0.5-0.2-0.7-0.3c0.1-0.3,0.2-0.6,0.3-1c0.1,0,0.4-0.1,0.7-0.1
										c-0.1-0.2-0.1-0.4-0.2-0.5c-0.3-0.1-0.6-0.1-0.9-0.2c0.5-0.5,0.9-0.9,1.3-1.3c-0.2-0.7-0.4-1.4,0.2-2c0.2-0.2,0.1-0.6,0.1-1
										c0-0.4,0-0.9,0-1.2c0.2-0.6,1.3,0,1.1-1c0.2,0,0.4-0.1,0.6,0c1.3,0.8,2.2,1.1,3.4,0.8c0.2,0,0.4-0.1,0.6-0.2c-0.2-1-0.3-2-0.5-3.1
										c3.1-0.6,6.2-1.2,9.3-1.8c-1.3-7-2.7-13.9-4-20.8c-0.4-0.1-0.8-0.3-1.2-0.4c-0.2-1-0.4-2-0.6-3c0-0.2-0.1-0.5,0-0.6
										c0.8-0.5,0.3-1.2,0.2-1.8c-1.4-7.4-2.8-14.7-4.2-22c-0.1-0.5-0.1-1-0.7-1.3c-0.2-0.1-0.3-0.5-0.3-0.7c-0.2-1-0.4-1.9-0.6-2.9
										c0.3-0.2,0.7-0.3,1-0.5C8.2,42.4,4.4,22.9,0.7,3.4c1-0.3,182.9-0.4,185.4-0.1c0,0,0.1,0.1,0.1,0.1c0,0,0.1,0.1,0.1,0.1
										c0,0,0,0.1,0,0.1c0,0.1,0,0.2,0,0.2c0,0,0,0.1,0,0.1c0,0.1,0,0.2,0,0.4c0,16.3,0,32.6,0,48.8c0,0.1,0,0.2,0,0.2c0,0,0,0.1,0,0.1
										c0,0,0,0.1,0,0.1c0,0,0,0.1,0.1,0.3c0.5,0,1,0.1,1.5,0.1c10.4,0,20.8,0,31.2,0c5.6,0,11.1,0,16.7,0c0.5,0,1,0,1.6,0
										c0,12.6,0,25.1,0,37.6c1,0.3,54.2,0.4,56.3,0.1c0-0.4,0.1-0.9,0.1-1.4c0-5.4,0-10.9,0-16.3c0-0.5,0-1,0-1.5c31.1,0,62.1,0,93.1,0
										c0.1,0.2,0.2,0.5,0.3,0.8c1.5,8.1,3,16.2,4.5,24.4c0.1,0.4,0.2,0.7-0.1,1.1c-0.2,0.2-0.1,0.6,0,0.9c1.3,7,2.6,14,3.9,21
										c0.5,2.8,1,5.6,1.6,8.4c0.1,0.6,0.1,1.2,0.7,1.6c0.2,0.1,0.2,0.5,0.3,0.8c1.1,5.7,2.1,11.3,3.2,17c0.1,0.6,0.4,1.2-0.1,1.7
										c-0.1,0.1,0,0.5,0.1,0.8c1.8,9.9,3.7,19.8,5.5,29.7c0.1,0.4,0.1,0.8,0.6,1.2c0.2,0.2,0.3,0.6,0.4,1c1.1,5.8,2.2,11.6,3.2,17.4
										c1.1,6,2.2,12.1,3.4,18.1c0.1,0.4,0.1,0.9,0.2,1.5c-0.4-0.1-0.7-0.1-1-0.2c-2.6-0.7-5.1-1.3-7.7-2.1c-1-0.3-1.9-0.3-2.9-0.2
										c-6.2,0.9-12.5,1.8-18.7,2.6c-6.1,0.9-12.1,1.7-18.2,2.6c-5.5,0.8-11,1.5-16.5,2.3c-4.9,0.7-9.9,1.4-14.8,2.1
										c-5.5,0.8-11,1.5-16.5,2.3c-5.5,0.8-11,1.6-16.5,2.3c-4.9,0.7-9.8,1.4-14.7,2.1c-4.9,0.7-9.9,1.4-14.8,2.1
										c-4.9,0.7-9.8,1.4-14.7,2.1c-5.5,0.8-11.1,1.6-16.6,2.3c-4.9,0.7-9.8,1.4-14.7,2.1c-4.9,0.7-9.9,1.4-14.8,2.1
										c-4.9,0.7-9.8,1.4-14.7,2.1c-5,0.7-10,1.4-15.1,2.1c-5.5,0.8-11,1.5-16.5,2.3c-5.5,0.8-11,1.6-16.5,2.3c-5.5,0.8-10.9,1.5-16.4,2.3
										c-5.5,0.8-11.1,1.6-16.6,2.3c-4.9,0.7-9.9,1.4-14.8,2.1c-4.9,0.7-9.9,1.4-14.8,2.1c-4.9,0.7-9.8,1.4-14.7,2.1
										c-4.9,0.7-9.9,1.4-14.8,2.1c-1.6,0.2-3.2,0.4-5,0.7c-1-5.1-1.9-10.1-2.9-15.2c-3.2,0.6-6.2,1.2-9.4,1.8c-3.2-16.6-6.3-33-9.5-49.6
										c0.5-0.2,0.9-0.4,1.3-0.5c2.6-0.5,5.2-1,8-1.5c-1.1-6-2.3-11.9-3.4-17.8c-1.1-5.9-2.3-11.9-3.4-17.9c-1.1,0.2-2,0.4-3,0.5
										c-1.3,0.2-2.6,0.5-3.9,0.7c-0.8,0.2-1.5,0.5-2.5,0.7c-0.3-1.3-0.6-2.8-1-4.3c-0.6,0.3-1.4,0-1.7,0.9c-0.7-0.1-1.4-0.7-2.2-0.1
										c0.5,1.2-0.2,2.1-0.8,3.3c-0.3-0.4-0.5-0.6-0.7-1c-0.1,0.4-0.2,0.6-0.2,0.9c0,0-0.1,0-0.1,0c-0.1-0.4-0.2-0.8-0.2-1.2
										c-0.1,0-0.4,0-0.7,0.1c-0.1-0.2-0.1-0.4-0.2-0.6c-0.3,0.5-0.6,0.9-1.3,1.2c0.4-0.9,0.7-1.6,1-2.4c-0.1-0.1-0.3-0.3-0.5-0.5
										c0.2-0.2,0.4-0.3,0.6-0.5c-0.2-0.4-0.3-0.8-0.5-1.3c-0.5,0.4-0.8-0.1-1-0.5c-0.3,0.2-0.5,0.3-0.8,0.5c-0.1-0.2-0.1-0.2-0.1-0.3
										c-0.1-0.5,0.7-0.4,0.5-1.1c-0.1-0.3,0.1-0.8,0.1-1.2c-0.3-0.1-0.5-0.2-0.8-0.2c0-0.5,0.1-0.9,0.1-1.5c-0.9,0.2-1-0.5-1.3-1
										c0.3,0.1,0.5,0.3,0.8,0.4c0.5-0.4,0.9-0.9,1.4-1c0.5-0.2,1.1,0.1,1.8,0.1c0.1-0.7,0.4-1.3,1.4-1.2c-0.2-1.3-0.4-2.6-0.7-3.9
										c-0.3-1.2-0.6-2.3-1-3.6c-0.3,0.2-0.8,0.2-0.8,0.4c-0.2,0.4-0.2,1-0.1,1.4c0.2,0.9,0.5,1.7,0.9,2.5c0.4,0.7,0.2,1.2-0.2,1.9
										c-0.3-0.4-0.5-0.8-0.8-1.2c0,0.3,0,0.5,0,0.7c-0.8-0.3-1.5-0.5-2.2-0.8c-0.3,0.2-0.5,0.8-1,0.4c0.1-1,1.7,0,1.8-1.3
										c-0.4,0.1-0.7,0.2-1.1,0.3c-0.2-0.2-0.5-0.5-0.8-0.8c0.2-0.3,0.4-0.5,0.7-0.8c-0.7-0.2-1.2-0.4-2-0.7c0.4-0.3,0.7-0.4,1-0.7
										c-0.2-0.1-0.2-0.2-0.3-0.2c-0.1,0-0.3-0.1-0.4-0.1c0.3-0.7-0.3-0.5-0.8-0.4c0.4-0.5,0.7-0.8,1-1.2c-0.5-0.4-1-0.7-1.6-1.1
										C8.1,146.1,8.6,146.7,9,146.1L9,146.1z M13,161.7c1.3,0,1.3,0,1.4-0.8C14,161.1,13.6,161.3,13,161.7z M15.8,147.3
										c0.5,0.2,0.9,0.4,1.1-0.4C16.5,147.1,16.2,147.2,15.8,147.3z M13,150.8c-0.8-0.2-0.8,0.1-0.6,0.8C12.6,151.2,12.7,151.1,13,150.8z
										M9.5,121.8c0.1-0.2,0.3-0.3,0.2-0.3c0-0.1-0.2-0.2-0.3-0.3c-0.1,0.1-0.2,0.2-0.2,0.2C9.2,121.5,9.3,121.6,9.5,121.8z" />
							</svg>

						</div>
					</div>

					<div data-aos="fade-up" class="col-sm-6 content_render">

						<img
							data-render="1"
							class="img-fluid render"
							src="./img/obras-individuales/carrer-18/planos-primer-planta.png"
							alt="plano carrer presmes 18 - A">

						<img
							data-render="2"
							class="img-fluid render active"
							src="./img/obras-individuales/carrer-18/planos-segunda-planta.png"
							alt="plano carrer presmes 18 - B">

					</div>

				</div>
			</div>
		</section>
		<!-- Planos Desktop end -->

		<!-- Avance de Obra -->
		<section class="container avance">
			<div class="row">

				<div class="col-md-12 content_title">
					<h2 data-aos="fade-up" class="bebas">AVANCE DE OBRA</h2>
				</div>

				<div class="col-md-12 content_avances">

					<div data-aos="fade-up" class="etapa">
						<div class="content_number">
							<p id="demolicion" data-value="100" class="percentage bebas">100</p><span class="bebas">%</span>
						</div>
						<span class="circle first">
							<i class="fa-solid fa-bars-progress"></i>
						</span>
						<p class="title bebas">demolición</p>
					</div>

					<div data-aos="fade-up" class="etapa">
						<div class="content_number">
							<p id="excavacion" data-value="100" class="percentage bebas">100</p><span class="bebas">%</span>
						</div>
						<span class="circle">
							<i class="fa-solid fa-bars-progress"></i>
						</span>
						<p class="title bebas">EXCAVACIÓN</p>
					</div>

					<div data-aos="fade-up" class="etapa">
						<div class="content_number">
							<p id="extructuras" data-value="60" class="percentage bebas">60</p><span class="bebas">%</span>
						</div>
						<span class="circle">
							<i class="fa-solid fa-bars-progress"></i>
						</span>
						<p class="title bebas">ESTRUCTURAS</p>
					</div>

					<div data-aos="fade-up" class="etapa">
						<div class="content_number">
							<p id="mamposteria" data-value="0" class="percentage bebas">0</p><span class="bebas">%</span>
						</div>
						<span class="circle">
							<i class="fa-solid fa-bars-progress"></i>
						</span>
						<p class="title bebas">MAMPOSTERÍA</p>
					</div>

					<div data-aos="fade-up" class="etapa">
						<div class="content_number">
							<p id="instalaciones" data-value="0" class="percentage bebas">0</p><span class="bebas">%</span>
						</div>
						<span class="circle">
							<i class="fa-solid fa-bars-progress"></i>
						</span>
						<p class="title bebas">INSTALACIONES</p>
					</div>

					<div data-aos="fade-up" class="etapa">
						<div class="content_number">
							<p id="terminaciones" data-value="0" class="percentage bebas">0</p><span class="bebas">%</span>
						</div>
						<span class="circle last">
							<i class="fa-solid fa-bars-progress"></i>
						</span>
						<p class="title bebas">TERMINACIONES</p>
					</div>

				</div>
			</div>
		</section>
		<!-- Avance de Obra end -->

		<!-- Galería -->
		<section class="container galeria">

			<div class="row">

				<div class="col-md-12">
					<a
						data-aos="fade-up"
						href="./img/obras-individuales/carrer-18/render-large.jpg"
						data-lightbox="carrer"
						data-title="Fachada Carrer de les Premses"
						data-alt="Fachada Carrer de les Premses large">
						<img class="img-fluid" src="./img/obras-individuales/carrer-18/render-large.jpg" alt="Fachada Carrer de les Premses">
						<div class="content">
							<h4 class="bebas">Fachada</h4>
						</div>
					</a>
				</div>

				<div class="col-md-12">
					<a
						data-aos="fade-up"
						href="./img/obras-individuales/carrer-18/fachada.jpg"
						data-lightbox="carrer"
						data-title="Fachada Carrer de les Premses"
						data-alt="Fachada Carrer de les Premses large">
						<img class="img-fluid" src="./img/obras-individuales/carrer-18/fachada.jpg" alt="Fachada carrer 18">
						<div class="content">
							<h4 class="bebas">Fachada</h4>
						</div>
					</a>
				</div>

				<div class="col-md-12">
					<a
						data-aos="fade-up"
						href="./img/obras-individuales/carrer-18/interior-1.jpg"
						data-lightbox="carrer"
						data-title="Interior Carrer de les Premses"
						data-alt="Interior Carrer de les Premses - 1">
						<img class="img-fluid" src="./img/obras-individuales/carrer-18/interior-1.jpg" alt="Interior carrer 18 - 1">
						<div class="content">
							<h4 class="bebas">Interior</h4>
						</div>
					</a>
				</div>

				<div class="col-md-6">
					<a
						data-aos="fade-up"
						href="./img/obras-individuales/carrer-18/interior-2.jpg"
						data-lightbox="carrer"
						data-title="Interior Carrer de les Premses"
						data-alt="Interior Carrer de les Premses - 2">
						<img class="img-fluid" src="./img/obras-individuales/carrer-18/interior-2.jpg" alt="Interior carrer 18 - 2">
						<div class="content">
							<h4 class="bebas">Interior</h4>
						</div>
					</a>
				</div>

				<div class="col-md-6">
					<a
						data-aos="fade-up"
						href="./img/obras-individuales/carrer-18/interior-3.jpg"
						data-lightbox="carrer"
						data-title="Interior Carrer de les Premses"
						data-alt="Interior Carrer de les Premses - 3">
						<img class="img-fluid" src="./img/obras-individuales/carrer-18/interior-3.jpg" alt="Interior carrer 18 - 3">
						<div class="content">
							<h4 class="bebas">Interior</h4>
						</div>
					</a>
				</div>

			</div>

		</section>
		<!-- Galería end -->

		<!--  Ubicación -->
		<section class="ubicacion container-fluid">

			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<h2 data-aos="fade-up" class="bebas">UBICACIÓN</h2>

						<p data-aos="fade-up" class="featured">VILANOVA Y LA GELTRÚ, tierra de buen clima</p>

						<p data-aos="fade-up">
							Vilanova i la Geltrú es una ciudad y municipio de la provincia de Barcelona (Cataluña), España, capital de la comarca del Garraf. Se sitúa a 45 km tanto de Barcelona como de Tarragona.
						</p>

						<p data-aos="fade-up">
							Cuenta la leyenda que la villa nueva nació porque el señor feudal de la Geltrú promulgó una ley según la cual, cuando una joven se casaba, tenía que pasar su primera noche con él por el derecho de pernada, y muchos geltrunenses se fueron, instalándose cerca del mar, en territorios de Cubellas, fundando la Villa Nueva de Cubellas. Con el tiempo ambas crecieron hasta convertirse en una sola.
						</p>
					</div>
				</div>
			</div>

			<div data-aos="fade-up" class="content_map">

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3000.7055999255404!2d1.7228580157965019!3d41.2281856792791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a3871d515c1af5%3A0x6ca4a9e338a5873c!2sCarrer%20de%20les%20Premses%2C%2018%2C%2008800%20Vilanova%20i%20la%20Geltr%C3%BA%2C%20Barcelona%2C%20Espa%C3%B1a!5e0!3m2!1ses-419!2sar!4v1668631415020!5m2!1ses-419!2sar" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				<div data-aos="fade-left" class="content_medios">

					<div class="medios">
						<img class="img-fluid" src="./img/obras-individuales/icono-subte.png" alt="icono subte">
						<h4>Subte:</h4>
						<p>-</p>
					</div>

					<div class="medios">
						<img class="img-fluid" src="./img/obras-individuales/icono-tren.png" alt="icono tren">
						<h4>Tren:</h4>
						<p>-</p>
					</div>

					<div class="medios">
						<img class="img-fluid" src="./img/obras-individuales/icono-colectivo.png" alt="icono colectivo">
						<h4>Colectivos:</h4>
						<p>Líneas <br>Lineas<br>e15.1-e15.2<br>VL1</p>
					</div>

				</div>

			</div>

		</section>
		<!--  Ubicación end -->

		<!-- Contacto -->
		<?php include_once('./includes/modulo-contacto.php'); ?>

	</section>
	<!-- Contenido OBRA DETALLE end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script src="https://www.google.com/recaptcha/api.js?render=<?= $_ENV['RECAPTCHA_KEY_SITE'] ?>"></script>
	<script src="./dist/bundle.js"></script>

</body>

</html>