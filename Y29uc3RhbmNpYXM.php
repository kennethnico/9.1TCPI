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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel="preconnect" href="https://fonts.gstatic.com">-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="css/main.css">-->
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/dynamic.css">
    <link rel="stylesheet" href="css/animated.css">
    <link rel="stylesheet" href="css/owl.css">
    <link rel="shortcut icon" href="assets/logos/ocho.png">
    <link rel="stylesheet" href="css/presets.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/logico/lazy-youtube-embed/dist/lazy-youtube-embed.css" />
    <title>Inicio | 8° TCPI</title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZHZQYPSHHL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-ZHZQYPSHHL');
        /*Acciones a realizar para pase de asistencia*/
        /*Función para evitar que pasen lista antes de tiempo*/
        function listReadynt(d) {
            var toastx = ' <div class="toast" id="nott" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false"><div class="toast-header"><strong class="mr-auto">8TCPI</strong><small class="text-muted">justo ahora</small><button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button></div><div class="toast-body" id="not">Aún no puede registrarse su asistencia.</div></div>'
            console.log("Aún no ha llegado el momento.");
            $('#toasts').html(toastx);
            $('#nott').toast('show');
        }
        /*Funcion para evitar que pasen lista después de tiempo*/
        function listReadyd(d) {
            var toasty = ' <div class="toast" id="past" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false"><div class="toast-header"><strong class="mr-auto">8TCPI</strong><small class="text-muted">justo ahora</small><button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button></div><div class="toast-body" id="not">Ya no es posible registrar su asistencia.</div></div>'
            console.log("Ya no es posible registrar su asistencia.");
            $('#toasts').html(toasty);
            $('#past').toast('show');
        }
        /*Funcion AJAX para pasar lista, recibe como parametro el nombre de la columna
        en la que se insertará el registro (en este caso fue primerdia y segundodia)
        */
        function listReady(dday) {
            $.ajax({
                type: "POST",
                url: "partials/checker.php",
                dataType: "json",
                data: {
                    dia: dday
                },
                success: function (response) {
                    console.log(response.success);
                    console.log(response.why);
                    console.log(response.day);
                    console.log(response.r);
                    var textoH = '<div class="toast" id="responseAjax1" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false"><div class="toast-header"><strong class="mr-auto">8TCPI</strong><small class="text-muted">justo ahora</small><button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button></div><div class="toast-body">' + response.r + '</div></div>';
                    if (response.success) {
                        $('#toasts').html(textoH);
                        $('#responseAjax1').toast('show');
                    } else {
                        console.log("Ocurrió algún error en la comunicación con el Servidor: " + response.retorno);
                        $('#toasts').html(textoH);
                        $('#responseAjax1').toast('show');
                    }
                }
            });
        }
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
<!-- ***** Preloader End ***** -->
<!-----**** Modals  ****----->
<!-----**** 1 TCPI  ****----->
<div class="modal fade" id="modal1T" tabindex="-1" role="dialog" aria-labelledby="modal1TTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #fff;">Hola <?= $_SESSION['myuser'];?></h5>
                <!--<img src="./assets/logos/logo_txt.png" style="width: 50px; height: auto;">-->
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <form id="mesaForm" method="post">
                    <div class="form-group">
                        <label for="mess" class="col-form-label" style="align-text:center;">Por favor, a continuación, escribe tu <strong>nombre completo</strong>, para elaborar tu constancia de manera correcta:</label>
                        <input type="text" size="32" name="nam1" id="nam1" class="form-control" placeholder="Inserte su Nombre Completo" autocomplete="off" />
                        <p class="font-italic">P.ej.: Edwin Kenet Nicolás Ruiz</p>
                        <input type="text" size="32" value="<?= $_SESSION['myemail']; ?>" name="ema1" id="ema1" hidden />
                    </div>
                </form>
                <div class="alert alert-warning" role="alert">
                    No se realizarán correcciones a constancias después de esta <strong>validación.</strong>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" id="enviaM" style="padding:10px; margin:0px;">
                    <span id="spin2win" class="" role="status" aria-hidden="true"></span>
                    <span id="tEnvia">Enviar</span>
                </button>
            </div>
        </div>
    </div>
