<?php

require('includes/config.inc.php');
require('includes/get-variable-handling.php');
$current = 'obra_curso';
$obra = 'alberdi_1271';

echo "
	<script>
		var section_detalle = true
		var obra = 'alberdi_1271'
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
  <meta name="description" content="Edificio en Juan Bautista Alberdi 1271, CABA. Excelente ubicación. Consultá por unidades disponibles. VQZ Constructora.">
  <title>VQZ - Desarrollos - Juan Bautista Alberdi 1271 - CABA</title>

  <!-- Favicons -->
  <?php include('includes/favicon.php'); ?>

  <link rel="stylesheet" type="text/css" href="./node_modules/normalize.css/normalize.css">
  <link rel="stylesheet" type="text/css" href="./fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./node_modules/aos/dist/aos.css" />
  <link rel="stylesheet" type="text/css" href="./node_modules/lightbox2/dist/css/lightbox.min.css" />
  <link rel="stylesheet" type="text/css" href="./css/app.css">
	<link rel="stylesheet" type="text/css" href="./css/cookieconsent.css">
</head>

<body>
  <!-- Tag Manager Body -->
  <?php include_once("./includes/tag_manager_body.php"); ?>

  <!-- Contenido OBRA DETALLE -->
  <section id="app" class="obra_detalle aranguren_1061 muniz_1060 alberdi_1271">

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
          <source src="videos/alberdi.mp4" type="video/mp4">
        </video>
      </div>
      <div data-aos="fade-left" class="direccion">
        <h1>
          <span class="calle bebas">j. b. alberdi</span>
          <span class="numero bebas">1271</span>
        </h1>
      </div>
    </section>
    <!-- Video end -->

    <!-- Caracteristicas -->
    <section class="container caracteristicas">

      <div class="row">
        <div class="col-md-12">
          <h2 data-aos="fade-up" class="bebas text-start">ALGO<br><span>NUEVO ESTÁ<br>LLEGANDO</span></h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
          <h2 class="bebas ultimas_unidades">inicio de obra diciembre 2026</h2>
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
              <p id="demolicion" data-value="100" class="percentage bebas">100</p><span class="bebas">%</span>
            </div>
            <span class="circle first">
              <i class="fa-solid fa-bars-progress"></i>
            </span>
            <p class="title bebas">demolición</p>
          </div>

          <div data-aos="fade-up" class="etapa">
            <div class="content_number">
              <p id="excavacion" data-value="0" class="percentage bebas">0</p><span class="bebas">%</span>
            </div>
            <span class="circle">
              <i class="fa-solid fa-bars-progress"></i>
            </span>
            <p class="title bebas">EXCAVACIÓN</p>
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
            href="./img/obras-individuales/alberdi-1271/obra-1.jpg"
            data-lightbox="alberdi"
            data-title="Vista Aerea Alberdi 1271"
            data-alt="Vista Aerea Alberdi 1271 large">
            <img class="img-fluid" src="./img/obras-individuales/alberdi-1271/obra-1.jpg" alt="Vista Aerea Alberdi 1271">
            <div class="content">
              <h4 class="bebas">VISTA AEREA</h4>
            </div>
          </a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <a
            data-aos="fade-up"
            href="./img/obras-individuales/alberdi-1271/obra-2.jpg"
            data-lightbox="alberdi"
            data-title="Frente Alberdi 1271"
            data-alt="Frente Alberdi 1271 large">
            <img class="img-fluid" src="./img/obras-individuales/alberdi-1271/obra-2.jpg" alt="Frente Alberdi 1271">
            <div class="content">
              <h4 class="bebas">FRENTE</h4>
            </div>
          </a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <a
            data-aos="fade-up"
            href="./img/obras-individuales/alberdi-1271/obra-3.jpg"
            data-lightbox="alberdi"
            data-title="Frente Alberdi 1271"
            data-alt="Frente Alberdi 1271 large">
            <img class="img-fluid" src="./img/obras-individuales/alberdi-1271/obra-3.jpg" alt="Frente Alberdi 1271">
            <div class="content">
              <h4 class="bebas">FRENTE</h4>
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

        <div class="consent-embed-placeholder" data-embed-type="maps" data-embed-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.7844034829604!2d-58.44818936783436!3d-34.62521026145914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca3a271adfdf%3A0x83f23b35a0b78005!2sAv.%20Juan%20Bautista%20Alberdi%201271%2C%20C1406%20Cdad.%20Aut%C3%B3noma%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1769456104703!5m2!1ses!2sar" data-embed-title="Mapa de ubicación - Av. Juan Bautista Alberdi 1271">
          <p>Este contenido está alojado en Google Maps. Para verlo, aceptá las cookies de contenido embebido.</p>
          <button type="button" class="consent-embed-accept">Aceptar y ver contenido</button>
        </div>

        <div data-aos="fade-left" class="content_medios">

          <div class="medios">
            <img class="img-fluid" src="./img/obras-individuales/icono-subte.png" alt="icono subte">
            <h4>Subte:</h4>
            <p>Líneas <br>A - E</p>
          </div>

          <div class="medios">
            <img class="img-fluid" src="./img/obras-individuales/icono-tren.png" alt="icono tren">
            <h4>Tren:</h4>
            <p>Líneas <br>Sarmiento</p>
          </div>

          <div class="medios">
            <img class="img-fluid" src="./img/obras-individuales/icono-colectivo.png" alt="icono colectivo">
            <h4>Colectivos:</h4>
            <p>Líneas <br>103-145-180-8-85<br />55-1-132-96-44</p>
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