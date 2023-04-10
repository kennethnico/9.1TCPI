<?php
session_start();
require 'partials/base.php';
require 'partials/expires.php';
if(!isset($_SESSION['myuser']))
{
    echo'<script>window.location.href="index.html"</script>';
}
?>
<!doctype html>
<!----SELECCIÓN DE MESA---->
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <!--<link rel="stylesheet" href="css/main.css">-->
  <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css/dynamic.css">
  <link rel="stylesheet" href="css/count.css">
  <link rel="stylesheet" href="css/animated.css">
  <link rel="stylesheet" href="css/owl.css">
  <link rel="stylesheet" href="./css/youtube_embed.css">
  <link rel="shortcut icon" href="assets/logos/ocho.png">
  <link rel="stylesheet" href="css/presets.css">
  <title>Selección de mesa | 8° TCPI</title>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZHZQYPSHHL"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-ZHZQYPSHHL');
  </script>
</head>
<body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
  <div class="preloader-inner">
    <span class="dot"></span>
    <div class="dots">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>
<!-- ***** Selección de MESA ***** -->
<!-- ***** Header Area End ***** -->
<!------------>
<div class="main-banner-C wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s" style="padding-top: 10px!important;">
  <div class="container">
      <?php if($_SESSION['asig']== "SM"){ ?>
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
              <h4 class="text-white">Bienvenido <?= $_SESSION['myuser'];?></h4>
              <h6 class="text-white" style="text-transform: none!important;"><em>El contenido del 8° Taller de Cooperación Procesal Internacional, estará disponible para su visualización, a partir del 12 de Octubre a las 00:00 hrs.</em></h6>
                <h6 class="text-white" style="text-transform: none!important;"><em>Mientras tanto, te pedimos selecciones la Mesa de Análisis en la cual deseas participar como observador:</em></h6>
              <div style="width: 100%; display: flex; justify-content: end; padding-top: 20px;">
                  <form id="mesaForm" method="post">
                      <div class="form-group" style="display: flex!important;">
                          <!--<label for="mess" class="col-form-label text-white">Por favor, complete su información</label>-->
                          <select id="mess1" name="mess1" style="text-align-last: center;" class="form-control">
                              <option value="-" hidden selected>Seleccione una mesa de trabajo</option>
                              <option value="IA">Inteligencia Artificial aplicada a la Impartición de Justicia</option>
                              <option value="AIM">Adopción Internacional de Menores</option>
                              <option value="LDN">Ley de Nacionalidad</option>
                              <option value="Penal">Cooperación Procesal Internacional en materia Penal</option>
                          </select>
                          <input type="text" size="32" value="<?= $_SESSION['myuser']; ?>" name="nam1" id="nam1" style="display: none;" hidden />
                          <input type="text" size="32" value="<?= $_SESSION['myemail']; ?>" name="ema1" id="ema1" style="display: none;" hidden />
                          <button class="btn" type="button" id="enviaM" style="margin-left:5px; width: 130px!important; height: 40px!important; position: initial;">
                              <span id="tEnvia">Enviar</span>
                          </button>
                      </div>
                  </form>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s" style="z-index: -1;">
              <!--<img src="assets/logos/logo_main.png" alt="8TCPI">-->
                <!-- 1. Video Wrapper Container -->
                <div class="embed-youtube" data-video-id="jcyq_Np5qPk">
                    <!-- 2. The preview button that will contain the Play icon -->
                    <div class="embed-youtube-play"></div>
            </div>
          </div>
        </div>
      <?php #}elseif($_SESSION['asig']== "CM"){ echo '<script>window.location.href="cHJpbmNpcGFs.php";</script>' ?>
      <?php }else{ ?>
      <div class="row" style="height: 100vh;">
          <?php
          #header("Location: cHJpbmNpcGFs.php");
          #exit();
          ?>
          <script type="text/javascript">
              window.location.href = "cHJpbmNpcGFs.php";
          </script>
          ?>
          <!--<div class="container_c">
              <h1>Comenzamos</h1>
              <p>- - -  en - - -</p>
              <div class="charts">
                  <div class="chart">
                      <div class="circle center-abs"></div>
                      <svg class="center-abs" width="100" height="100">
                          <circle class="outer" cx="50" cy="50" r="45" />
                      </svg>
                      <span class="textC center-abs" id="days"></span>
                      <h3>Días</h3>
                  </div>
                  <div class="chart">
                      <div class="circle center-abs"></div>
                      <svg class="center-abs" width="100" height="100">
                          <circle class="outer" cx="50" cy="50" r="45" />
                      </svg>
                      <span class="textC center-abs" id="hours"></span>
                      <h3>Horas</h3>
                  </div>
                  <div class="chart">
                      <div class="circle center-abs"></div>
                      <svg class="center-abs" width="100" height="100">
                          <circle class="outer" cx="50" cy="50" r="45" />
                      </svg>
                      <span class="textC center-abs" id="minutes"></span>
                      <h3>Minutos</h3>
                  </div>
                  <div class="chart">
                      <div class="circle center-abs"></div>
                      <svg class="center-abs" width="100" height="100">
                          <circle class="outer" cx="50" cy="50" r="45" />
                      </svg>
                      <span class="textC center-abs" id="seconds"></span>
                      <h3>Segundos</h3>
                  </div>
              </div>
          </div>-->
      </div>
      <?php } ?>
  </div>