</div>
<!-----**** End Modals  ****----->
<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h4>8<span>TCPI</span></h4>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="cHJpbmNpcGFs.php#top">Inicio</a></li>
                        <li class="scroll-to-section"><a href="cHJpbmNpcGFs.php#antecedentes">Historia</a></li>
                        <li class="scroll-to-section"><a href="cHJpbmNpcGFs.php#program">Programa</a></li>
                        <li class="scroll-to-section"><a href="#" class="active">Constancias</a></li>
                        <li class="scroll-to-section"><a class="font-primary-color" href="partials/outt.php"><ion-icon name="log-out-outline"></ion-icon>Salir</a></li>
                        <!--<li class="scroll-to-section"><a href="#">Section 3</a></li>
                        <li class="scroll-to-section"><a href="#">Section 4</a></li>
                        --><li class="scroll-to-section"><a href="#"></a></li>
                        <!--                        <li class="scroll-to-section"><div class="main-red-button"><a href="#contact">Asistencia</a></div></li>-->
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!----------Antecedentes----------->
<div id="antecedentes1" class="our-portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h4 class="align-center">Apreciable <?= $_SESSION['myuser']; ?>, tu constancia de participación en el Taller de Cooperación Procesal Internacional ya está disponible.</h4>
                    <!--<h2 style="text-transform: none; font-size: 1.2rem;">Recuerda registrar tu <em>Asistencia</em> <span>Diariamente</span></h2>-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-3">
                <!--<a href="#">-->
                <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="hidden-content">
                        <h4>Da clic para registrar tu asistencia:</h4>
                        <button type="button" class="btn btn-light mybtn" onclick="listReadyd('primerdia')">Registrar</button>
                    </div>
                    <div class="showed-content font-primary-color">
                        <h2>12 Oct. 2022</h2>
                    </div>
                </div>
                <!--</a>-->
            </div>
            <div class="col-lg-4 col-sm-3">
                <!--<a href="#">-->
                <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="hidden-content">
                        <h4>Da clic para registrar tu asistencia:</h4>
                        <button type="button" class="btn btn-light mybtn" onclick="listReadyd('segundodia')">Registrar</button>
                    </div>
                    <div class="showed-content font-primary-color">
                        <h2>13 Oct. 2022</h2>
                    </div>
                </div>
                <!--</a>-->
            </div>
            <div class="col-lg-4 col-sm-3">
                <!--<a href="#">-->
                <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="hidden-content">
                        <h4>Da clic para registrar tu asistencia:</h4>
                        <button type="button" class="btn btn-light mybtn" onclick="listReadyd('tercerdia')">Registrar</button>
                    </div>
                    <div class="showed-content font-primary-color">
                        <h2>14 Oct. 2022</h2>
                    </div>
                </div>
                <!--</a>-->
            </div>
            <div class="container_arrow">
                <div class="chevron"></div>
                <div class="chevron"></div>
                <div class="chevron"></div>
            </div>
            <div style="position: absolute; bottom:0; right:0;" id="toasts">
            </div>
        </div>
    </div>
</div>
<!----------Fin Antecedentes----------->
<!----------Constancia----------->
<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="assets/images/services-left-image.png" alt="Constancias 8TCPI">
        </div>
      </div>
      <div class="col-lg-8 align-self-center">
        <div class="services">
          <div class="row">
            <div class="col-lg-12">
              <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="icon">
                  <img src="assets/images/service-icon-01.png" alt="reporting">
                </div>
                <div class="right-text">
                    <h5 class="font-white">La constancia será generada a:</h5>
                    <p><?= $_SESSION['myuser']; ?></p>
                    <button type="button" class="btn btn-light mybtn" id="requester">Generar Constancia</button>
                    <p id="res" class="font-white"></p>
                </div>
              </div>
            </div>
              <!--
            <div class="col-lg-12">
              <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                <div class="icon">
                  <img src="assets/images/service-icon-02.png" alt="">
                </div>
                <div class="right-text">
                  <h4>Data Reporting</h4>
                  <p>Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                </div>
              </div>
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!----------Fin Constancia----------->
<!-- Prop comentarios
<div id="contact" class="contact-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <div class="section-heading">
          <h2>Comparte tu experiencia durante el desarrollo del 8° Taller de Cooperación Procesal</h2>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <form method="post" class="regContact">
          <div class="row">
            <div class="col-lg-12">
              <fieldset>
                <textarea name="message" type="text" class="form-control" id="message" placeholder="Comentarios..." required=""></textarea>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                  <input type="submit" id="mssg" value="Enviar">
              </fieldset>
            </div>
          </div>
          <div class="contact-dec">
            <img src="assets/images/contact-decoration.png" alt="">
          </div>
        </form>
          <div style="position: absolute; bottom:0; right:0;" id="toasts2">
      </div>
    </div>
  </div>
</div>
    -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
                <p>DRIDPE © Copyright 2022 All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
