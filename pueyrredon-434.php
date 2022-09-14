<?php
	
	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'obra_curso';
  $obra = 'pueyrredon_434';

  echo "
	<script>
		var section_detalle = true
		var obra = 'pueyrredon_434'
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
	<meta name="description" content="Unidades de 3 y 4 ambientes de alta prestación. El edificio cuenta con un hall de entrada de categoría con ascensores de última generación. 
">
	<title>VQZ - Constructora - Pueyrredon 434 - CABA</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

	<link rel="stylesheet" type="text/css" href="./node_modules/normalize.css/normalize.css">
	<link rel="stylesheet" type="text/css" href="./fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/aos/dist/aos.css"/>
	<link rel="stylesheet" type="text/css" href="./node_modules/lightbox2/dist/css/lightbox.min.css"/>
	<link rel="stylesheet" type="text/css" href="./css/app.css">
</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Contenido OBRA DETALLE -->
	<section id="app" class="obra_detalle aranguren_1061 pueyrredon_434">

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
			    <source src="videos/pueyrredon.mp4" type="video/mp4">
			  </video>
			</div>
		  <div data-aos="fade-left" class="direccion">
		  	<h1>
		  		<span class="calle bebas">h. pueyrredon</span>
		  		<span class="numero bebas">434</span>
		  	</h1>
		  </div>
		</section>
		<!-- Video end -->

		<!-- Caracteristicas -->
		<section class="container caracteristicas">
		  
		  <div class="row">
		  	<div class="col-md-6">
		  		<h2 data-aos="fade-up" class="bebas">NUEVA<br>PERSPECTIVA<br><span>A LA CIUDAD</span></h2>
		  	</div>
		  	<div class="col-md-6">
		  		<p data-aos="fade-up">
		  			Unidades de 3 y 4 ambientes de alta prestación.
		  		</p>
		  		<p data-aos="fade-up">
		  			El edificio cuenta con un hall de entrada de categoría con ascensores de última generación. 
		  		</p>
		  		<p data-aos="fade-up">
		  			Las cocheras se sitúan en subsuelo, planta baja y primer piso.
		  		</p>
		  	</div>
		  </div>

		  <div class="row">
		  	<div class="col-md-12 content_icons">

		  		<div data-aos="fade-up" class="icon">
		  			<img class="img-fluid" src="./img/obras-individuales/icono-ambientes.gif" alt="icono ambientes">
		  			<h3 class="bebas">3 y 4 <br>aMBIENTES</h3>
		  		</div>

		  		<div data-aos="fade-up" class="icon">
		  			<img class="img-fluid" src="./img/obras-individuales/icono-cocheras.gif" alt="icono cocheras">
		  			<h3 class="bebas">AMPLIAS <br>COCHERAS</h3>
		  		</div>

		  		<div data-aos="fade-up" class="icon">
		  			<img class="img-fluid" src="./img/obras-individuales/icono-parrilla.gif" alt="icono parrilla">
		  			<h3 class="bebas">TERRAZA <br>C/PARRILLA</h3>
		  		</div>

		  		<div data-aos="fade-up" class="icon">
		  			<img class="img-fluid" src="./img/obras-individuales/icono-sum.gif" alt="icono sum">
		  			<h3 class="bebas">MODERNO <br>SUM</h3>
		  		</div>

		  	</div>
		  </div>

		  <div class="row">
		  	<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
		  		<h2 class="bebas ultimas_unidades">Entrega inmediata - Ultima unidad</h2>
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
								<h2 class="bebas">PISO 2 CONTRAFRENTE</h2>
					    	<h4 class="bebas">3 ambientes - <span class="vendido">VENDIDO</span></h4>
					      <img 
					      	src="./img/obras-individuales/pueyrredon-434/slide-mobile/slide-1-mobile.jpg"
					      	class="d-block w-100" 
					      	alt="slide mobile pueyrredon 434 - 1">
					    </div>

					    <div class="carousel-item">
								<h2 class="bebas">PISO 2 FRENTE</h2>
					    	<h4 class="bebas">4 ambientes - <span class="vendido">VENDIDO</span></h4>
					      <img 
					      	src="./img/obras-individuales/pueyrredon-434/slide-mobile/slide-2-mobile.jpg"
					      	class="d-block w-100" 
					      	alt="slide mobile pueyrredon 434 - 2">
					    </div>

					    <div class="carousel-item">
								<h2 class="bebas">PISOS 3 AL 12 CONTRAFRENTE</h2>
					    	<h4 class="bebas">3 ambientes - <span class="vendido">VENDIDO</span></h4>
					      <img 
					      	src="./img/obras-individuales/pueyrredon-434/slide-mobile/slide-3-mobile.jpg"
					      	class="d-block w-100" 
					      	alt="slide mobile pueyrredon 434 - 3">
					    </div>

					    <div class="carousel-item">
								<h2 class="bebas">PISOS 3 AL 12 FRENTE</h2>
					    	<h4 class="bebas">4 ambientes - <span class="vendido">VENDIDO</span></h4>
					      <img 
					      	src="./img/obras-individuales/pueyrredon-434/slide-mobile/slide-4-mobile.jpg"
					      	class="d-block w-100" 
					      	alt="slide mobile pueyrredon 434 - 4">
					    </div>

					    <div class="carousel-item">
								<h2 class="bebas">PISO 14 CONTRAFRENTE</h2>
					    	<h4 class="bebas">3 ambientes - <span class="vendido">VENDIDO</span></h4>
					      <img 
					      	src="./img/obras-individuales/pueyrredon-434/slide-mobile/slide-5-mobile.jpg"
					      	class="d-block w-100" 
					      	alt="slide mobile pueyrredon 434 - 5">
					    </div>

					    <div class="carousel-item">
								<h2 class="bebas">PISO 13 FRENTE</h2>
					    	<h4 class="bebas">4 ambientes - <span class="disponible">ULTIMA UNIDAD</span></h4>
					      <img 
					      	src="./img/obras-individuales/pueyrredon-434/slide-mobile/slide-6-mobile.jpg"
					      	class="d-block w-100" 
					      	alt="slide mobile pueyrredon 434 - 6">
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
					<h2 data-aos="fade-up" id="title_floor" class="bebas">PISO 2 CONTRAFRENTE</h2>
					<h3 data-aos="fade-up" class="bebas" id="title_ambiente">3 ambientes - <span class="vendido">VENDIDO</span></h3>
				</div>

				<div class="row">

					<div class="col-sm-6 content_plano">

						<div data-aos="fade-up" class="content_map">
							<img class="img-fluid" src="./img/obras-individuales/pueyrredon-434/planos-pueyrredon-434.jpg" alt="plano Honorio Pueyrredon 434">

							<svg 
								version="1.1" 
								id="map1" 
								xmlns="http://www.w3.org/2000/svg" 
								xmlns:xlink="http://www.w3.org/1999/xlink" 
								x="0px" 
								y="0px" 
								viewBox="0 0 271 150" 
								style="enable-background:new 0 0 271 150;" 
								xml:space="preserve">
								<polygon 
									data-plano="1" 
									data-plano-title="4 ambientes - <span class='disponible'>ULTIMA UNIDAD</span>" 
									data-plano-floor="PISO 13 FRENTE" 
									class="map transition" 
									points="248.93,0.81 248.93,5.36 270.1,5.36 270.1,144.42 249.02,144.08 248.93,149.19 73.49,149.14 
									73.49,86.17 0.9,86.35 0.9,0.81 "/>
							</svg>

							<svg 
								version="1.1" 
								id="map2" 
								xmlns="http://www.w3.org/2000/svg" 
								xmlns:xlink="http://www.w3.org/1999/xlink" 
								x="0px" 
								y="0px" 
								viewBox="0 0 288 149" 
								style="enable-background:new 0 0 288 149;" 
								xml:space="preserve">
								<path 
									data-plano="2" 
									data-plano-title="3 ambientes - <span class='vendido'>VENDIDO</span>" 
									data-plano-floor="PISO 14 CONTRAFRENTE" 
									class="map transition" 
									d="M287.5,0.59v85.6l-81-0.41l-0.14,62.59l-187.9,0.05l-0.09-5.38l-17.6,0.29L0.5,5.28l17.97,0.55V0.86L287.5,0.59
									z"/>
							</svg>

							<svg 
								version="1.1" 
								id="map3" 
								xmlns="http://www.w3.org/2000/svg" 
								xmlns:xlink="http://www.w3.org/1999/xlink" 
								x="0px" 
								y="0px" 
								viewBox="0 0 206 151" 
								style="enable-background:new 0 0 206 151;" 
								xml:space="preserve">
								<path 
									data-plano="3" 
									data-plano-title="4 ambientes - <span class='vendido'>VENDIDO</span>" 
									data-plano-floor="PISOS 3 AL 12 FRENTE" 
									class="map transition" 
									d="M184.86,1.03l0.02,4.86L205.5,6v138.32l-20.79,0.23v5.2L8.49,149.97L8.3,87.59H0.5V1.03H184.86z"/>
							</svg>

							<svg 
								version="1.1" 
								id="map4" 
								xmlns="http://www.w3.org/2000/svg" 
								xmlns:xlink="http://www.w3.org/1999/xlink" 
								x="0px" 
								y="0px" 
								viewBox="0 0 225 149" 
								style="enable-background:new 0 0 225 149;" 
								xml:space="preserve">
								<path 
									data-plano="4" 
									data-plano-title="3 ambientes - <span class='vendido'>VENDIDO</span>" 
									data-plano-floor="PISOS 3 AL 12 CONTRAFRENTE" 
									class="map transition"
									d="M224.34,0.6v84.93h-17.51v62.87H17.48v-4.41l-16.82-0.28V5.29l17.1-0.28l0.28-4.41H224.34z"/>
							</svg>

							<svg 
								version="1.1" 
								id="map5" 
								xmlns="http://www.w3.org/2000/svg" 
								xmlns:xlink="http://www.w3.org/1999/xlink" 
								x="0px" 
								y="0px" 
								viewBox="0 0 197 150" 
								style="enable-background:new 0 0 197 150;" 
								xml:space="preserve">
								<path 
									data-plano="5" 
									data-plano-title="4 ambientes - <span class='vendido'>VENDIDO</span>" 
									data-plano-floor="PISO 2 FRENTE" 
									class="map transition" 
									d="M196.49,5.53v138.93h-20.81v5.03L0.51,148.83v-64.6l12.06-0.5L12.41,0.5h163.28l-0.03,5.12L196.49,5.53z"/>
							</svg>

							<svg 
								version="1.1" 
								id="map6" 
								xmlns="http://www.w3.org/2000/svg" 
								xmlns:xlink="http://www.w3.org/1999/xlink" 
								x="0px" 
								y="0px" 
								viewBox="0 0 225 150" 
								style="enable-background:new 0 0 225 150;" 
								xml:space="preserve">
								<path 
									data-plano="6" 
									data-plano-title="3 ambientes - <span class='vendido'>VENDIDO</span>" 
									data-plano-floor="PISO 2 CONTRAFRENTE" 
									class="map transition active"
									d="M223.53,0.56v85.5h-16.16v63.38H18.06v-5.96H1.47V6.09h15.92l0.03-5.53H223.53z"/>
							</svg>

						</div>
					</div>

					<div data-aos="fade-up" class="col-sm-6 content_render">

						<img 
							data-render="1"
							class="img-fluid render" 
							src="./img/obras-individuales/pueyrredon-434/render-1.jpg" 
							alt="render 1">

						<img 
							data-render="2"
							class="img-fluid render" 
							src="./img/obras-individuales/pueyrredon-434/render-2.jpg" 
							alt="render 2">

						<img 
							data-render="3"
							class="img-fluid render" 
							src="./img/obras-individuales/pueyrredon-434/render-3.jpg" 
							alt="render 3">

						<img 
							data-render="4"
							class="img-fluid render" 
							src="./img/obras-individuales/pueyrredon-434/render-4.jpg" 
							alt="render 4">

						<img 
							data-render="5"
							class="img-fluid render" 
							src="./img/obras-individuales/pueyrredon-434/render-5.jpg" 
							alt="render 5">

						<img 
							data-render="6"
							class="img-fluid render active" 
							src="./img/obras-individuales/pueyrredon-434/render-6.jpg" 
							alt="render 6">

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
							<p id="extructuras" data-value="100" class="percentage bebas">100</p><span class="bebas">%</span>
						</div>
						<span class="circle">
							<i class="fa-solid fa-bars-progress"></i>
						</span>
						<p class="title bebas">ESTRUCTURAS</p>
					</div>

					<div data-aos="fade-up" class="etapa">
						<div class="content_number">
							<p id="mamposteria" data-value="100" class="percentage bebas">100</p><span class="bebas">%</span>
						</div>
						<span class="circle">
							<i class="fa-solid fa-bars-progress"></i>
						</span>
						<p class="title bebas">MAMPOSTERÍA</p>
					</div>

					<div data-aos="fade-up" class="etapa">
						<div class="content_number">
							<p id="instalaciones" data-value="100" class="percentage bebas">100</p><span class="bebas">%</span>
						</div>
						<span class="circle">
							<i class="fa-solid fa-bars-progress"></i>
						</span>
						<p class="title bebas">INSTALACIONES</p>
					</div>

					<div data-aos="fade-up" class="etapa">
						<div class="content_number">
							<p id="terminaciones" data-value="100" class="percentage bebas">100</p><span class="bebas">%</span>
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
				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/pueyrredon-434/fachada-large.jpg" 
						data-lightbox="pueyrredon"
						data-title="Fachada Honorio Pueyrredon 434"
						data-alt="fachada Honorio Pueyrredon 434 large">
						<img class="img-fluid" src="./img/obras-individuales/pueyrredon-434/fachada.jpg" alt="fachada Honorio Pueyrredon 434">
						<div class="content">
							<h4 class="bebas">fachada</h4>
						</div>
					</a>
				</div>

				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/pueyrredon-434/interior-large.jpg" 
						data-lightbox="pueyrredon"
						data-title="Interior Honorio Pueyrredon 434"
						data-alt="Interior Honorio Pueyrredon 434 large">
						<img class="img-fluid" src="./img/obras-individuales/pueyrredon-434/interior.jpg" alt="Interior Honorio Pueyrredon 434">
						<div class="content">
							<h4 class="bebas">Interior</h4>
						</div>
					</a>
				</div>
			</div>

			<div class="row content_imgs">
				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/pueyrredon-434/cocina-large.jpg" 
						data-lightbox="pueyrredon"
						data-title="Cocina Honorio Pueyrredon 434"
						data-alt="Cocina Honorio Pueyrredon 434 large">
						<img class="img-fluid" src="./img/obras-individuales/pueyrredon-434/cocina.jpg" alt="Cocina Honorio Pueyrredon 434">
						<div class="content">
							<h4 class="bebas">Cocina</h4>
						</div>
					</a>
				</div>

				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/pueyrredon-434/bano-large.jpg" 
						data-lightbox="pueyrredon"
						data-title="Baño Honorio Pueyrredon 434"
						data-alt="Baño Honorio Pueyrredon 434 large">
						<img class="img-fluid" src="./img/obras-individuales/pueyrredon-434/bano.jpg" alt="Baño Honorio Pueyrredon 434">
						<div class="content">
							<h4 class="bebas">Baño</h4>
						</div>
					</a>
				</div>
				
			</div>

			<div class="row">
				<div class="col-md-12">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/pueyrredon-434/hall-large.jpg" 
						data-lightbox="pueyrredon"
						data-title="Hall Honorio Pueyrredon 434"
						data-alt="Hall Honorio Pueyrredon 434 large">
						<img class="img-fluid" src="./img/obras-individuales/pueyrredon-434/hall.jpg" alt="Hall Honorio Pueyrredon 434">
						<div class="content">
							<h4 class="bebas">Hall</h4>
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

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.592411507445!2d-58.4410254!3d-34.614466799999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca15579d24a7%3A0xd725ef4a506ce7c2!2sAv.%20Dr.%20Honorio%20Pueyrred%C3%B3n%20434%2C%20C1405BAO%20CABA!5e0!3m2!1ses-419!2sar!4v1661543970478!5m2!1ses-419!2sar" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				<div data-aos="fade-left" class="content_medios">

					<div class="medios">
						<img class="img-fluid" src="./img/obras-individuales/icono-subte.png" alt="icono subte">
						<h4>Subte:</h4>
						<p>Líneas <br>A</p>
					</div>

					<div class="medios">
						<img class="img-fluid" src="./img/obras-individuales/icono-tren.png" alt="icono tren">
						<h4>Tren:</h4>
						<p>Líneas <br>Sarmiento</p>
					</div>

					<div class="medios">
						<img class="img-fluid" src="./img/obras-individuales/icono-colectivo.png" alt="icono colectivo">
						<h4>Colectivos:</h4>
						<p>Líneas <br>55-84-92-145 <br>172-181-242</p>
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