</div>
<!----------Fin banner----------->
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<!--<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="./assets/js/animation.js"></script>
<script src="./assets/js/imagesloaded.js"></script>
<script src="./assets/js/templatemo-custom.js"></script>
<script src="js/script_c.js"></script>
<script>
    $(document).ready(function(){
        var nmb = "<?= $_SESSION['myuser'] ?>";
        var em = "<?= $_SESSION['myemail'] ?>";
        var mss = "<?= $_SESSION['mesa'] ?>";
        var asg = "<?= $_SESSION['asig'] ?>";

        console.log("Email: " + $('#ema1').val());
        console.log("MesaPHP: <?= $_SESSION['mesa'] ?>");
        console.log("AsigPHP: <?= $_SESSION['asig'] ?>");
        if (asg == 'CM') {
            console.log("Mesa elegida:" + mss);
        } else {
            console.log("Sin mesa elegida.");
            $('#mesaT').modal('show')
        }
        /*Función para rellenar el campo Mesa*/
        $("#enviaM").click(function() {
            console.log("Botón");
            if ($('#mess1').val() === '-') {
                $('#mess1').addClass("border border-danger");
                $('#mess1').focus();
            } else {
                $('#mess1').removeClass("border border-danger");
                console.log("Nombre: " + $('#nam1').val());
                console.log("Email: " + $('#ema1').val());
                console.log("Mesa: " + $('#mess1').val());
                console.log("MesaPHP: <?= $_SESSION['mesa'] ?>");
                console.log("AsigPHP: <?= $_SESSION['asig'] ?>");
                $.ajax({
                    type: "POST",
                    url: "partials/mesas.php",
                    dataType: "json",
                    data: $("#mesaForm").serialize(),
                    beforeSend: function() {
                        $("#enviaM").attr('disabled', true);
                        $("#tEnvia").text("Enviando...");
                        $("#spin2win").addClass("spinner-border spinner-border-sm");
                    },
                    success: function(response) {
                        console.log("-------------");
                        console.log(response.success);
                        console.log(response.retorno);
                        console.log(response.e);
                        console.log(response.m);
                        if (response.success) {
                            $('#mesaT').modal('hide')
                            $("#enviaM").attr('disabled', false);
                            $("#tEnvia").text("¡Gracias!");
                            $("#spin2win").removeClass("spinner-border spinner-border-sm");
                            console.log("MesaAfter: <?= $_SESSION['mesa'] ?>");
                            console.log("AsigAfter: <?= $_SESSION['asig'] ?>");
                            //window.location.href="c2VsZWN0.php";
                            window.location.href="cHJpbmNpcGFs.php";
                        } else {
                            console.log("Ocurrió algún error: " + response.retorno);
                            $("#tEnvia").text("Lo sentimos, ocurrió un error.");
                            $("#spin2win").removeClass("spinner-border spinner-border-sm");
                        }
                    }
                });
            }
        });
    });
</script>
<script src="./js/lazyJS.js"></script>
</body>
</html>