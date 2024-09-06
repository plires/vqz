<?php

require('includes/config.inc.php');
require('includes/get-variable-handling.php');
$current = 'obra_curso';
$obra = 'muniz_1060';

echo "
	<script>
		var section_detalle = true
		var obra = 'muniz_1060'
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
	<meta name="description" content="Un edificio de calidad con unidades de 2 y 3 ambientes construido con los mejores materiales y accesorios de primera línea.">
	<title>VQZ - Constructora - Muñiz 1060 - CABA</title>

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
	<section id="app" class="obra_detalle aranguren_1061 muniz_1060">

		<!-- Manchas -->
		<div id="manchas_top"></div>
		<div id="manchas_middle"></div>
		<div id="manchas_bottom"></div>
		<!-- Manchas end -->

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Video -->
		<section class="first_section video_content">
			<div class="video">
				<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
					<source src="videos/muniz.mp4" type="video/mp4">
				</video>
			</div>
			<div data-aos="fade-left" class="direccion">
				<h1>
					<span class="calle bebas">Muñiz</span>
					<span class="numero bebas">1060</span>
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
						Un edificio de calidad con unidades de 2 y 3 ambientes construido con los mejores materiales y accesorios de primera línea.
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
					<h2 class="bebas ultimas_unidades">entrega abril 2026</h2>
				</div>
			</div>

		</section>
		<!-- Caracteristicas end -->

		<!-- Planos Mobile -->
		<section data-aos="fade-up" class="container planos_mobile">
			<div class="row">
				<div class="col-sm-12">

					<div id="carouselPlanosMobile" class="carousel slide carousel-fade" data-bs-ride="carousel">
						<div class="carousel-inner">

							<div class="carousel-item active">
								<h2 class="bebas">PISO 1 AL 3</h2>
								<h4 class="bebas">Departamento A</h4>
								<img
									src="./img/obras-individuales/muniz-1060/planos-mobile/piso-1-3-a.png"
									class="d-block w-100"
									alt="PISO 1 AL 3 - Departamento A">
							</div>

							<div class="carousel-item">
								<h2 class="bebas">PISO 1 AL 3</h2>
								<h4 class="bebas">Departamento B</h4>
								<img
									src="./img/obras-individuales/muniz-1060/planos-mobile/piso-1-3-b.png"
									class="d-block w-100"
									alt="PISO 1 AL 3 - Departamento B">
							</div>

							<div class="carousel-item">
								<h2 class="bebas">PISO 1 AL 3</h2>
								<h4 class="bebas">Departamento C</h4>
								<img
									src="./img/obras-individuales/muniz-1060/planos-mobile/piso-1-3-c.png"
									class="d-block w-100"
									alt="PISO 1 AL 3 - Departamento C">
							</div>

							<div class="carousel-item">
								<h2 class="bebas">PISO 4</h2>
								<h4 class="bebas">Departamento A</h4>
								<img
									src="./img/obras-individuales/muniz-1060/planos-mobile/piso-4-a.png"
									class="d-block w-100"
									alt="PISO 4 - Departamento A">
							</div>

							<div class="carousel-item">
								<h2 class="bebas">PISO 4</h2>
								<h4 class="bebas">Departamento B</h4>
								<img
									src="./img/obras-individuales/muniz-1060/planos-mobile/piso-4-b.png"
									class="d-block w-100"
									alt="PISO 4 - Departamento B">
							</div>

							<div class="carousel-item">
								<h2 class="bebas">PISOS 5 AL 8</h2>
								<h4 class="bebas">Departamento A</h4>
								<img
									src="./img/obras-individuales/muniz-1060/planos-mobile/piso-5-8-a.png"
									class="d-block w-100"
									alt="PISO 4 - Departamento A">
							</div>

							<div class="carousel-item">
								<h2 class="bebas">PISOS 5 AL 8</h2>
								<h4 class="bebas">Departamento B</h4>
								<img
									src="./img/obras-individuales/muniz-1060/planos-mobile/piso-5-8-b.png"
									class="d-block w-100"
									alt="PISO 4 - Departamento B">
							</div>

							<div class="carousel-item">
								<h2 class="bebas">PISO 9</h2>
								<h4 class="bebas">Departamento Único</h4>
								<img
									src="./img/obras-individuales/muniz-1060/planos-mobile/piso-9.png"
									class="d-block w-100"
									alt="PISO 9 - Departamento Único">
							</div>

							<div class="carousel-item">
								<h2 class="bebas">PISO 10</h2>
								<h4 class="bebas">Departamento Único</h4>
								<img
									src="./img/obras-individuales/muniz-1060/planos-mobile/piso-10.png"
									class="d-block w-100"
									alt="PISO 10 - Departamento Único">
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

		<!-- Planos Desktop Pisos Superiores -->
		<section class="container-fluid planos_desktop">
			<div class="container">

				<div class="row">
					<h2 data-aos="fade-up" id="title_floor" class="bebas">PISO 10</h2>
					<h3 data-aos="fade-up" class="bebas" id="title_ambiente">Departamento Único</h3>
				</div>

				<div class="row">

					<div class="col-sm-6 content_plano">

						<div data-aos="fade-up" class="content_map">
							<img class="img-fluid" src="./img/obras-individuales/muniz-1060/planos-desktop.png" alt="planos muñiz 1060">

							<svg
								version="1.1"
								id="map1"
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink"
								x="0px"
								y="0px"
								viewBox="0 0 250 243"
								style="enable-background:new 0 0 250 243;"
								xml:space="preserve">
								<path
									data-plano="1"
									data-plano-title="Departamento Único"
									data-plano-floor="PISO 10"
									class="map transition active"
									d="M55,178H3V16.5h52h36.9h25.8V2h4.3h62.2v14.5H257v95.3h-72.8H122V82.5h-4.3H91.9V89H55V178z" />
							</svg>

							<svg
								version="1.1"
								id="map2"
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink"
								x="0px"
								y="0px"
								viewBox="0 0 250 243"
								style="enable-background:new 0 0 250 243;"
								xml:space="preserve">
								<path
									data-plano="2"
									data-plano-title="Departamento Único"
									data-plano-floor="PISO 9"
									class="map transition"
									d="M84.4,178H58.5h-55V16.5h55V2h25.9h18.8h0.2v14.5h16.8h27V2h4.3h62.2v14.5h72.8v95.3h-72.8h-62.2V82.5h-4.3h-27
									v5.2h-16.8h-0.2v1.4H84.4V178z" />
							</svg>

							<svg
								version="1.1"
								id="map3"
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink"
								x="0px"
								y="0px"
								viewBox="0 0 250 243"
								style="enable-background:new 0 0 250 243;"
								xml:space="preserve">
								<path
									data-plano="3"
									data-plano-title="Departamento A"
									data-plano-floor="PISOS 5 AL 8"
									class="map transition"
									d="M93.7,171.7H19.6v-58.9H1V35.7h18.6V21.6h73.9V8.3H134v13.3h-3.6v60.6h-4v4.7l-32.6,1.3L93.7,171.7L93.7,171.7z" />
							</svg>

							<svg
								version="1.1"
								id="map4"
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink"
								x="0px"
								y="0px"
								viewBox="0 0 250 243"
								style="enable-background:new 0 0 250 243;"
								xml:space="preserve">
								<path
									data-plano="4"
									data-plano-title="Departamento B"
									data-plano-floor="PISOS 5 AL 8"
									class="map transition"
									d="M148.4,105.3h-73H34.9h-2h-8.4V78.5H1.6V19.9h19.6v-2h-0.7V4.7h0.7h11.7h2h38.5h8.2V18h-8.2v6.6h2V20h73V105.3z" />
							</svg>

							<svg
								version="1.1"
								id="map5"
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink"
								x="0px"
								y="0px"
								viewBox="0 0 250 243"
								style="enable-background:new 0 0 250 243;"
								xml:space="preserve">
								<path
									data-plano="5"
									data-plano-title="Departamento A"
									data-plano-floor="PISO 4"
									class="map transition"
									d="M95.6,228.7H21.4v-58.9H2.8V92.7h18.6V1.3h74.2h32.6h4v137.9h-4v6.1l-32.6-0.1V228.7z" />
							</svg>

							<svg
								version="1.1"
								id="map6"
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink"
								x="0px"
								y="0px"
								viewBox="0 0 250 243"
								style="enable-background:new 0 0 250 243;"
								xml:space="preserve">
								<path
									data-plano="6"
									data-plano-title="Departamento B"
									data-plano-floor="PISO 4"
									class="map transition"
									d="M88,228.7H28.2V166H26v-26.8H3.2V1.3H26h2.2H88h61.8h2v77.3h-2V168h2v37.8h-2H88V228.7z" />
							</svg>

							<svg
								version="1.1"
								id="map7"
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink"
								x="0px"
								y="0px"
								viewBox="0 0 250 243"
								style="enable-background:new 0 0 250 243;"
								xml:space="preserve">
								<path
									data-plano="7"
									data-plano-title="Departamento A"
									data-plano-floor="PISO 1 AL 3"
									class="map transition"
									d="M23.4,118.9l-1.9-2.9v1H3.8V10.6h17.7h1.9h68.9h3.8V1.1h10.7h5.1h34.4v33.6h-34.4v5.1h-5.1v2.9H96.1h-3.8v76.2
									C92.3,118.9,23.4,118.9,23.4,118.9z" />
							</svg>

							<svg
								version="1.1"
								id="map8"
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink"
								x="0px"
								y="0px"
								viewBox="0 0 250 243"
								style="enable-background:new 0 0 250 243;"
								xml:space="preserve">
								<path
									data-plano="8"
									data-plano-title="Departamento B"
									data-plano-floor="PISO 1 AL 3"
									class="map transition"
									d="M90.6,107.6H19.8H0.2V4.4h19.6v-2h70.8h52.1h17.1v38h-17.1V98H90.6V107.6z" />
							</svg>

							<svg
								version="1.1"
								id="map9"
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink"
								x="0px"
								y="0px"
								viewBox="0 0 250 243"
								style="enable-background:new 0 0 250 243;"
								xml:space="preserve">
								<path
									data-plano="9"
									data-plano-title="Departamento C"
									data-plano-floor="PISO 1 AL 3"
									class="map transition"
									d="M121.7,77.4h-14.5H3.3V2.6h103.9v1.9h14.5C121.7,4.5,121.7,77.4,121.7,77.4z" />
							</svg>

							<svg
								version="1.1"
								id="map10"
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink"
								x="0px"
								y="0px"
								viewBox="0 0 250 243"
								style="enable-background:new 0 0 250 243;"
								xml:space="preserve">
								<path
									data-plano="10"
									data-plano-title="Departamento D"
									data-plano-floor="PISO 1 AL 3"
									class="map transition"
									d="M61.8,141.8H16.9H4.7v-55h12.2V3.2h44.9h59h14.6V120h-14.6v1.9h-59L61.8,141.8L61.8,141.8z" />
							</svg>

						</div>
					</div>

					<div data-aos="fade-up" class="col-sm-6 content_render">

						<img
							data-render="1"
							class="img-fluid render active"
							src="./img/obras-individuales/muniz-1060/piso-10-render-desktop.png"
							alt="render 1">

						<img
							data-render="2"
							class="img-fluid render"
							src="./img/obras-individuales/muniz-1060/piso-9-render-desktop.png"
							alt="render 2">

						<img
							data-render="3"
							class="img-fluid render"
							src="./img/obras-individuales/muniz-1060/piso-5-8-a-render-desktop.png"
							alt="render 3">

						<img
							data-render="4"
							class="img-fluid render"
							src="./img/obras-individuales/muniz-1060/piso-5-8-b-render-desktop.png"
							alt="render 4">

						<img
							data-render="5"
							class="img-fluid render"
							src="./img/obras-individuales/muniz-1060/piso-4-a-render-desktop.png"
							alt="render 5">

						<img
							data-render="6"
							class="img-fluid render"
							src="./img/obras-individuales/muniz-1060/piso-4-b-render-desktop.png"
							alt="render 6">

						<img
							data-render="7"
							class="img-fluid render"
							src="./img/obras-individuales/muniz-1060/piso-1-3-a-render-desktop.png"
							alt="render 7">


						<img
							data-render="8"
							class="img-fluid render"
							src="./img/obras-individuales/muniz-1060/piso-1-3-b-render-desktop.png"
							alt="render 8">

						<img
							data-render="9"
							class="img-fluid render"
							src="./img/obras-individuales/muniz-1060/piso-1-3-c-render-desktop.png"
							alt="render 3">

						<img
							data-render="10"
							class="img-fluid render"
							src="./img/obras-individuales/muniz-1060/piso-1-3-d-render-desktop.png"
							alt="render 4">

					</div>

				</div>
			</div>
		</section>
		<!-- Planos Desktop Pisos Superiores end -->

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
							<p id="extructuras" data-value="100" class="percentage bebas">100</p><span class="bebas">%</span>
						</div>
						<span class="circle">
							<i class="fa-solid fa-bars-progress"></i>
						</span>
						<p class="title bebas">ESTRUCTURAS</p>
					</div>

					<div data-aos="fade-up" class="etapa">
						<div class="content_number">
							<p id="mamposteria" data-value="10" class="percentage bebas">10</p><span class="bebas">%</span>
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
						href="./img/obras-individuales/muniz-1060/hall.jpg"
						data-lightbox="muniz"
						data-title="Hall Muñiz 1060"
						data-alt="Hall Muñiz 2 1060 large">
						<img class="img-fluid" src="./img/obras-individuales/muniz-1060/hall.jpg" alt="hall Muñiz 1060">
						<div class="content">
							<h4 class="bebas">Hall</h4>
						</div>
					</a>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<a
						data-aos="fade-up"
						href="./img/obras-individuales/muniz-1060/fachada-1.jpg"
						data-lightbox="muniz"
						data-title="Fachada Muñiz 1060"
						data-alt="Fachada Muñiz 2 1060 large">
						<img class="img-fluid" src="./img/obras-individuales/muniz-1060/fachada-1.jpg" alt="Fachada Muñiz 1060 - 2">
						<div class="content">
							<h4 class="bebas">Fachada</h4>
						</div>
					</a>
				</div>

				<div class="col-md-6">
					<a
						data-aos="fade-up"
						href="./img/obras-individuales/muniz-1060/fachada-2.jpg"
						data-lightbox="muniz"
						data-title="Fachada Muñiz 1060"
						data-alt="Fachada Muñiz 3 1060 large">
						<img class="img-fluid" src="./img/obras-individuales/muniz-1060/fachada-2.jpg" alt="Fachada Muñiz 1060 - 3">
						<div class="content">
							<h4 class="bebas">Fachada</h4>
						</div>
					</a>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<a
						data-aos="fade-up"
						href="./img/obras-individuales/muniz-1060/living.jpg"
						data-lightbox="muniz"
						data-title="Living Muñiz 1060"
						data-alt="Living Muñiz 2 1060 large">
						<img class="img-fluid" src="./img/obras-individuales/muniz-1060/living.jpg" alt="Living Muñiz 1060">
						<div class="content">
							<h4 class="bebas">Living</h4>
						</div>
					</a>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<a
						data-aos="fade-up"
						href="./img/obras-individuales/muniz-1060/interior-1.jpg"
						data-lightbox="muniz"
						data-title="Living Muñiz 1060"
						data-alt="Living Muñiz 3 1060 large">
						<img class="img-fluid" src="./img/obras-individuales/muniz-1060/interior-1.jpg" alt="interior 1 - Muñiz 1060">
						<div class="content">
							<h4 class="bebas">Interior</h4>
						</div>
					</a>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<a
						data-aos="fade-up"
						href="./img/obras-individuales/muniz-1060/interior-2.jpg"
						data-lightbox="muniz"
						data-title="Living Muñiz 1060"
						data-alt="Living Muñiz 3 1060 large">
						<img class="img-fluid" src="./img/obras-individuales/muniz-1060/interior-2.jpg" alt="interior 2 - Muñiz 1060">
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

						<p data-aos="fade-up" class="featured">
							CABALLITO, Corazón de la ciudad.
						</p>

						<p data-aos="fade-up">
							Este barrio se encuentra en el medio de la Ciudad de Buenos Aires. Debe su nombre a la pulpería que en 1821 instaló don Nicolás Vila en la esquina de las actuales calles Rivadavia y Emilio Mitre, que era reconocida por su típica veleta en forma de caballito.
						</p>

						<p data-aos="fade-up">
							Como todos los barrios del oeste, también éste progresó en forma notable con la llegada del ferrocarril, que desde 1857 atravesó el barrio adoptando el nombre de la famosa pulpería para su estación en el lugar.
						</p>
					</div>
				</div>
			</div>

			<div data-aos="fade-up" class="content_map">

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.122353889586!2d-58.4255344!3d-34.626348199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca53b60833c5%3A0x221a7bf1f362a4b2!2sMu%C3%B1iz%201060%2C%20C1424%20CABA!5e0!3m2!1ses-419!2sar!4v1662576213727!5m2!1ses-419!2sar" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				<div data-aos="fade-left" class="content_medios">

					<div class="medios">
						<img class="img-fluid" src="./img/obras-individuales/icono-subte.png" alt="icono subte">
						<h4>Subte:</h4>
						<p>Líneas <br>E</p>
					</div>

					<div class="medios">
						<img class="img-fluid" src="./img/obras-individuales/icono-tren.png" alt="icono tren">
						<h4>Tren:</h4>
						<p>Línea <br>Sarmiento</p>
					</div>

					<div class="medios">
						<img class="img-fluid" src="./img/obras-individuales/icono-colectivo.png" alt="icono colectivo">
						<h4>Colectivos:</h4>
						<p>Líneas <br>7-15-53-56<br>65-88-97-180</p>
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