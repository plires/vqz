<?php
	
	require ('includes/config.inc.php');
	require ('includes/get-variable-handling.php');
  $current = 'contacto';

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Tag Manager Head -->
  <?php include_once("./includes/tag_manager_head.php"); ?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="El paso más importante de un proyecto Es el primero: ADELANTE">
  <title>VQZ - Constructora - Contacto</title>

  <!-- Favicons -->
  <?php include('includes/favicon.php'); ?>

  <link rel="stylesheet" type="text/css" href="./node_modules/normalize.css/normalize.css">
  <link rel="stylesheet" type="text/css" href="./fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./node_modules/aos/dist/aos.css" />
  <link rel="stylesheet" type="text/css" href="./css/app.css">
</head>

<body>
  <!-- Tag Manager Body -->
  <?php include_once("./includes/tag_manager_body.php"); ?>

  <!-- Contenido CONTACTO -->
  <section id="app" class="obras page_contacto">

    <!-- Header -->
    <?php include_once('./includes/header.php'); ?>

    <!-- Informacion -->
    <section class="first_section container informacion">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <h1 data-aos="fade-right" class="bebas">CONTÁCTANOS</h1>
        </div>
      </div>
    </section>
    <!-- Informacion end -->

    <!-- Data -->
    <section class="container data">
      <div class="row">
        <div data-aos="fade-up" class="col-md-12 content_data">
          <h2 class="bebas">Ubicación</h2>
          <div class="content_data_whit_bandera">
            <div class="content_banderas">
              <img class="bandera" src="./img/home/icono-argentina-color.png" alt="bandera argentina">
            </div>
            <p>Av Tte Gral Donato Alvarez 221 Oficina 105 (C1406BOA). CABA - ARGENTINA</p>
          </div>
        </div>
        <div data-aos="fade-up" class="col-md-12 content_data">
          <h2 class="bebas">TelÉfono</h2>
          <div class="content_data_whit_bandera">
            <div class="content_banderas">
              <img class="bandera" src="./img/home/icono-argentina-color.png" alt="bandera argentina tel">
            </div>
            <p>(+54 11) 4633 - 1200</p>
          </div>
        </div>
        <div data-aos="fade-up" class="col-md-12 content_data">
          <h2 class="bebas">email</h2>
          <div class="content_data_whit_bandera">
            <div class="content_banderas">
              <img class="bandera" src="./img/home/icono-argentina-color.png" alt="bandera argentina tel">
              <img class="bandera" src="./img/home/icono-espana-color.png" alt="bandera espana mail">
            </div>
            <p>info@vazquez.net</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Data end -->

    <!-- Formulario -->
    <section class="container-fluid contacto section_form">
      <div class="container">
        <div class="row">

          <div data-aos="fade-up" class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 content_title">
            <h2>¿Tenés una consulta? <br><span>Escribínos</span></h2>
          </div>

          <div data-aos="fade-up" class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">

            <!-- Mensages -->
            <?php include_once('./includes/msg.php'); ?>

            <!-- Errors -->
            <?php include_once('./includes/errors.php'); ?>

            <!-- Formulario -->
            <?php include_once('./includes/parts/formulario.php'); ?>

          </div>

        </div>
      </div>
    </section>
    <!-- Formulario end -->

  </section>
  <!-- Contenido CONTACTO end -->

  <!-- Footer -->
  <?php include_once('./includes/footer.php'); ?>

  <script src="https://www.google.com/recaptcha/api.js?render=<?= $_ENV['RECAPTCHA_KEY_SITE'] ?>"></script>
  <script src="./dist/bundle.js"></script>

</body>

</html>