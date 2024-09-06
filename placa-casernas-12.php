<?php

require('includes/config.inc.php');
require('includes/get-variable-handling.php');
$current = 'obra_curso';
$obra = 'placa_casernas_12';

echo "
	<script>
		var section_detalle = true
		var obra = 'placa_casernas_12'
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
	<meta name="description" content="Un edificio con unidades de calidad, construido con los mejores materiales y accesorios de primera línea.">
	<title>VQZ - Constructora - Plaça de les Casernas 12 - CABA</title>

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
	<section id="app" class="obra_detalle aranguren_1061 muniz_1060 placa_casernas_12">

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
					<span class="calle bebas">Plaça de les Casernes</span>
					<span class="numero bebas">12</span>
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
					<h2 class="bebas ultimas_unidades">entrega julio 2025</h2>
				</div>
			</div>

		</section>
		<!-- Caracteristicas end -->

		<!-- Planos Mobile -->
		<section data-aos="fade-up" class="container planos_mobile">
			<div class="row">
				<div class="col-sm-12">

					<h2 class="bebas">Planos Plaça de les Casernes <br>Pisos 1, 2 y 3</h2>

					<div id="carouselPlanosMobile" class="carousel slide carousel-fade" data-bs-ride="carousel">
						<div class="carousel-inner">

							<div class="carousel-item active">
								<h4 class="bebas"></h4>
								<img
									src="./img/obras-individuales/casernas-12/slide-mobile/segundo-primera.png"
									class="d-block w-100"
									alt="segunda primera">
							</div>

							<div class="carousel-item">
								<h4 class="bebas">Segunda</h4>
								<img
									src="./img/obras-individuales/casernas-12/slide-mobile/segundo-segunda.png"
									class="d-block w-100"
									alt="segunda segunda">
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
					<h2 id="title_floor" class="bebas">Planos Plaça de les Casernes <br>Pisos 1, 2 y 3</h2>
					<h3 data-aos="fade-up" class="bebas" id="title_ambiente"></h3>
				</div>

				<div class="row">

					<div class="col-sm-6 content_plano">
						<div data-aos="fade-up" class="content_map">
							<img class="img-fluid" src="./img/obras-individuales/casernas-12/planos-casernes.png" alt="plano casernas 12">

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
									data-plano-title="Planos Plaça de les Casernes <br>Pisos 1, 2 y 3"
									data-plano-floor=""
									class="map transition active"
									d="M441.7,44.8h-40.8v-3.6c0,0,0,0,0,0c0-3.8,0-7.5,0-11.2c0-3.7,0-7.4,0-11.1c0-3.8,0-7.5,0-11.3
										c0-1.4,0-2.7,0-4.1v-1h-91.9v42.3h-38.7H261h-91.6V2.5H77.1v42.3H55.2c0,42.3,0,84.7,0,127c0,0.4,0,0.8,0,1.3c0,0.3,0,0.7,0.2,0.9
										c0.6,0.5,0.4,1.1,0.5,1.8c0,13.2,0,26.3,0,39.5c0,0.4,0.1,0.9-0.1,1.1c-0.9,1.1-0.5,2.3-0.6,3.5c-0.1,1.5,0,2.9,0,4.6
										c-0.9,0-1.5,0-2.2,0c-15.9,0-31.8,0-47.7,0c-0.7,0-1.3,0.1-2,0.1c0,31.4,0,62.6,0,94c14.1-2.5,28-5,42-7.5c13.9-2.5,27.8-5,41.8-7.5
										c14-2.5,28-5,41.9-7.5c13.9-2.5,27.9-5,41.8-7.5c14-2.5,27.9-5,42-7.5c6,33.9,12.1,67.6,18.1,101.5c82.1-14.2,164-28.4,245.8-42.6
										C476.8,338.1,446,78.7,441.7,44.8z" />
							</svg>

							<svg
								id="map2"
								version="1.1"
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink"
								x="0px"
								y="0px"
								viewBox="0 0 116 150"
								style="enable-background:new 0 0 116 150;"
								xml:space="preserve">
								<path
									data-plano="2"
									data-plano-title="Planos Plaça de les Casernes <br>Pisos 1, 2 y 3"
									data-plano-floor="segunda"
									class="map transition"
									d="M444.6,231.4c-7.8,0-15.5,0-23.3,0c-1.6,0-2.2-0.6-2.2-2.1c0-11.7,0-23.5,0-35.2c0-0.4-0.1-0.9,0.1-1.1
										c0.7-0.6,0.5-1.4,0.5-2.2c0-26.3,0-52.5,0-78.8c0-19.7,0-39.4-0.1-59.1c0-0.6,0-1.1-0.1-1.8c-3.8,0-7.3,0-10.9,0
										c-3.6,0-7.3,0-10.9,0c-3.6,0-7.2,0-10.8,0c-3.3,0-6.6,0.1-9.9-0.1h-1.9V8.9h-94.6v42.3h-2.7c-12.9,0-25.8,0-38.7,0
										c-2.2,0-4.4,0-6.6,0c-27.1,0-54.1,0-81.2,0h-2V8.9H54.5v42.3h-1.8c0,0,0,0,0,0.1c-0.7,0-1.3,0-1.9,0c-6.3,0-12.5,0-18.8,0
										c-6.8,0-13.6,0-20.3,0c-4.2,0-7.4,2.7-8.2,6.8c-0.4,1.8,0,3.5,0.6,5.2c3.4,9.1,6.8,18.3,10.2,27.4c3.9,10.4,7.7,20.9,11.6,31.3
										c0.2,0.6,0.4,1.2,0.9,1.6c0.6,0.4,0.8,0.9,1,1.5c0.9,2.3,1.7,4.6,2.6,6.9c4.1,11,8.2,22.1,12.3,33.1c0.2,0.5,0.6,1.2,0.4,1.5
										c-0.5,0.9-0.1,1.5,0.2,2.2c10.4,28,17.3,47.4,27.7,75.4c0,0,0,0,0,0.1l0.5,1.3l-11.4,4.2l48.6,130.9l11.7-4.4l0.5,1.4c0,0,0,0,0,0
										c3.1,8.5,1.9,5.3,4.9,13.6c106.9-18.4,213.8-36.8,320.6-55.2c0-34.9,0-69.6,0-104.4C445.8,231.4,445.2,231.4,444.6,231.4z" />
							</svg>

						</div>
					</div>

					<div data-aos="fade-up" class="col-sm-6 content_render">

						<img
							data-render="1"
							class="img-fluid render active"
							src="./img/obras-individuales/casernas-12/planos-segunda-primera.png"
							alt="plano casernas 12 - A">

						<img
							data-render="2"
							class="img-fluid render"
							src="./img/obras-individuales/casernas-12/planos-segunda-segunda.png"
							alt="plano casernas 12 - B">

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
						href="./img/obras-individuales/casernas-12/render-large.jpg"
						data-lightbox="casernas"
						data-title="Fachada Plaça de les Casernes"
						data-alt="Fachada Plaça de les Casernes large">
						<img class="img-fluid" src="./img/obras-individuales/casernas-12/render-large.jpg" alt="Fachada casernas 12">
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
						href="./img/obras-individuales/casernas-12/fachada-2.jpg"
						data-lightbox="casernas"
						data-title="Fachada Plaça de les Casernes"
						data-alt="Fachada Plaça de les Casernes large">
						<img class="img-fluid" src="./img/obras-individuales/casernas-12/fachada-2.jpg" alt="Fachada casernas 12 - 2">
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
						href="./img/obras-individuales/casernas-12/living.jpg"
						data-lightbox="casernas"
						data-title="Living Plaça de les Casernes"
						data-alt="Living Plaça de les Casernes large">
						<img class="img-fluid" src="./img/obras-individuales/casernas-12/living.jpg" alt="Living casernas 12">
						<div class="content">
							<h4 class="bebas">Living</h4>
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

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3000.698958115241!2d1.7251067!3d41.22833039999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a3871d51b6cd0f%3A0xfb1a6166b5af7c54!2sPla%C3%A7a%20de%20les%20Casernes%2C%2012%2C%2008800%20Vilanova%20i%20la%20Geltr%C3%BA%2C%20Barcelona%2C%20Espa%C3%B1a!5e0!3m2!1ses-419!2sar!4v1662744796179!5m2!1ses-419!2sar" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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