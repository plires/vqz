<?php

require('includes/config.inc.php');
require('includes/get-variable-handling.php');
$current = 'obra_curso';
$obra = 'san_honorat_26';

echo "
	<script>
		var section_detalle = true
		var obra = 'san_honorat_26'
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
  <meta name="description"
    content="Un edificio con unidades de calidad, construido con los mejores materiales y accesorios de primera línea.">
  <title>VQZ - Constructora - Sant Honorat 26 - España</title>

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
  <section id="app" class="obra_detalle aranguren_1061 muniz_1060 placa_casernas_12 san_honorat_26">

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
          <span class="calle bebas">Sant Honorat</span>
          <span class="numero bebas">26</span>
        </h1>
      </div>
    </section>
    <!-- Video end -->

    <!-- Caracteristicas -->
    <section class="container caracteristicas">

      <div class="row">
        <div class="col-md-6">
          <h2 data-aos="fade-up" class="bebas">AMANECE<br>VIENDO<br><span>EL MAR</span></h2>
        </div>
        <div class="col-md-6">
          <p data-aos="fade-up">
            Estamos poniendo en marcha un nuevo proyecto que transformará el barrio. Muy pronto vas a conocer todos los
            detalles.
          </p>
          <p data-aos="fade-up">
            Un edificio con unidades de calidad, construido con los mejores materiales y accesorios de primera línea.
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
          <h2 class="bebas ultimas_unidades">¡ENTREGA 2026!</h2>
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
        <div class="col-md-6">
          <a data-aos="fade-up" href="./img/obras-individuales/san-honorat-26/san-honorat-26-1.jpg"
            data-lightbox="san_honorat_26" data-title="Vista Sant Honorat 26" data-alt="Vista sant honorat 26 large">
            <img class="img-fluid" src="./img/obras-individuales/san-honorat-26/san-honorat-26-1.jpg"
              alt="Vista sant honorat 26">
            <div class="content">
              <h4 class="bebas">Vista</h4>
            </div>
          </a>
        </div>

        <div class="col-md-6">
          <a data-aos="fade-up" href="./img/obras-individuales/san-honorat-26/san-honorat-26-2.jpg"
            data-lightbox="san_honorat_26" data-title="Emplazamiento Sant Honorat 26"
            data-alt="Emplazamiento sant honorat 26 large -2">
            <img class="img-fluid" src="./img/obras-individuales/san-honorat-26/san-honorat-26-2.jpg"
              alt="Emplazamiento sant honorat 26 - 2">
            <div class="content">
              <h4 class="bebas">EMPLAZAMIENTO</h4>
            </div>
          </a>
        </div>
      </div>

      <div class="row">

        <div class="col-md-12">
          <a data-aos="fade-up" href="./img/obras-individuales/san-honorat-26/san-honorat-26-3.jpg"
            data-lightbox="san_honorat_26" data-title="Emplazamiento Sant Honorat 26"
            data-alt="Emplazamiento sant honorat 26 large - 3">
            <img class="img-fluid" src="./img/obras-individuales/san-honorat-26/san-honorat-26-3.jpg"
              alt="Emplazamiento sant honorat 26 - 3">
            <div class="content">
              <h4 class="bebas">EMPLAZAMIENTO</h4>
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

            <p data-aos="fade-up" class="featured">SITGES, es vida.</p>

            <p data-aos="fade-up">
              Con el mar de fondo, sentir sus rugidos, ver los amaneceres y atardeceres, oler la sal desde
              casa...mediterráneo en estado puro.
            </p>

            <p data-aos="fade-up">
              Está a 25 minutos del aeropuerto de Barcelona al que se puede llegar en tren, bus o coche muy fácilmente,
              además está a 35 minutos en tren del centro de Barcelona que le da una movilidad excepcional para poder
              trabajar en la ciudad y vivir en un pueblo idílico.
            </p>
          </div>
        </div>
      </div>

      <div data-aos="fade-up" class="content_map">

        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3000.2364646771985!2d1.812385076459013!3d41.23840680522229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a38039ad8f8adf%3A0x7daa82b318e7f396!2sCarrer%20de%20Sant%20Honorat%2C%2026%2C%2008870%20Sitges%2C%20Barcelona%2C%20Espa%C3%B1a!5e0!3m2!1ses-419!2sar!4v1712162197585!5m2!1ses-419!2sar"
          width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>

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