<?php
	
	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'obra_curso';
  $obra = 'nicasio_480';

  echo "
	<script>
		var section_detalle = true
		var obra = 'nicasio_480'
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
	<meta name="description" content="El edificio cuenta con unidades de 1 ambiente, posee frente de vidrio templado con terminaciones en acero inoxidable. Cocheras individuales en planta baja con portón automático levadizo.. 
">
	<title>VQZ - Constructora - Nicasio 480 - CABA</title>

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
	<section id="app" class="obra_detalle aranguren_1061 nicasio_480">

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
			    <source src="videos/nicasio.mp4" type="video/mp4">
			  </video>
			</div>
		  <div data-aos="fade-left" class="direccion">
		  	<h1>
		  		<span class="calle bebas">nicasio oroño</span>
		  		<span class="numero bebas">480</span>
		  	</h1>
		  </div>
		</section>
		<!-- Video end -->

		<!-- Caracteristicas -->
		<section class="container caracteristicas">
		  
		  <div class="row">
		  	<div class="col-md-6">
		  		<h2 data-aos="fade-up" class="bebas">TU PRIMER<br><span>HOGAR</span></h2>
		  	</div>
		  	<div class="col-md-6">
		  		<p data-aos="fade-up">
		  			El edificio cuenta con unidades de 1 ambiente, posee frente de vidrio templado con terminaciones en acero inoxidable.
		  		</p>
		  		<p data-aos="fade-up">
		  			Cocheras individuales en planta baja con portón automático levadizo. Ascensores de última generación, revestidos con espejo y acero.
		  		</p>
		  	</div>
		  </div>

		  <div class="row">
		  	<div class="col-md-12 content_icons">

		  		<div data-aos="fade-up" class="icon">
		  			<img class="img-fluid" src="./img/obras-individuales/icono-ambientes.gif" alt="icono ambientes">
		  			<h3 class="bebas">1 <br>aMBIENTE</h3>
		  		</div>

		  		<div data-aos="fade-up" class="icon">
		  			<img class="img-fluid" src="./img/obras-individuales/icono-cocheras.gif" alt="icono cocheras">
		  			<h3 class="bebas">AMPLIAS <br>COCHERAS</h3>
		  		</div>

		  		<div data-aos="fade-up" class="icon">
		  			<img class="img-fluid" src="./img/obras-individuales/icono-parrilla.gif" alt="icono parrilla">
		  			<h3 class="bebas">TERRAZA <br>C/PARRILLA</h3>
		  		</div>

		  	</div>
		  </div>

		  <div class="row">
		  	<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
		  		<h2 class="bebas ultimas_unidades">Venta de unidades con escritura dirécta<br>últimas unidades</h2>
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
					    	<h2 class="bebas">1 ambiente</h2>
					    	<img 
					      	src="./img/obras-individuales/nicasio-480/slide-mobile/slide-1-mobile.gif"
					      	class="d-block w-100" 
					      	alt="slide mobile nicasio 480 - 1">
					    </div>

					    <div class="carousel-item">
					    	<h2 class="bebas">1 ambiente</h2>
					    	<img 
					      	src="./img/obras-individuales/nicasio-480/slide-mobile/slide-2-mobile.gif"
					      	class="d-block w-100" 
					      	alt="slide mobile nicasio 480 - 2">
					    </div>

					    <div class="carousel-item">
					    	<h2 class="bebas">1 ambiente</h2>
					    	<img 
					      	src="./img/obras-individuales/nicasio-480/slide-mobile/slide-3-mobile.gif"
					      	class="d-block w-100" 
					      	alt="slide mobile nicasio 480 - 3">
					    </div>

					    <div class="carousel-item">
					    	<h2 class="bebas">1 ambiente</h2>
					    	<img 
					      	src="./img/obras-individuales/nicasio-480/slide-mobile/slide-4-mobile.gif"
					      	class="d-block w-100" 
					      	alt="slide mobile nicasio 480 - 4">
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
					<h2 data-aos="fade-up" id="title_floor" class="bebas">1 AMBIENTE</h2>
					<h3 data-aos="fade-up" class="bebas" id="title_ambiente"></h3>
				</div>

				<div class="row">

					<div class="col-sm-6 content_plano">

						<div data-aos="fade-up" class="content_map">
							<img class="img-fluid" src="./img/obras-individuales/nicasio-480/plano-nicasio.gif" alt="plano nicasio oroño 480">

							<svg 
								version="1.1" 
								id="map1" 
								xmlns="http://www.w3.org/2000/svg" 
								xmlns:xlink="http://www.w3.org/1999/xlink" 
								x="0px" y="0px" 
								viewBox="0 0 111 318" 
								style="enable-background:new 0 0 111 318;" 
								xml:space="preserve">
								<path 
									data-plano="1" 
									data-plano-title="" 
									data-plano-floor="1 AMBIENTE" 
									class="map transition active" 
									d="M14.95,0.76h95.12l-1.36,275.56h-6.14l-0.68,40.92h-79.8v-39.45l-21.14-0.11v-76.82l27.39,0.04l0.17-47.98
									l-14.15-0.15L14.95,0.76z"/>
							</svg>

							<svg 
								version="1.1" 
								id="map2" 
								xmlns="http://www.w3.org/2000/svg" 
								xmlns:xlink="http://www.w3.org/1999/xlink" 
								x="0px" 
								y="0px" 
								viewBox="0 0 57 112" 
								style="enable-background:new 0 0 57 112;" 
								xml:space="preserve">
								<path 
									data-plano="2" 
									data-plano-title="" 
									data-plano-floor="1 AMBIENTE" 
									class="map transition" 
									d="M0.55,0.73h37.78v42.52h18.12v20.49H45.58l-0.14,30.39h-7.95v17.15H5.71L5.85,94.4H1.04L0.55,0.73z"/>
							</svg>

							<svg 
								version="1.1" 
								id="map3" 
								xmlns="http://www.w3.org/2000/svg" 
								xmlns:xlink="http://www.w3.org/1999/xlink" 
								x="0px" 
								y="0px" 
								viewBox="0 0 59 118" 
								style="enable-background:new 0 0 59 118;" 
								xml:space="preserve">
								<path 
									data-plano="3" 
									data-plano-title="" 
									data-plano-floor="1 AMBIENTE" 
									class="map transition"  
									d="M0.89,17.49h5.02V0.98h33.66v16.52h7.11l-0.14,31.57h11.57v19.52h-17.6v48.44l-38.66-0.1L0.89,17.49z"/>
							</svg>

							<svg 
								version="1.1" 
								id="map4" 
								xmlns="http://www.w3.org/2000/svg" 
								xmlns:xlink="http://www.w3.org/1999/xlink" 
								x="0px" 
								y="0px" 
								viewBox="0 0 58 131.5" 
								style="enable-background:new 0 0 58 131.5;" 
								xml:space="preserve">
								<path 
									data-plano="4" 
									data-plano-title="" 
									data-plano-floor="1 AMBIENTE" 
									class="map transition" 
									d="M6.78,17.24h7.95V0.79h33.46v16.45h3.21l0.14,113.47H13.47l0.16-62.17l4.48,0.03V48.33L6.47,48.29L6.78,17.24z"/>
							</svg>

						</div>
					</div>

					<div data-aos="fade-up" class="col-sm-6 content_render">

						<img 
							data-render="1"
							class="img-fluid render active" 
							src="./img/obras-individuales/nicasio-480/render-1.gif" 
							alt="render 1">
						
						<img 
							data-render="2"
							class="img-fluid render" 
							src="./img/obras-individuales/nicasio-480/render-2.gif" 
							alt="render 2">

						<img 
							data-render="3"
							class="img-fluid render" 
							src="./img/obras-individuales/nicasio-480/render-3.gif" 
							alt="render 3">

						<img 
							data-render="4"
							class="img-fluid render" 
							src="./img/obras-individuales/nicasio-480/render-4.gif" 
							alt="render 4">

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
						href="./img/obras-individuales/nicasio-480/fachada-large.jpg" 
						data-lightbox="nicasio"
						data-title="Fachada Nicasio Oroño 480"
						data-alt="fachada Nicasio Oroño 480 large">
						<img class="img-fluid" src="./img/obras-individuales/nicasio-480/fachada.jpg" alt="fachada Nicasio Oroño 480">
						<div class="content">
							<h4 class="bebas">fachada</h4>
						</div>
					</a>
				</div>

				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/nicasio-480/vista-central-large.jpg" 
						data-lightbox="nicasio"
						data-title="Vista Central Nicasio Oroño 480"
						data-alt="Vista Central Nicasio Oroño 480 large">
						<img class="img-fluid" src="./img/obras-individuales/nicasio-480/vista-central.jpg" alt="Vista central Nicasio Oroño 480">
						<div class="content">
							<h4 class="bebas">Vista Central</h4>
						</div>
					</a>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/nicasio-480/interior-large.jpg" 
						data-lightbox="nicasio"
						data-title="Interior Nicasio Oroño 480"
						data-alt="Interior Nicasio Oroño 480 large">
						<img class="img-fluid" src="./img/obras-individuales/nicasio-480/interior.jpg" alt="Interior Nicasio Oroño 480">
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
						href="./img/obras-individuales/nicasio-480/interior-2-large.jpg" 
						data-lightbox="nicasio"
						data-title="Interior Nicasio Oroño 480"
						data-alt="Interior Nicasio Oroño 480 large">
						<img class="img-fluid" src="./img/obras-individuales/nicasio-480/interior-2.jpg" alt="Interior Nicasio Oroño 480">
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

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.429612071239!2d-58.4520017!3d-34.618582200000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca22b1441171%3A0xd31fceb65ea3076b!2sNicasio%20Oro%C3%B1o%20480%2C%20C1405AQB%20CABA!5e0!3m2!1ses-419!2sar!4v1662570093716!5m2!1ses-419!2sar" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				<div data-aos="fade-left" class="content_medios">

					<div class="medios">
						<img class="img-fluid" src="./img/obras-individuales/icono-subte.png" alt="icono subte">
						<h4>Subte:</h4>
						<p>Líneas <br>A</p>
					</div>

					<div class="medios">
						<img class="img-fluid" src="./img/obras-individuales/icono-tren.png" alt="icono tren">
						<h4>Tren:</h4>
						<p>Línea <br>Sarmiento</p>
					</div>

					<div class="medios">
						<img class="img-fluid" src="./img/obras-individuales/icono-colectivo.png" alt="icono colectivo">
						<h4>Colectivos:</h4>
						<p>Líneas <br>44-76-84<br>92-172-181</p>
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