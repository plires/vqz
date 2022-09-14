<?php
	
	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'obra_curso';
  $obra = 'donato_241';

  echo "
	<script>
		var section_detalle = true
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
	<meta name="description" content="El edificio cuenta con unidades de 2, 3 y 4 ambientes, posee un luminoso hall de entrada, ascensores amplios con la última tecnología del mercado. El mismo contará con un sistema de vigilancia y cámaras de seguridad las 24 hs mediante una terminal de seguridad monitoreada (Tótem).">
	<title>VQZ - Constructora - Donato Alvarez 221 CABA</title>

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
	<section id="app" class="obra_detalle donato_221">

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
			    <source src="videos/donato.mp4" type="video/mp4">
			  </video>
			</div>
		  <div data-aos="fade-left" class="direccion">
		  	<h1>
		  		<span class="calle bebas">donato alvarez</span>
		  		<span class="numero bebas">221</span>
		  	</h1>
		  </div>
		</section>
		<!-- Video end -->

		<!-- Caracteristicas -->
		<section class="container caracteristicas">
		  
		  <div class="row">
		  	<div class="col-md-6">
		  		<h2 data-aos="fade-up" class="bebas">DALE <br>UN LUGAR <br><span>A TUS SUEÑOS</span></h2>
		  	</div>
		  	<div class="col-md-6">
		  		<p data-aos="fade-up">
		  			El edificio cuenta con unidades de 2, 3 y 4 ambientes, posee un luminoso hall de entrada, ascensores amplios con la última tecnología del mercado. El mismo contará con un sistema de vigilancia y cámaras de seguridad las 24 hs mediante una terminal de seguridad monitoreada (Tótem).
		  		</p>
		  		<p data-aos="fade-up">
		  			Las cocheras se sitúan en subsuelo y planta baja. El edificio contará con SUM en planta baja, gimnasio y pileta con terraza verde en el piso 11 con vistas panorámicas hacia el barrio.
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
		  			<img class="img-fluid" src="./img/obras-individuales/icono-sum.gif" alt="icono sum">
		  			<h3 class="bebas">MODERNO <br>SUM</h3>
		  		</div>

		  		<div data-aos="fade-up" class="icon">
		  			<img class="img-fluid" src="./img/obras-individuales/icono-terraza.gif" alt="icono terraza verde">
		  			<h3 class="bebas">TERRAZA <br>VERDE</h3>
		  		</div>

		  		<div data-aos="fade-up" class="icon">
		  			<img class="img-fluid" src="./img/obras-individuales/icono-solarium.gif" alt="icono solarium">
		  			<h3 class="bebas">AMPLIO <br>SOLARIUM</h3>
		  		</div>

		  		<div data-aos="fade-up" class="icon">
		  			<img class="img-fluid" src="./img/obras-individuales/icono-gym.gif" alt="icono gym">
		  			<h3 class="bebas">GYM <br>EQUIPADO</h3>
		  		</div>

		  		<div data-aos="fade-up" class="icon">
		  			<img class="img-fluid" src="./img/obras-individuales/icono-piscina.gif" alt="icono piscina">
		  			<h3 class="bebas">PISCINA EN <br>TERRAZA</h3>
		  		</div>

		  	</div>
		  </div>

		  <div class="row">
		  	<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
		  		<h2 data-aos="fade-up" class="bebas ultimas_unidades">Unidades en Venta - Entrega junio 2023</h2>
		  	</div>
		  </div>
		  
		</section>
		<!-- Caracteristicas end -->

		<!-- Planos Mobile -->
		<section data-aos="fade-up" class="container planos_mobile">
			<div class="row">
				<div class="col-sm-12">

					<h2 class="bebas">PISOS DEL 1 AL 9</h2>

					<div id="carouselPlanosMobile" class="carousel slide carousel-fade" data-bs-ride="carousel">
					  <div class="carousel-inner">

					    <div class="carousel-item active">
					    	<h4 class="bebas">4 amb PLANTA TIPO</h4>
					      <img 
					      	src="./img/obras-individuales/donato-221/slide-mobile/4-amb-mobile-tipo-planta-a.png" ,
					      	class="d-block w-100" 
					      	alt="4-amb-mobile-tipo-planta-a">
					    </div>

					    <div class="carousel-item">
					    	<h4 class="bebas">4 amb PLANTA TIPO</h4>
					      <img 
					      	src="./img/obras-individuales/donato-221/slide-mobile/4-amb-mobile-tipo-planta-b.png" ,
					      	class="d-block w-100" 
					      	alt="4-amb-mobile-tipo-planta-b">
					    </div>

					    <div class="carousel-item">
					    	<h4 class="bebas">3 amb PLANTA TIPO</h4>
					      <img 
					      	src="./img/obras-individuales/donato-221/slide-mobile/3-amb-mobile-tipo-planta-b.png" ,
					      	class="d-block w-100" 
					      	alt="3-amb-mobile-tipo-planta-b">
					    </div>

					    <div class="carousel-item">
					    	<h4 class="bebas">3 amb PLANTA TIPO</h4>
					      <img 
					      	src="./img/obras-individuales/donato-221/slide-mobile/3-amb-mobile-tipo-planta-a.png" ,
					      	class="d-block w-100" 
					      	alt="3-amb-mobile-tipo-planta-a">
					    </div>

					    <div class="carousel-item">
					    	<h4 class="bebas">2 amb PLANTA TIPO</h4>
					      <img 
					      	src="./img/obras-individuales/donato-221/slide-mobile/2-amb-mobile-tipo-planta-a.png" ,
					      	class="d-block w-100" 
					      	alt="2-amb-mobile-tipo-planta-a">
					    </div>

					    <div class="carousel-item">
					    	<h4 class="bebas">2 amb PLANTA TIPO</h4>
					      <img 
					      	src="./img/obras-individuales/donato-221/slide-mobile/2-amb-mobile-tipo-planta-b.png" ,
					      	class="d-block w-100" 
					      	alt="2-amb-mobile-tipo-planta-b">
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
					<h2 id="title_floor" class="bebas">PISOS DEL 1 AL 9</h2>
					<h3 data-aos="fade-up" class="bebas" id="title_ambiente">4 amb PLANTA TIPO</h3>
				</div>

				<div class="row">

					<div class="col-sm-6 content_plano">
						<div data-aos="fade-up" class="content_map">
							<img class="img-fluid" src="./img/obras-individuales/donato-221/plano.png" alt="plano donato alvarez 221">

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
								<polygon 
									data-plano="1" 
									data-plano-title="4 amb PLANTA TIPO" 
									data-plano-floor="PISO DEL 1 AL 9" 
									class="map transition" 
									points="29.73,0.93 62,0.93 62,33.93 115.1,33.93 115.1,133.96 110.33,133.96 110.5,149.07 25.03,149.07 
									25.03,56.1 0.9,56.1 0.9,32.67 29.78,32.67 "/>
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
									data-plano-title="4 amb PLANTA TIPO" 
									data-plano-floor="PISO DEL 1 AL 9" 
									class="map transition active" 
									d="M3.78,0.72l110.28,0.09c0,0,0.19,104.29-0.14,104.29s-37.31-0.04-37.31-0.04l-0.15,42.22H51.4v-22.66l-40.66,0
								l0.05-19.32l-9.85-0.01l-0.06-89.3l2.99-0.01L3.78,0.72z"/>
							</svg>

							<svg 
								id="map3"
								version="1.1" 
								xmlns="http://www.w3.org/2000/svg" 
								xmlns:xlink="http://www.w3.org/1999/xlink" 
								x="0px" 
								y="0px"	
								viewBox="0 0 116 152" 
								style="enable-background:new 0 0 116 152;" 
								xml:space="preserve">
								<polygon 
									data-plano="3" 
									data-plano-title="3 amb PLANTA TIPO" 
									data-plano-floor="PISO DEL 1 AL 9" 
									class="map transition" 
									points="26.25,1.36 112.88,1.36 112.88,16.62 115.42,16.62 115.42,116.97 62.36,116.97 62.14,150.64 29.99,150.64 29.99,127.82 10.08,127.82 10.08,122.95 0.58,122.95 0.58,105.68 26.14,105.68 "/>
							</svg>

							<svg 
								id="map4"
								version="1.1" 
								xmlns="http://www.w3.org/2000/svg" 
								xmlns:xlink="http://www.w3.org/1999/xlink" 
								x="0px" 
								y="0px"
								viewBox="0 0 103 97" 
								style="enable-background:new 0 0 103 97;" 
								xml:space="preserve">
								<polygon 
									data-plano="4" 
									data-plano-title="3 amb PLANTA TIPO" 
									data-plano-floor="PISO DEL 1 AL 9" 
									class="map transition" 
									points="0.9,0.78 45.35,0.78 45.33,3.44 102.1,3.44 102.1,96.22 5.37,96.22 5.45,81.18 0.9,81.18 "/>
							</svg>

							<svg 
								id="map5"
								version="1.1" 
								xmlns="http://www.w3.org/2000/svg" 
								xmlns:xlink="http://www.w3.org/1999/xlink" 
								x="0px" 
								y="0px" 
								viewBox="0 0 73 102" 
								style="enable-background:new 0 0 73 102;" 
								xml:space="preserve">
								<polygon 
									data-plano="5" 
									data-plano-title="2 amb PLANTA TIPO" 
									data-plano-floor="PISO DEL 1 AL 9" 
									class="map transition" 
									points="0.57,0.43 60.54,0.43 60.46,87.73 72.93,87.73 72.93,101.57 44.49,101.57 44.52,98.92 0.07,98.94 "/>
							</svg>

							<svg 
								id="map6"
								version="1.1" 
								xmlns="http://www.w3.org/2000/svg" 
								xmlns:xlink="http://www.w3.org/1999/xlink" 
								x="0px" 
								y="0px" 
								viewBox="0 0 63 93.5" 
								style="enable-background:new 0 0 63 93.5;" 
								xml:space="preserve">
								<polygon 
								data-plano="6" 
								data-plano-title="2 amb PLANTA TIPO" 
								data-plano-floor="PISO DEL 1 AL 9" 
								class="map transition"
								points="0.25,0.25 62.75,0.28 62.75,78.53 62.33,78.53 62.38,93.25 1.15,93.25 1.15,78.54 0.26,78.54 "/>
							</svg>

						</div>
					</div>

					<div data-aos="fade-up" class="col-sm-6 content_render">

						<img 
							data-render="1"
							class="img-fluid render" 
							src="./img/obras-individuales/donato-221/4-amb-desktop-render-tipo-planta-a.png" 
							alt="plano donato alvarez 221 - 4 ambientes A">

						<img 
							data-render="2"
							class="img-fluid render active" 
							src="./img/obras-individuales/donato-221/4-amb-desktop-render-tipo-planta-b.jpg" 
							alt="plano donato alvarez 221 - 4 ambientes b">

						<img 
							data-render="3"
							class="img-fluid render" 
							src="./img/obras-individuales/donato-221/3-amb-desktop-render-tipo-planta-a.png" 
							alt="plano donato alvarez 221 - 3 ambientes A">

						<img 
							data-render="4"
							class="img-fluid render" 
							src="./img/obras-individuales/donato-221/3-amb-desktop-render-tipo-planta-b.jpg" 
							alt="plano donato alvarez 221 - 3 ambientes b">

						<img 
							data-render="5"
							class="img-fluid render" 
							src="./img/obras-individuales/donato-221/2-amb-desktop-render-tipo-planta-a.jpg" 
							alt="plano donato alvarez 221 - 2 ambientes A">

						<img 
							data-render="6"
							class="img-fluid render" 
							src="./img/obras-individuales/donato-221/2-amb-desktop-render-tipo-planta-b.jpg" 
							alt="plano donato alvarez 221 - 2 ambientes b">

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
							<p id="instalaciones" data-value="75" class="percentage bebas">75</p><span class="bebas">%</span>
						</div>
						<span class="circle">
							<i class="fa-solid fa-bars-progress"></i>
						</span>
						<p class="title bebas">INSTALACIONES</p>
					</div>

					<div data-aos="fade-up" class="etapa">
						<div class="content_number">
							<p id="terminaciones" data-value="45" class="percentage bebas">45</p><span class="bebas">%</span>
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
						href="./img/obras-individuales/donato-221/fachada-large.jpg" 
						data-lightbox="donato"
						data-title="Fachada Donato Alvarez 221"
						data-alt="fachada donato alvarez 221 large">
						<img class="img-fluid" src="./img/obras-individuales/donato-221/fachada.jpg" alt="fachada donato alvarez 221">
						<div class="content">
							<h4 class="bebas">fachada</h4>
						</div>
					</a>
				</div>

				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/donato-221/contrafrente-large.jpg" 
						data-lightbox="donato"
						data-title="Contrafrente Donato Alvarez 221"
						data-alt="contrafrente donato alvarez 221 large">
						<img class="img-fluid" src="./img/obras-individuales/donato-221/contrafrente.jpg" alt="contrafrente donato alvarez 221">
						<div class="content">
							<h4 class="bebas">contrafrente</h4>
						</div>
					</a>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/donato-221/sum-large.jpg" 
						data-lightbox="donato"
						data-title="SUM Donato Alvarez 221"
						data-alt="sum donato alvarez 221 large">
						<img class="img-fluid" src="./img/obras-individuales/donato-221/sum.jpg" alt="sum donato alvarez 221">
						<div class="content">
							<h4 class="bebas">sum</h4>
						</div>
					</a>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/donato-221/piscina-large.jpg" 
						data-lightbox="donato"
						data-title="Piscina Donato Alvarez 221"
						data-alt="piscina donato alvarez 221 large">
						<img class="img-fluid" src="./img/obras-individuales/donato-221/piscina.jpg" alt="piscina donato alvarez 221">
						<div class="content">
							<h4 class="bebas">piscina</h4>
						</div>
					</a>
				</div>

				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/donato-221/terraza-verde-large.jpg" 
						data-lightbox="donato"
						data-title="Terraza Verde Donato Alvarez 221"
						data-alt="terraza donato alvarez 221 large">
						<img class="img-fluid" src="./img/obras-individuales/donato-221/terraza-verde.jpg" alt="terraza verde donato alvarez 221">
						<div class="content">
							<h4 class="bebas">terraza verde</h4>
						</div>
					</a>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<a 
						href="./img/obras-individuales/donato-221/gym-large.jpg" 
						class="last" 
						data-lightbox="donato"
						data-title="GYM Donato Alvarez 221"
						data-alt="gym donato alvarez 221 large">
						<img class="img-fluid" src="./img/obras-individuales/donato-221/gym.jpg" alt="gym donato alvarez 221">
						<div class="content">
							<h4 class="bebas">gym</h4>
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

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.254535299042!2d-58.45713788435883!3d-34.623007480454554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca238496541b%3A0xd7b285884a990fe2!2sAv.%20Tte.%20Gral.%20Donato%20%C3%81lvarez%20221%2C%20C1406BOA%20CABA!5e0!3m2!1ses-419!2sar!4v1660335706815!5m2!1ses-419!2sar" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				<div data-aos="fade-left" class="content_medios">

					<div class="medios">
						<img class="img-fluid" src="./img/obras-individuales/icono-subte.png" alt="icono subte">
						<h4>Subte:</h4>
						<p>Líneas <br>A-E</p>
					</div>

					<div class="medios">
						<img class="img-fluid" src="./img/obras-individuales/icono-tren.png" alt="icono tren">
						<h4>Tren:</h4>
						<p>Líneas <br>Sarmiento</p>
					</div>

					<div class="medios">
						<img class="img-fluid" src="./img/obras-individuales/icono-colectivo.png" alt="icono colectivo">
						<h4>Colectivos:</h4>
						<p>Líneas <br>1-8-25-44-49-55 <br>76-86-88-92-96 <br>113-132-163-172</p>
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