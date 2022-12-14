<?php
	
	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
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
	<meta name="description" content="Estamos poniendo en marcha un nuevo proyecto que transformarÃ¡ la zona. Muy pronto vas a conocer todos los detalles.">
	<title>VQZ - Constructora - Carrer de les Premses 18</title>

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
		  		<h2 data-aos="fade-up" class="bebas">ALGO<br><span>NUEVO ESTÃ<br>LLEGANDO</span></h2>
		  	</div>
		  	<div class="col-md-6">
		  		<p data-aos="fade-up">
		  			Estamos poniendo en marcha un nuevo proyecto que transformarÃ¡ el barrio. Muy pronto vas a conocer todos los detalles.
		  		</p>
		  		<p data-aos="fade-up">
						Un edificio con unidades de calidad, construido con los mejores materiales y accesorios de primera lÃ­nea.
		  		</p>
		  	</div>
		  </div>

		  <div class="row">
		  	<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
		  		<h2 class="bebas ultimas_unidades">Comienzo de Obra DICIEMbre 2022</h2>
		  	</div>
		  </div>
		  
		</section>
		<!-- Caracteristicas end -->

		<!-- Planos -->
		<section class="container planos_proximamente">
			<div class="row">
				<div class="col-md-12">
					<h2 data-aos="fade-up" class="bebas">planos disponibles PROXIMAMENTE</h2>
				</div>
			</div>
		</section>
		<!-- Planos end -->

		<!-- Avance de Obra -->
		<section class="container avance">
			<div class="row">

				<div class="col-md-12 content_title">
					<h2 data-aos="fade-up" class="bebas">AVANCE DE OBRA</h2>
				</div>

				<div class="col-md-12 content_avances">

					<div data-aos="fade-up" class="etapa">
						<div class="content_number">
							<p id="demolicion" data-value="0" class="percentage bebas">0</p><span class="bebas">%</span>
						</div>
						<span class="circle first">
							<i class="fa-solid fa-bars-progress"></i>
						</span>
						<p class="title bebas">demoliciÃ³n</p>
					</div>

					<div data-aos="fade-up" class="etapa">
						<div class="content_number">
							<p id="excavacion" data-value="0" class="percentage bebas">0</p><span class="bebas">%</span>
						</div>
						<span class="circle">
							<i class="fa-solid fa-bars-progress"></i>
						</span>
						<p class="title bebas">EXCAVACIÃN</p>
					</div>

					<div data-aos="fade-up" class="etapa">
						<div class="content_number">
							<p id="extructuras" data-value="0" class="percentage bebas">0</p><span class="bebas">%</span>
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
						<p class="title bebas">MAMPOSTERÃA</p>
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

		<!-- GalerÃ­a -->
		<section class="container galeria">

			<div class="row">

				<div class="col-md-12">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/carrer-18/emplazamiento-large.jpg" 
						data-lightbox="carrer"
						data-title="Emplazamiento Carrer de les Premses"
						data-alt="Emplazamiento Carrer de les Premses large">
						<img class="img-fluid" src="./img/obras-individuales/carrer-18/emplazamiento.jpg" alt="emplazamiento carrer 18">
						<div class="content">
							<h4 class="bebas">Emplazamiento</h4>
						</div>
					</a>
				</div>

				<div class="col-md-12">
					<a 
						data-aos="fade-up"
						href="./img/obras-individuales/carrer-18/emplazamiento-2-large.jpg" 
						data-lightbox="carrer"
						data-title="Emplazamiento Carrer de les Premses"
						data-alt="Emplazamiento Carrer de les Premses large">
						<img class="img-fluid" src="./img/obras-individuales/carrer-18/emplazamiento-2.jpg" alt="emplazamiento carrer 18">
						<div class="content">
							<h4 class="bebas">Emplazamiento</h4>
						</div>
					</a>
				</div>

			</div>
			
		</section>
		<!-- GalerÃ­a end -->

		<!--  UbicaciÃ³n -->
		<section class="ubicacion container-fluid">

			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<h2 data-aos="fade-up" class="bebas">UBICACIÃN</h2>

						<p data-aos="fade-up" class="featured">VILANOVA Y LA GELTRÃ, tierra de buen clima</p>

						<p data-aos="fade-up">
							Vilanova i la GeltrÃº es una ciudad y municipio de la provincia de Barcelona (CataluÃ±a), EspaÃ±a, capital de la comarca del Garraf. Se sitÃºa a 45 km tanto de Barcelona como de Tarragona.
						</p>

						<p data-aos="fade-up">
							Cuenta la leyenda que la villa nueva naciÃ³ porque el seÃ±or feudal de la GeltrÃº promulgÃ³ una ley segÃºn la cual, cuando una joven se casaba, tenÃ­a que pasar su primera noche con Ã©l por el derecho de pernada, y muchos geltrunenses se fueron, instalÃ¡ndose cerca del mar, en territorios de Cubellas, fundando la Villa Nueva de Cubellas. Con el tiempo ambas crecieron hasta convertirse en una sola.
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
						<p>LÃ­neas <br>Lineas<br>e15.1-e15.2<br>VL1</p>
					</div>

				</div>

			</div>

		</section>
		<!--  UbicaciÃ³n end -->

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