<!-- Scripts -->
<script src="vendor/jquery/jquery.min.js"></script>
<!--<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="./assets/js/animation.js"></script>
<script src="./assets/js/imagesloaded.js"></script>
<script src="./assets/js/templatemo-custom.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lazy-youtube-embed@1.0.0/dist/lazy-youtube-embed.js" defer></script>
<script>
    $(document).ready(function() {
        var nmb = "<?= $_SESSION['myuser'] ?>";
        var em = "<?= $_SESSION['myemail'] ?>";
        var mss = "<?= $_SESSION['mesa'] ?>";
        var asg = "<?= $_SESSION['cons'] ?>";
        console.log("Verificado?:" + asg);
        if (asg == 'SI') {
            $('#modal1T').modal('hide')
        } else {
            console.log("ASG - modal:" + asg);
            $('#modal1T').modal('show')
        }
        $("#nam1").focus(function() {
            //alert("Handler for .focus() called.");
            $('.alert').alert('close');
        });
        /*Función para verificar el nombre*/
        $("#enviaM").click(function() {
            if ($('#nam1').val() === '') {
                $('#nam1').addClass("border border-danger");
                $("#spin2win").addClass("spinner-border spinner-border-sm");
                $('#nam1').focus();
            } else {
                console.log("Nombre: " + $('#nam1').val());
                console.log("Email: " + $('#ema1').val());
                $('#nam1').removeClass("border border-danger");
                $.ajax({
                    type: "POST",
                    url: "partials/verifica.php",
                    dataType: "json",
                    data: $("#mesaForm").serialize(),
                    beforeSend: function() {
                        $("#enviaM").attr('disabled', true);
                        $("#tEnvia").text("Enviando...");
                        $("#spin2win").addClass("spinner-border spinner-border-sm");
                    },
                    success: function(response) {
                        /*console.log(response.success);
                        console.log(response.retorno);
                        console.log(response.e);
                        console.log(response.m);*/
                        if (response.success) {
                            $('#mesaT').modal('hide')
                            $("#enviaM").attr('disabled', false);
                            $("#spin2win").removeClass("spinner-border spinner-border-sm");
                            $("#sess").load(" #sess"); //No quitar el espacio, se arruinará todo!!!!
                            location.reload();
                        } else {
                            console.log("Ocurrió algún error: " + response.retorno);
                            $("#tEnvia").text("Lo sentimos, ocurrió un error.");
                            $("#spin2win").removeClass("spinner-border spinner-border-sm");
                        }
                    }
                });
            }
        });
        /******** Función envío de comentarios********/
        $("#mssg").click(function() {
            console.log("Click en boton msg");
            $.ajax({
                type: "POST",
                url: "partials/messenger.php",
                dataType: "json",
                data: $(".regContact").serialize(),
                success: function (response) {
                    console.log(response.success);
                    console.log(response.why);
                    console.log(response.day);
                    console.log(response.r);
                    var textoH = '<div class="toast" id="responseAjax2" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false"><div class="toast-header"><strong class="mr-auto">8TCPI</strong><small class="text-muted">justo ahora</small><button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button></div><div class="toast-body">' + response.r + '</div></div>';
                    if (response.success) {
                        $('#toasts2').html(textoH);
                        $('#responseAjax2').toast('show');
                    } else {
                        console.log("Ocurrió algún error en la comunicación con el Servidor: " + response.retorno);
                        $('#toasts2').html(textoH);
                        $('#responseAjax2').toast('show');
                    }
                }
            });
        });
            /****************/
            /****************/
        /*Función para Solicitar/Generar constancia*/
        $("#requester").click(function() {
            $.ajax({
                type: "POST",
                url: "partials/cgent.php",
                dataType: "json",
                beforeSend: function() {
                    console.log("Before send");
                    $("#requester").attr('disabled', true);
                    $("#requester").attr('value', 'Verificando estatus...');
                    $("#res").html("Espere mientras validamos y generamos su constancia. ¡Gracias por su paciencia!");
                    //$("#spin3win").addClass("spinner-border spinner-border-sm");
                },
                success: function(response) {
                    console.log(response.success);
                    console.log(response.r);
                    console.log(response.why);
                    console.log(response.day);
                    if (response.success) {
                        $("#requester").attr('disabled', true);
                        $("#requester").attr('value', 'Constancia generada y enviada');
                        $("#res").html("Su constancia ha sido enviada a su email. ¡Gracias por su valiosa participación!");
                        //$("#spin3win").removeClass("spinner-border spinner-border-sm");
                        //$("#sess").load(" #sess"); //No quitar el espacio, se arruinará todo!!!!
                    } else {
                        console.log("Ocurrió algún error: " + response.r);
                        $("#requester").attr('value', "Ocurrió un error");
                        $("#res").html(response.r + "");
                        //$("#spin3win").removeClass("spinner-border spinner-border-sm");
                    }
                }
            });
        });
            /****************/
            /****************/
            /****************/
    });
</script>
</body>
</html>
