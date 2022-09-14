<?php
	
	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'obra_curso';
  $obra = 'san_honorat_24';

  echo "
	<script>
		var section_detalle = true
		var obra = 'san_honorat_24'
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
	<meta name="description" content="Este ático dúplex está distribuido en 2 plantas, en la primera planta encontramos un amplio espacio de salón comedor con la cocina abierta donde poder disfrutar de tu vida cotidiana, amigos y familia con el mar de fondo.">
	<title>VQZ - Constructora - San Honorat 24 - CABA</title>

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
	<section id="app" class="obra_detalle san_honorat_24">

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
			    <source src="videos/sant-honorat.mp4" type="video/mp4">
			  </video>
			</div>
		  <div data-aos="fade-left" class="direccion">
		  	<h1>
		  		<span class="calle bebas">SANT HONORAT</span>
		  		<span class="numero bebas">24</span>
		  	</h1>
		  </div>
		</section>
		<!-- Video end -->

		<!-- Caracteristicas -->
		<section class="container caracteristicas">
		  
		  <div class="row">
		  	<div class="col-md-6">
		  		<h2 data-aos="fade-up" class="bebas">VIVE <br>VIENDO <br><span>EL MAR</span></h2>
		  	</div>
		  	<div class="col-md-6">
		  		<p data-aos="fade-up">
		  			Este ático dúplex está distribuido en 2 plantas, en la primera planta encontramos un amplio espacio de salón comedor con la cocina abierta donde poder disfrutar de tu vida cotidiana, amigos y familia con el mar de fondo, también tenemos una habitación en suite con armarios empotrados y baño completo, todo con salida a un agradable balcón con unas vistas espectaculares al mar.
		  		</p>
		  		<p data-aos="fade-up">
		  			En la segunda planta tenemos 2 habitaciones en suite con sus respectivos baños y salida a un balcón desde que te puedes quedar contemplando la belleza del centro histórico de Sitges y el mar.
		  		</p>
		  	</div>
		  </div>

		  <div class="row">
		  	<div class="col-md-12 content_icons">

		  		<div data-aos="fade-up" class="icon">
		  			<img class="img-fluid" src="./img/obras-individuales/icono-ambientes.gif" alt="icono ambientes">
		  			<h3 class="bebas">3-4 <br>aMBIENTES</h3>
		  		</div>

		  		<div data-aos="fade-up" class="icon">
		  			<img class="img-fluid" src="./img/obras-individuales/icono-cocheras.gif" alt="icono cocheras">
		  			<h3 class="bebas">COCHERA</h3>
		  		</div>

		  		<div data-aos="fade-up" class="icon">
		  			<img class="img-fluid" src="./img/obras-individuales/icono-balcon.gif" alt="icono balcon">
		  			<h3 class="bebas">BALCÓN<br>TERRAZA</h3>
		  		</div>

		  	</div>
		  </div>

		  <div class="row">
		  	<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
		  		<h2 data-aos="fade-up" class="bebas ultimas_unidades">¡2 ULTIMAS UNIDADES! - entrega inmediata</h2>
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
								<h2 class="bebas">DEPARTAMENTO 1</h2>
					      <img 
					      	src="./img/obras-individuales/san-honorat-24/slide-mobile/departamento-1.jpg"
					      	class="d-block w-100" 
					      	alt="departamento 1 mobile a">
					    </div>

					    <div class="carousel-item">
								<h2 class="bebas">DEPARTAMENTO 2</h2>
					      <img 
					      	src="./img/obras-individuales/san-honorat-24/slide-mobile/departamento-2.jpg"
					      	class="d-block w-100" 
					      	alt="departamento 2 mobile b">
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
					<div class="col-sm-12">
						<h2 data-aos="fade-up" id="title_floor" class="bebas">PISO 8 FRENTE</h2>
						<h3 data-aos="fade-up" class="bebas" id="title_ambiente">Duplex - 4 amb. Planta baja</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<h2 data-aos="fade-up" class="bebas">DEPARTAMENTO 1</h2>
						<img class="img-fluid plano" src="./img/obras-individuales/san-honorat-24/departamento-1-desktop.jpg" alt="departamento-1">
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<h2 data-aos="fade-up" class="bebas">DEPARTAMENTO 2</h2>
						<img class="img-fluid" src="./img/obras-individuales/san-honorat-24/departamento-2-desktop.jpg" alt="departamento-2">
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
						href="./img/obras-individuales/san-honorat-24/balcon-mar-large.jpg" 
						data-lightbox="sanhonorat"
						data-title="Balcón al Mar San Honorat 24"
						data-alt="balcon al mar San Honorat 24 large">
						<img class="img-fluid" src="./img/obras-individuales/san-honorat-24/balcon-mar.jpg" alt="balcon mar San Honorat 24">
						<div class="content">
							<h4 class="bebas">BALCÓN AL MAR</h4>
						</div>
					</a>
				</div>

				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/san-honorat-24/vista-large.jpg" 
						data-lightbox="sanhonorat"
						data-title="Vista San Honorat 24"
						data-alt="vista San Honorat 24 large">
						<img class="img-fluid" src="./img/obras-individuales/san-honorat-24/vista.jpg" alt="vista San Honorat 24">
						<div class="content">
							<h4 class="bebas">VISTA</h4>
						</div>
					</a>
				</div>
			</div>

			<div class="row content_imgs">
				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/san-honorat-24/balcon-large.jpg" 
						data-lightbox="sanhonorat"
						data-title="Balcón San Honorat 24"
						data-alt="balcon San Honorat 24 large">
						<img class="img-fluid" src="./img/obras-individuales/san-honorat-24/balcon.jpg" alt="balcon San Honorat 24">
						<div class="content">
							<h4 class="bebas">BALCÓN</h4>
						</div>
					</a>
				</div>

				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/san-honorat-24/cocina-large.jpg" 
						data-lightbox="sanhonorat"
						data-title="Cocina San Honorat 24"
						data-alt="Cocina San Honorat 24 large">
						<img class="img-fluid" src="./img/obras-individuales/san-honorat-24/cocina.jpg" alt="cocina San Honorat 24">
						<div class="content">
							<h4 class="bebas">COCINA</h4>
						</div>
					</a>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/san-honorat-24/bano-large.jpg" 
						data-lightbox="sanhonorat"
						data-title="Baño San Honorat 24"
						data-alt="Baño San Honorat 24 large">
						<img class="img-fluid" src="./img/obras-individuales/san-honorat-24/bano.jpg" alt="baño San Honorat 24">
						<div class="content">
							<h4 class="bebas">BAÑO</h4>
						</div>
					</a>
				</div>

				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/san-honorat-24/habitacion-large.jpg" 
						data-lightbox="sanhonorat"
						data-title="Habitación San Honorat 24"
						data-alt="Habitación San Honorat 24 large">
						<img class="img-fluid" src="./img/obras-individuales/san-honorat-24/habitacion.jpg" alt="Habitación San Honorat 24">
						<div class="content">
							<h4 class="bebas">habitación</h4>
						</div>
					</a>
				</div>
			</div>

			<div class="row content_imgs">
				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/san-honorat-24/fachada-large.jpg" 
						data-lightbox="sanhonorat"
						data-title="Fachada San Honorat 24"
						data-alt="Fachada San Honorat 24 large">
						<img class="img-fluid" src="./img/obras-individuales/san-honorat-24/fachada.jpg" alt="Fachada San Honorat 24">
						<div class="content">
							<h4 class="bebas">fachada</h4>
						</div>
					</a>
				</div>

				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/san-honorat-24/terraza-large.jpg" 
						data-lightbox="sanhonorat"
						data-title="Terraza San Honorat 24"
						data-alt="Terraza San Honorat 24 large">
						<img class="img-fluid" src="./img/obras-individuales/san-honorat-24/terraza.jpg" alt="Terraza San Honorat 24">
						<div class="content">
							<h4 class="bebas">terraza</h4>
						</div>
					</a>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/san-honorat-24/cocina-2-large.jpg" 
						data-lightbox="sanhonorat"
						data-title="Cocina 2 San Honorat 24"
						data-alt="Cocina 2 San Honorat 24 large">
						<img class="img-fluid" src="./img/obras-individuales/san-honorat-24/cocina-2.jpg" alt="cocina 2 San Honorat 24">
						<div class="content">
							<h4 class="bebas">cocina</h4>
						</div>
					</a>
				</div>

				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/san-honorat-24/habitacion-2-large.jpg" 
						data-lightbox="sanhonorat"
						data-title="Habitación 2 San Honorat 24"
						data-alt="Habitación 2 San Honorat 24 large">
						<img class="img-fluid" src="./img/obras-individuales/san-honorat-24/habitacion-2.jpg" alt="Habitación 2 San Honorat 24">
						<div class="content">
							<h4 class="bebas">habitación</h4>
						</div>
					</a>
				</div>
			</div>

			<div class="row content_imgs">
				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/san-honorat-24/balcon-2-large.jpg" 
						data-lightbox="sanhonorat"
						data-title="Balcon 2 San Honorat 24"
						data-alt="Balcon 2 San Honorat 24 large">
						<img class="img-fluid" src="./img/obras-individuales/san-honorat-24/balcon-2.jpg" alt="Balcon 2 San Honorat 24">
						<div class="content">
							<h4 class="bebas">Balcon</h4>
						</div>
					</a>
				</div>

				<div class="col-md-6">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/san-honorat-24/habitacion-3-large.jpg" 
						data-lightbox="sanhonorat"
						data-title="Habitación 3 San Honorat 24"
						data-alt="Habitación 3 San Honorat 24 large">
						<img class="img-fluid" src="./img/obras-individuales/san-honorat-24/habitacion-3.jpg" alt="Habitación 3 San Honorat 24">
						<div class="content">
							<h4 class="bebas">habitación</h4>
						</div>
					</a>
				</div>
			</div>

		</section>
		<!-- Galería end -->

		<!-- Video Completo -->
		<section class="video_completo container">
			<div class="row">
				<div class="col-md-8 offset-md-2">

					<div class="content">
						<h2 data-aos="fade-up">Conocé al detalle las propiedades en este video</h2>

						<div data-aos="fade-up" class='hytPlayerWrapOuter'>
							<div class='hytPlayerWrap ratio ratio-16x9'>
								<iframe 
									src='https://www.youtube.com/embed/NQ7LYluGZrA?rel=0&enablejsapi=1'
									frameborder='0' >
								</iframe>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- Video Completo end -->

		<!--  Ubicación -->
		<section class="ubicacion container-fluid">

			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<h2 data-aos="fade-up" class="bebas">UBICACIÓN</h2>

						<p data-aos="fade-up" class="featured">
							 SITGES, es vida.
						</p>

						<p data-aos="fade-up">
							Con el mar de fondo, sentir sus rugidos, ver los amaneceres y atardeceres, oler la sal desde casa...mediterráneo en estado puro. 
						</p>

						<p data-aos="fade-up">
							Está a 25 minutos del aeropuerto de Barcelona al que se puede llegar en tren, bus o coche muy fácilmente, además está a 35 minutos en tren del centro de Barcelona que le da una movilidad excepcional para poder trabajar en la ciudad y vivir en un pueblo idílico.
						</p>
					</div>
				</div>
			</div>

			<div data-aos="fade-up" class="content_map">

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2985.2624751836574!2d2.0283713!3d41.56356359999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a493201efb4ccb%3A0x98a3ce5347ef3b47!2sCarrer%20de%20Sant%20Honorat%2C%2024%2C%2008222%20Terrassa%2C%20Barcelona%2C%20Espa%C3%B1a!5e0!3m2!1ses-419!2sar!4v1663168671067!5m2!1ses-419!2sar" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				<div data-aos="fade-left" class="content_medios">

					<div class="medios">
						<img class="img-fluid" src="./img/obras-individuales/icono-subte.png" alt="icono subte">
						<h4>Subte:</h4>
						<p>Líneas <br>-</p>
					</div>

					<div class="medios">
						<img class="img-fluid" src="./img/obras-individuales/icono-tren.png" alt="icono tren">
						<h4>Tren:</h4>
						<p>Línea <br>R</p>
					</div>

					<div class="medios">
						<img class="img-fluid" src="./img/obras-individuales/icono-colectivo.png" alt="icono colectivo">
						<h4>Buses:</h4>
						<p>Líneas <br>SL3-R2-R2S</p>
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