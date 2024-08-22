<?php

require('includes/config.inc.php');
require('includes/get-variable-handling.php');
$current = 'obras';

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Tag Manager Head -->
  <?php include_once("./includes/tag_manager_head.php"); ?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Conocé todos los proyectos desarrollados a lo largo de nuestros 35 años de experiencia.">
  <title>VQZ - Constructora - Obras Realizadas</title>

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

  <!-- Contenido OBRAS -->
  <section id="app" class="obras">

    <!-- Header -->
    <?php include_once('./includes/header.php'); ?>

    <!-- Informacion -->
    <section class="first_section container informacion">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <h1 class="bebas">OBRAS REALIZADAS</h1>
          <p>
            Conocé todos los proyectos desarrollados a lo largo de nuestros <br> <span>35 años de experiencia.</span>
          </p>
        </div>
      </div>
    </section>
    <!-- Informacion end -->

    <!-- Listado Info -->
    <section class="container proyectos listado">
      <div class="row">

        <div class="col-md-10 offset-md-1">
          <div class="row">

            <!-- Sant Honorat 24 -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <a href="./san-honorat-24.php">
                <img class="transition img-fluid img_listado" src="./img/obras/honorat.jpg" alt="listado honorat">
                <div class="content_data">
                  <h3 class="bebas">SANT HONORAT <br>24</h3>
                  <div class="caracteristica">
                    <img class="img-fluid" src="./img/home/icono-espana.png" alt="icono españa honorat">
                    <p>españa</p>
                  </div>
                </div>
              </a>
            </div>
            <!-- Sant Honorat 24 end -->

            <!-- Honorio Pueyrredon 434 -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <a href="./pueyrredon-434.php">
                <img class="transition img-fluid img_listado" src="./img/obras/pueyrredon.jpg" alt="listado pueyrredon">
                <div class="content_data">
                  <h3 class="bebas">HONORIO PUEYRREDÓN <br>434</h3>
                  <div class="caracteristica">
                    <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina pueyrredon">
                    <p>argentina</p>
                  </div>
                </div>
              </a>
            </div>
            <!-- Honorio Pueyrredon 434 end -->

            <!-- Morelos -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/morelos.jpg" alt="listado morelos">
              <div class="content_data">
                <h3 class="bebas">MORELOS <br>459</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina morelos">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- Morelos end -->

            <!-- valle -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/valle-1157.jpg" alt="listado valle 1157">
              <div class="content_data">
                <h3 class="bebas">valle <br>1157</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina valle 1157">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- valle end -->

            <!-- gavilan -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/gavilan.jpg" alt="listado gavilan">
              <div class="content_data">
                <h3 class="bebas">gavilan <br>369</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina gavilan">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- gavilan end -->

            <!-- donato 214 -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/donato-214.jpg" alt="listado donato 214">
              <div class="content_data">
                <h3 class="bebas">DONATO <br>ÁLVAREZ <br>214</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina donato 214">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- donato 214 end -->

            <!-- donato 224 -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/donato-224.jpg" alt="listado donato 224">
              <div class="content_data">
                <h3 class="bebas">DONATO <br>ÁLVAREZ <br>224</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina donato 224">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- donato 224 end -->

            <!-- donato 246 -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/donato-246.jpg" alt="listado donato 246">
              <div class="content_data">
                <h3 class="bebas">DONATO <br>ÁLVAREZ <br>246</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina donato 246">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- donato 246 end -->

            <!-- avellaneda 1728 -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/avellaneda.jpg" alt="listado avellaneda 1728">
              <div class="content_data">
                <h3 class="bebas">avellaneda <br>1728</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina avellaneda 1728">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- avellaneda 1728 end -->

            <!-- alberdi 255 -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/alberdi-255.jpg" alt="listado alberdi 255">
              <div class="content_data">
                <h3 class="bebas">JUAN <br>BAUTISTA <br>ALBERDI <br>255</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina alberdi 255">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- alberdi 255 end -->

            <!-- alberdi 575 -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/alberdi-575.jpg" alt="listado alberdi 575">
              <div class="content_data">
                <h3 class="bebas">JUAN <br>BAUTISTA <br>ALBERDI <br>575</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina alberdi 575">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- alberdi 575 end -->

            <!-- alberdi 1014 -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/alberdi-1014.jpg" alt="listado alberdi 1014">
              <div class="content_data">
                <h3 class="bebas">JUAN <br>BAUTISTA <br>ALBERDI <br>1014</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina alberdi 1014">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- alberdi 1014 end -->

            <!-- alberdi 1063 -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/alberdi-1063.jpg" alt="listado alberdi 1063">
              <div class="content_data">
                <h3 class="bebas">JUAN <br>BAUTISTA <br>ALBERDI <br>1063</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina alberdi 1063">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- alberdi 1063 end -->

            <!-- alberdi 1068 -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/alberdi-1068.jpg" alt="listado alberdi 1068">
              <div class="content_data">
                <h3 class="bebas">JUAN <br>BAUTISTA <br>ALBERDI <br>1068</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina alberdi 1068">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- alberdi 1068 end -->

            <!-- alberdi 1137 -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/alberdi-1137.jpg" alt="listado alberdi 1137">
              <div class="content_data">
                <h3 class="bebas">JUAN <br>BAUTISTA <br>ALBERDI <br>1137</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina alberdi 1137">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- alberdi 1137 end -->

            <!-- directorio 2241 -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/directorio.jpg" alt="listado directorio 2241">
              <div class="content_data">
                <h3 class="bebas">AVENIDA <br>DIERCTORIO <br>2241</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina directorio 2241">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- directorio 2241 end -->

            <!-- hualfin -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/hualfin.jpg" alt="listado hualfin">
              <div class="content_data">
                <h3 class="bebas">hualfin <br>1057</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina hualfin">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- hualfin end -->

            <!-- valle 563 -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/valle-563.jpg" alt="listado valle 563">
              <div class="content_data">
                <h3 class="bebas">valle <br>563</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina valle 563">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- valle 563 end -->

            <!-- acoyte -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/acoyte.jpg" alt="listado acoyte">
              <div class="content_data">
                <h3 class="bebas">acoyte <br>564</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina acoyte">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- acoyte end -->

            <!-- camacua -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/camacua.jpg" alt="listado camacua">
              <div class="content_data">
                <h3 class="bebas">CAMACUÁ <br>356</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina camacua">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- camacua end -->

            <!-- 33 orientales -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/33-orientales.jpg" alt="listado 33 orientales">
              <div class="content_data">
                <h3 class="bebas">33 <br>orientales <br>1607</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina 33 orientales">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- 33 orientales end -->

            <!-- cramer -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/cramer.jpg" alt="listado cramer">
              <div class="content_data">
                <h3 class="bebas">crámer <br>1880</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina cramer">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- cramer end -->

            <!-- malvinas -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/malvinas-argentinas.jpg" alt="listado malvinas">
              <div class="content_data">
                <h3 class="bebas">malvinas <br>argentinas <br>245</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina malvinas">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- malvinas end -->

            <!-- calcena -->
            <div data-aos="fade-up" class="col-sm-6 col-lg-4 item_project">
              <img class="img-fluid img_listado" src="./img/obras/calcena.jpg" alt="listado calcena">
              <div class="content_data">
                <h3 class="bebas">calcena <br>369</h3>
                <div class="caracteristica">
                  <img class="img-fluid" src="./img/home/icono-argentina.png" alt="icono argentina calcena">
                  <p>argentina</p>
                </div>
              </div>
            </div>
            <!-- calcena end -->

          </div>
        </div>

      </div>
    </section>
    <!-- Listado Info end -->

    <!-- Contacto -->
    <?php include_once('./includes/modulo-contacto.php'); ?>

  </section>
  <!-- Contenido OBRAS end -->

  <!-- Footer -->
  <?php include_once('./includes/footer.php'); ?>

  <script src="https://www.google.com/recaptcha/api.js?render=<?= $_ENV['RECAPTCHA_KEY_SITE'] ?>"></script>
  <script src="./dist/bundle.js"></script>

</body>

</html>