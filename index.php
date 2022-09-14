<?php
	
	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'home';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A través de los años, Vazquez Obras y Servicios se ha encaminado hacia una actividad integrada, especializándose en la implementación y desarrollo de procesos industriales relacionados con el diseño y la construcción de proyectos de inversión, vivienda y oficinas.">
	<title>VQZ - Constructora</title>

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

	<!-- Contenido HOME -->
	<section id="app" class="home">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Video -->
		<section class="video first_section">
		  <div class="overlay"></div>
		  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
		    <source src="videos/nubes.mp4" type="video/mp4">
		  </video>
		</section>
		<!-- Video end -->

		<!-- Video Info -->
		<section class="container video_info">
		  <div class="row">
		  	<div class="col-md-12">
		  		<div class="content">

		  			<div data-aos="fade-right" class="img">
		  				<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
							  <div class="carousel-inner">
							    <div data-bs-interval="2500" class="carousel-item active">
							      <img class="img-fluid" src="./img/home/edificio-header-opt-a.jpg" alt="edificio vqz constructora a">
							    </div>
							    <div data-bs-interval="2500" class="carousel-item">
							      <img class="img-fluid" src="./img/home/edificio-header-opt-b.jpg" alt="edificio vqz constructora b">
							    </div>
							    <div data-bs-interval="2500" class="carousel-item">
							      <img class="img-fluid" src="./img/home/edificio-header-opt-c.jpg" alt="edificio vqz constructora c">
							    </div>
							    <div data-bs-interval="2500" class="carousel-item">
							      <img class="img-fluid" src="./img/home/edificio-header-opt-d.jpg" alt="edificio vqz constructora d">
							    </div>
							  </div>
							</div>
	  				</div>

		  			<div data-aos="fade-left" class="content_frase">
		  				<h1 class="bebas">estamos a la <br>altura de tus <br><span>sueños</span></h1>
		  			</div>

		  		</div>
		  	</div>
		  </div>
		</section>
		<!-- Video Info end -->

		<!-- Proyectos -->
		<section class="container-fluid proyectos p-0">

			<div class="container">

				<div class="row">
					<div data-aos="fade-up" class="col-md-12">
						<h2 class="bebas">PROYECTOS EN CURSO</h2>
					</div>
				</div>

				<div class="row">
					
					<!-- Donato -->
					<div data-aos="fade-up" class="col-sm-6 col-md-4 col-lg-3 item_project">
						<a href="./donato-221.php" class="content_img">
							<img class="img-fluid img_listado" src="./img/home/listado-donato.jpg" alt="listado donato">
						</a>
						<div class="content_data">
							<h3 class="bebas">donato <br>álvarez 221</h3>
							<div class="content_icons">
								<div class="content_caracteristicas">
									<div class="caracteristica">
										<img class="img-fluid" src="./img/home/icono-argentina-color.png" alt="icono argentina donato">
										<p>argentina</p>
									</div>
									<div class="caracteristica">
										<img class="img-fluid" src="./img/home/icono-entrega.png" alt="icono entrega donato">
										<p>ENTREGA INMEDIATA</p>
									</div>
									<div class="caracteristica">
										<img class="img-fluid" src="./img/home/icono-ultimas-unidades.png" alt="icono ultimas donato">
										<p>ÚLTIMAS UNIDADES</p>
									</div>
								</div>
								<a class="ver_mas transition" href="./donato-221.php">
									<i class="fa-solid fa-circle-plus"></i>
									VER
								</a>
							</div>
						</div>
					</div>
					<!-- Donato end -->

					<!-- Aranguren -->
					<div data-aos="fade-up" class="col-sm-6 col-md-4 col-lg-3 item_project">
						<a href="./aranguren-1061.php" class="content_img">
							<img class="img-fluid img_listado" src="./img/home/listado-aranguren.jpg" alt="listado aranguren">
						</a>
						<div class="content_data">
							<h3 class="bebas">aranguren <br>1061</h3>
							<div class="content_icons">
								<div class="content_caracteristicas">
									<div class="caracteristica">
										<img class="img-fluid" src="./img/home/icono-argentina-color.png" alt="icono argentina aranguren">
										<p>argentina</p>
									</div>
									<div class="caracteristica">
										<img class="img-fluid" src="./img/home/icono-obra.png" alt="icono obra aranguren">
										<p>EN OBRA</p>
									</div>
								</div>
								<a class="ver_mas transition" href="./aranguren-1061.php">
									<i class="fa-solid fa-circle-plus"></i>
									VER
								</a>
							</div>
						</div>
					</div>
					<!-- Aranguren end -->

					<!-- Pueyrredon -->
					<div data-aos="fade-up" class="col-sm-6 col-md-4 col-lg-3 item_project">
						<a href="./pueyrredon-434.php" class="content_img">
							<img class="img-fluid img_listado" src="./img/home/listado-pueyrredon.jpg" alt="listado pueyrredon">
						</a>
						<div class="content_data">
							<h3 class="bebas">Honorio <br>Pueyrredón <br>434</h3>
							<div class="content_icons">
								<div class="content_caracteristicas">
									<div class="caracteristica">
										<img class="img-fluid" src="./img/home/icono-argentina-color.png" alt="icono argentina pueyrredon">
										<p>argentina</p>
									</div>
									<div class="caracteristica">
										<img class="img-fluid" src="./img/home/icono-entrega.png" alt="icono entrega pueyrredon">
										<p>ENTREGA INMEDIATA</p>
									</div>
									<div class="caracteristica">
										<img class="img-fluid" src="./img/home/icono-ultimas-unidades.png" alt="icono ultimas pueyrredon">
										<p>ÚLTIMA UNIDAD</p>
									</div>
								</div>
								<a class="ver_mas transition" href="./pueyrredon-434.php">
									<i class="fa-solid fa-circle-plus"></i>
									VER
								</a>
							</div>
						</div>
					</div>
					<!-- Pueyrredon end -->

					<!-- Nicasio -->
					<div data-aos="fade-up" class="col-sm-6 col-md-4 col-lg-3 item_project">
						<a href="./nicasio-480.php" class="content_img">
							<img class="img-fluid img_listado" src="./img/home/listado-nicasio.jpg" alt="listado nicasio">
						</a>
						<div class="content_data">
							<h3 class="bebas">Nicasio <br>Oroño 480</h3>
							<div class="content_icons">
								<div class="content_caracteristicas">
									<div class="caracteristica">
										<img class="img-fluid" src="./img/home/icono-argentina-color.png" alt="icono argentina nicasio">
										<p>argentina</p>
									</div>
									<div class="caracteristica">
										<img class="img-fluid" src="./img/home/icono-entrega.png" alt="icono entrega nicasio">
										<p>ENTREGA INMEDIATA</p>
									</div>
									<div class="caracteristica">
										<img class="img-fluid" src="./img/home/icono-ultimas-unidades.png" alt="icono ultimas nicasio">
										<p>ÚLTIMAS UNIDADES</p>
									</div>
								</div>
								<a class="ver_mas transition" href="./nicasio-480.php">
									<i class="fa-solid fa-circle-plus"></i>
									VER
								</a>
							</div>
						</div>
					</div>
					<!-- Nicasio end -->

					<!-- Muniz -->
					<div data-aos="fade-up" class="col-sm-6 col-md-4 col-lg-3 item_project">
						<a href="./muniz-1060.php" class="content_img">
							<img class="img-fluid img_listado" src="./img/home/listado-muniz.jpg" alt="listado muniz">
						</a>
						<div class="content_data">
							<h3 class="bebas">muñiz 1060</h3>
							<div class="content_icons">
								<div class="content_caracteristicas">
									<div class="caracteristica">
										<img class="img-fluid" src="./img/home/icono-argentina-color.png" alt="icono argentina muniz">
										<p>argentina</p>
									</div>
									<div class="caracteristica">
										<img class="img-fluid" src="./img/home/icono-lanzamiento.png" alt="icono lanzamiento muniz">
										<p>LANZAMIENTO</p>
									</div>
								</div>
								<a class="ver_mas transition" href="./muniz-1060.php">
									<i class="fa-solid fa-circle-plus"></i>
									VER
								</a>
							</div>
						</div>
					</div>
					<!-- Muniz end -->

					<!-- Sant -->
					<div data-aos="fade-up" class="col-sm-6 col-md-4 col-lg-3 item_project">
						<a href="./san-honorat-24.php" class="content_img">
							<img class="img-fluid img_listado" src="./img/home/listado-sant.jpg" alt="listado sant">
						</a>
						<div class="content_data">
							<h3 class="bebas">Sant <br>Honorat 24</h3>
							<div class="content_icons">
								<div class="content_caracteristicas">
									<div class="caracteristica">
										<img class="img-fluid" src="./img/home/icono-espana-color.png" alt="icono espana sant">
										<p>españa</p>
									</div>
									<div class="caracteristica">
										<img class="img-fluid" src="./img/home/icono-entrega.png" alt="icono entrega sant">
										<p>ENTREGA INMEDIATA</p>
									</div>
									<div class="caracteristica">
										<img class="img-fluid" src="./img/home/icono-ultimas-unidades.png" alt="icono ultimas sant">
										<p>ÚLTIMAS UNIDADES</p>
									</div>
								</div>
								<a class="ver_mas transition" href="./san-honorat-24.php">
									<i class="fa-solid fa-circle-plus"></i>
									VER
								</a>
							</div>
						</div>
					</div>
					<!-- Sant end -->

					<!-- Plaza -->
					<div data-aos="fade-up" class="col-sm-6 col-md-4 col-lg-3 item_project">
						<a href="./placa-casernas-12.php" class="content_img">
							<img class="img-fluid img_listado" src="./img/home/listado-plaza.jpg" alt="listado plaza">
						</a>
						<div class="content_data">
							<h3 class="bebas">Plaça de <br>les Casernes <br>12</h3>
							<div class="content_icons">
								<div class="content_caracteristicas">
									<div class="caracteristica">
										<img class="img-fluid" src="./img/home/icono-espana-color.png" alt="icono espana plaza">
										<p>españa</p>
									</div>
									<div class="caracteristica">
										<img class="img-fluid" src="./img/home/icono-lanzamiento.png" alt="icono lanzamiento plaza">
										<p>LANZAMIENTO</p>
									</div>
								</div>
								<a class="ver_mas transition" href="./placa-casernas-12.php">
									<i class="fa-solid fa-circle-plus"></i>
									VER
								</a>
							</div>
						</div>
					</div>
					<!-- Plaza end -->

				</div>

			</div>

		</section>
		<!-- Proyectos end -->

		<!-- Ubicaciones -->
		<section class="container-fluid ubicaciones">
			<div class="row">

				<div data-aos="fade-right" class="col-md-6 content_mapa">
					<div id="carouselMapsControls" class="carousel slide" data-bs-ride="carousel">
						  <div class="carousel-inner">

						    <div class="carousel-item active">
						    	<a href="#" title="Abrir en Google Maps" target="_blank" rel="noopener">
						      	<img src="./img/home/mapa-donato.jpg" class="d-block w-100" alt="mapa donato">
						    	</a>
						    </div>

						    <div class="carousel-item">
						    	<a href="#" title="Abrir en Google Maps" target="_blank" rel="noopener">
						      	<img src="./img/home/mapa-aranguren.jpg" class="d-block w-100" alt="mapa aranguren">
						    	</a>
						    </div>

						    <div class="carousel-item">
						    	<a href="#" title="Abrir en Google Maps" target="_blank" rel="noopener">
						      	<img src="./img/home/mapa-pueyrredon.jpg" class="d-block w-100" alt="mapa pueyrredon">
						    	</a>
						    </div>

						    <div class="carousel-item">
						    	<a href="#" title="Abrir en Google Maps" target="_blank" rel="noopener">
						      	<img src="./img/home/mapa-nicasio.jpg" class="d-block w-100" alt="mapa nicasio">
						    	</a>
						    </div>

						    <div class="carousel-item">
						    	<a href="#" title="Abrir en Google Maps" target="_blank" rel="noopener">
						      	<img src="./img/home/mapa-muniz.jpg" class="d-block w-100" alt="mapa muniz">
						    	</a>
						    </div>

						    <div class="carousel-item">
						    	<a href="#" title="Abrir en Google Maps" target="_blank" rel="noopener">
						      	<img src="./img/home/mapa-sant.jpg" class="d-block w-100" alt="mapa sant">
						    	</a>
						    </div>

						    <div class="carousel-item">
						    	<a href="#" title="Abrir en Google Maps" target="_blank" rel="noopener">
						      	<img src="./img/home/mapa-plaza.jpg" class="d-block w-100" alt="mapa plaza">
						    	</a>
						    </div>
						    
						  </div>
						  <button class="carousel-control-prev" type="button" data-bs-target="#carouselMapsControls" data-bs-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carouselMapsControls" data-bs-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Next</span>
						  </button>
						</div>
				</div>

				<div data-aos="fade-left" class="col-md-6 content_frase">
					<h2 class="bebas">las mejores <br><span>ubicaciones</span> <br>de la ciudad</h2>	
				</div>

			</div>
		</section>
		<!-- Ubicaciones end -->

		<!-- Contacto -->
		<?php include_once('./includes/modulo-contacto.php'); ?>

	</section>
	<!-- Contenido HOME end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script src="https://www.google.com/recaptcha/api.js?render=<?= $_ENV['RECAPTCHA_KEY_SITE'] ?>"></script>
	<script src="./dist/bundle.js"></script>

</body>

</html>