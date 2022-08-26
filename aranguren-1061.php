<?php
	
	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'obra_curso';
  $obra = 'aranguren_1061';

  echo "
	<script>
		var section_detalle = true
		var obra = 'aranguren_1061'
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
	<meta name="description" content="El edificio posee un luminoso hall de entrada, y cuenta con ascensores amplios con la última tecnología del mercado.">
	<title>VQZ - Constructora - Aranguren 1061 - CABA</title>

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
	<section id="app" class="obra_detalle aranguren_1061">

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
			    <source src="videos/aranguren-1061.mp4" type="video/mp4">
			  </video>
			</div>
		  <div data-aos="fade-left" class="direccion">
		  	<h1>
		  		<span class="calle bebas">aranguren</span>
		  		<span class="numero bebas">1061</span>
		  	</h1>
		  </div>
		</section>
		<!-- Video end -->

		<!-- Caracteristicas -->
		<section class="container caracteristicas">
		  
		  <div class="row">
		  	<div class="col-md-6">
		  		<h2 data-aos="fade-up" class="bebas">EL HOGAR <br>PERFECTO <br><span>PARA VOS</span></h2>
		  	</div>
		  	<div class="col-md-6">
		  		<p data-aos="fade-up">
		  			Unidades de 2, 3 y 4 ambientes con una ubicación privilegiada en el centro de la ciudad.
		  		</p>
		  		<p data-aos="fade-up">
		  			El edificio posee un luminoso hall de entrada, y cuenta con ascensores amplios con la última tecnología del mercado.
		  		</p>
		  		<p data-aos="fade-up">
		  			Las amplias cocheras se sitúan en subsuelo y planta baja, donde también se ubica un local comercial a la calle.
		  			En la terraza se encuentra un cómodo solarium con parrilla.
		  		</p>
		  	</div>
		  </div>

		  <div class="row">
		  	<div class="col-md-12 content_icons">

		  		<div data-aos="fade-up" class="icon">
		  			<img class="img-fluid" src="./img/obras-individuales/icono-ambientes.gif" alt="icono ambientes">
		  			<h3 class="bebas">2-3-4 <br>aMBIENTES</h3>
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
		  			<img class="img-fluid" src="./img/obras-individuales/icono-solarium.gif" alt="icono solarium">
		  			<h3 class="bebas">AMPLIO <br>SOLARIUM</h3>
		  		</div>

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
								<h2 class="bebas">PISO 7</h2>
					    	<h4 class="bebas">duplex 4 Amb - planta alta</h4>
					      <img 
					      	src="./img/obras-individuales/aranguren-1061/slide-mobile/piso-7-4-amb-mobile-a.jpg"
					      	class="d-block w-100" 
					      	alt="piso 7 4 amb mobile a">
					    </div>

					    <div class="carousel-item">
								<h2 class="bebas">PISO 7</h2>
					    	<h4 class="bebas">duplex 4 Amb - planta baja</h4>
					      <img 
					      	src="./img/obras-individuales/aranguren-1061/slide-mobile/piso-7-4-amb-mobile-b.jpg"
					      	class="d-block w-100" 
					      	alt="piso 7 4 amb mobile b">
					    </div>

					    <div class="carousel-item">
								<h2 class="bebas">PISOS 1 AL 6</h2>
					    	<h4 class="bebas">frente 4 Amb</h4>
					      <img 
					      	src="./img/obras-individuales/aranguren-1061/slide-mobile/piso-1-al-6-4-amb-mobile.jpg"
					      	class="d-block w-100" 
					      	alt="piso 1 al 6 - 4 amb mobile">
					    </div>

					    <div class="carousel-item">
								<h2 class="bebas">PISOS 2 AL 8</h2>
					    	<h4 class="bebas">contrafrente 3 Amb</h4>
					      <img 
					      	src="./img/obras-individuales/aranguren-1061/slide-mobile/piso-2-al-8-3-amb-mobile-a.jpg"
					      	class="d-block w-100" 
					      	alt="piso 2 al 8 - 3 amb mobile">
					    </div>

					    <div class="carousel-item">
								<h2 class="bebas">PISO 1</h2>
					    	<h4 class="bebas">contrafrente 3 Amb</h4>
					      <img 
					      	src="./img/obras-individuales/aranguren-1061/slide-mobile/piso-1-3-amb-mobile-b.jpg"
					      	class="d-block w-100" 
					      	alt="piso 1 - 3 amb mobile">
					    </div>

					    <div class="carousel-item">
								<h2 class="bebas">PISOS 1 AL 8</h2>
					    	<h4 class="bebas">lateral 2 Amb</h4>
					      <img 
					      	src="./img/obras-individuales/aranguren-1061/slide-mobile/piso-1-al-8-2-amb-mobile-a.jpg"
					      	class="d-block w-100" 
					      	alt="piso 1 al 8 - 2 amb mobile a">
					    </div>

					    <div class="carousel-item">
								<h2 class="bebas">PISOS 1 AL 8</h2>
					    	<h4 class="bebas">lateral 2 Amb</h4>
					      <img 
					      	src="./img/obras-individuales/aranguren-1061/slide-mobile/piso-1-al-8-2-amb-mobile-b.jpg"
					      	class="d-block w-100" 
					      	alt="piso 1 al 8 - 2 amb mobile b">
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
					<h2 data-aos="fade-up" id="title_floor" class="bebas">PISO 8 FRENTE</h2>
					<h3 data-aos="fade-up" class="bebas" id="title_ambiente">Duplex - 4 amb. Planta baja</h3>
				</div>

				<div class="row">

					<div class="col-sm-6 content_plano">

						<div data-aos="fade-up" class="content_map">
							<img class="img-fluid" src="./img/obras-individuales/aranguren-1061/planos-aranguren-b.jpg" alt="plano aranguren 1061">

							<svg version="1.1" id="map1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 250 243" style="enable-background:new 0 0 250 243;" xml:space="preserve">
							<path 
								data-plano="1" 
								data-plano-title="Duplex - 4 amb. Planta alta" 
								data-plano-floor="PISO 7 FRENTE" 
								class="map transition" 
								d="M248.9,84.34c-0.24,0.71,0.71,64.79,0,65.03c-0.71,0.24-9.05,0-9.05,0v92.9h-63.12v-24.06L2.1,218.81L0.83,0.73
								h98.24l-0.55,51.22l-14.69-0.01l0.06,64.08l102.37-0.07l-0.06-31.68L248.9,84.34z"/>
							</svg>

							<svg version="1.1" id="map2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 259 206" style="enable-background:new 0 0 259 206;" xml:space="preserve">
							<path 
								data-plano="2" 
								data-plano-title="4 amb" 
								data-plano-floor="PISO 7 FRENTE" 
								class="map transition" 
								d="M258.69,72.62v132.95h-60.78v-20.54L26.27,185.3V97.26H0.31V9.5h25.96V0.43h95.59l0.31,42.95h-14.35
								l-0.31,54.96h101.7V72.72L258.69,72.62z"/>
							</svg>

							<svg version="1.1" id="map3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 115 131" style="enable-background:new 0 0 115 131;" xml:space="preserve">
							<path 
								data-plano="3" 
								data-plano-title="Duplex - 4 amb. Planta baja" 
								data-plano-floor="PISO 8 FRENTE" 
								class="map transition active" 
								d="M114.22,45.52c-0.13,0.38,0.38,34.83,0,34.96c-0.38,0.13-4.87,0-4.87,0v49.95H75.42v-12.93l-74.79,0.26V0.57
								h33.04l-0.3,27.54l-7.9,0l0.03,34.45l55.04-0.04l-0.03-17.03L114.22,45.52z"/>
							</svg>

							<svg version="1.1" id="map4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 72 75" style="enable-background:new 0 0 72 75;" xml:space="preserve">
							<path 
								data-plano="4" 
								data-plano-title="2 ambientes" 
								data-plano-floor="PISOS 1 AL 8 LATERAL" 
								class="map transition" 
								d="M71.44,0.74v73.51h-33.9V61.34H0.56V0.74H71.44z"/>
							</svg>

							<svg version="1.1" id="map5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 72 75" style="enable-background:new 0 0 72 75;" xml:space="preserve">
							<path 
								data-plano="5" 
								data-plano-title="2 ambientes" 
								data-plano-floor="PISOS 1 AL 8 LATERAL" 
								class="map transition" 
								d="M71.44,0.74v73.51h-33.9V61.34H0.56V0.74H71.44z"/>
							</svg>

							<svg version="1.1" id="map6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 91 101" style="enable-background:new 0 0 91 101;" xml:space="preserve">
							<path 
								data-plano="6" 
								data-plano-title="3 ambientes" 
								data-plano-floor="PISOS 2 AL 8 CONTRAFRENTE" 
								class="map transition" 
								d="M92.01,4.83v70.73H79.59v24.93H-1.01V27.53l14.44-0.13l0.16-26.9h65.53L79.1,4.58L92.01,4.83z"/>
							</svg>

							<svg version="1.1" id="map7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 121 109" style="enable-background:new 0 0 121 109;" xml:space="preserve">
							<polygon 
								data-plano="7" 
								data-plano-title="3 ambientes" 
								data-plano-floor="PISO 1 CONTRAFRENTE" 
								class="map transition" 
								points="120.16,5.5 120.16,81.73 108.76,81.73 108.76,108.3 35.11,108.41 35.11,30.92 0.84,30.7 0.84,0.59 
								108.87,0.59 108.87,5.54 "/>
							</svg>

						</div>
					</div>

					<div data-aos="fade-up" class="col-sm-6 content_render">

						<img 
							data-render="1"
							class="img-fluid render" 
							src="./img/obras-individuales/aranguren-1061/render-1.jpg" 
							alt="render 1">

						<img 
							data-render="2"
							class="img-fluid render" 
							src="./img/obras-individuales/aranguren-1061/render-2.jpg" 
							alt="render 2">

						<img 
							data-render="3"
							class="img-fluid render active" 
							src="./img/obras-individuales/aranguren-1061/render-3.jpg" 
							alt="render 3">

						<img 
							data-render="4"
							class="img-fluid render" 
							src="./img/obras-individuales/aranguren-1061/render-4.jpg" 
							alt="render 4">

						<img 
							data-render="5"
							class="img-fluid render" 
							src="./img/obras-individuales/aranguren-1061/render-5.jpg" 
							alt="render 5">

						<img 
							data-render="6"
							class="img-fluid render" 
							src="./img/obras-individuales/aranguren-1061/render-6.jpg" 
							alt="render 6">

						<img 
							data-render="7"
							class="img-fluid render" 
							src="./img/obras-individuales/aranguren-1061/render-7.jpg" 
							alt="render 7">

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
							<p id="mamposteria" data-value="40" class="percentage bebas">40</p><span class="bebas">%</span>
						</div>
						<span class="circle">
							<i class="fa-solid fa-bars-progress"></i>
						</span>
						<p class="title bebas">MAMPOSTERÍA</p>
					</div>

					<div data-aos="fade-up" class="etapa">
						<div class="content_number">
							<p id="instalaciones" data-value="10" class="percentage bebas">10</p><span class="bebas">%</span>
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
				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/aranguren-1061/fachada-large.jpg" 
						data-lightbox="aranguren"
						data-title="Fachada Aranguren 1061"
						data-alt="fachada Aranguren 1061 large">
						<img class="img-fluid" src="./img/obras-individuales/aranguren-1061/fachada.jpg" alt="fachada Aranguren 1061">
						<div class="content">
							<h4 class="bebas">fachada</h4>
						</div>
					</a>
				</div>

				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/aranguren-1061/fachada-local-large.jpg" 
						data-lightbox="aranguren"
						data-title="Fachada Local Aranguren 1061"
						data-alt="Fachada Local Aranguren 1061 large">
						<img class="img-fluid" src="./img/obras-individuales/aranguren-1061/fachada-local.jpg" alt="Fachada Local Aranguren 1061">
						<div class="content">
							<h4 class="bebas">Fachada Local</h4>
						</div>
					</a>
				</div>
			</div>

			<div class="row content_imgs">
				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/aranguren-1061/contrafrente-large.jpg" 
						data-lightbox="aranguren"
						data-title="Contrafrente Aranguren 1061"
						data-alt="Contrafrente Aranguren 1061 large">
						<img class="img-fluid" src="./img/obras-individuales/aranguren-1061/contrafrente.jpg" alt="Contrafrente Aranguren 1061">
						<div class="content">
							<h4 class="bebas">Contrafrente</h4>
						</div>
					</a>
				</div>

				<div class="col-md-6">
					<div class="row">

						<div class="col-md-12">
							<a 
								data-aos="fade-up"
								href="./img/obras-individuales/aranguren-1061/vista-1-large.jpg" 
								data-lightbox="aranguren"
								data-title="Vista 1 Aranguren 1061"
								data-alt="Vista 1 Aranguren 1061 large">
								<img class="img-fluid" src="./img/obras-individuales/aranguren-1061/vista-1.jpg" alt="Vista 1 Aranguren 1061">
								<div class="content">
									<h4 class="bebas">Vista 1</h4>
								</div>
							</a>
						</div>

						<div class="col-md-12">
							<a 
								data-aos="fade-up"
								href="./img/obras-individuales/aranguren-1061/vista-2-large.jpg" 
								data-lightbox="aranguren"
								data-title="Vista 2 Aranguren 1061"
								data-alt="Vista 2 Aranguren 1061 large">
								<img class="img-fluid" src="./img/obras-individuales/aranguren-1061/vista-2.jpg" alt="Vista 2 Aranguren 1061">
								<div class="content">
									<h4 class="bebas">Vista 2</h4>
								</div>
							</a>
						</div>

					</div>
					
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<a 
						href="./img/obras-individuales/aranguren-1061/vista-3-large.jpg" 
						class="last" 
						data-lightbox="aranguren"
						data-title="Vista 3 Aranguren 1061"
						data-alt="Vista 3 Aranguren 1061 large">
						<img class="img-fluid" src="./img/obras-individuales/aranguren-1061/vista-3.jpg" alt="Vista 3 Aranguren 1061">
						<div class="content">
							<h4 class="bebas">Vista 3</h4>
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

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.5148036155415!2d-58.4479696!3d-34.6164287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca3d88185b57%3A0xd81e3a5f425088b4!2sDr.%20Juan%20Felipe%20Aranguren%201061%2C%20C1405CRU%20CABA!5e0!3m2!1ses-419!2sar!4v1661373861779!5m2!1ses-419!2sar" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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
						<p>Líneas <br>84-92 <br>172-181-242</p>
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