<?php
session_start();
require 'partials/base.php';
require 'partials/expires.php';
if(!isset($_SESSION['myuser']))
{
    echo'<script>window.location.href="index.html"</script>';
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>9 TCPI - Inicio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/logos/9num.png" rel="icon">
    <link href="assets/logos/logo_sec.png" rel="icon-9tcpi">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Vendor CSS Files -->
    <link href="css/stylesMixed/aos/aos.css" rel="stylesheet">
    <link href="css/stylesMixed/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylesMixed/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="css/stylesMixed/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="css/stylesMixed/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="css/stylesMixed/remixicon/remixicon.css" rel="stylesheet">
    <link href="css/stylesMixed/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!---Youtube-->
    <link rel="stylesheet" href="./css/youtube_embed.css">

    <!-- icons fontawesome -->
    <script src="https://kit.fontawesome.com/f40904d23d.js" crossorigin="anonymous"></script>
    <!-- Main CSS File -->
    <link href="css/stylesMixed/style.css" rel="stylesheet">
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
        <div class="header-container d-flex align-items-center justify-content-between">
            <div class="logo">
                <h1 class="text-light"><a href="index.html"><span>9TCPI</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">

                <ul>
                    <!--
                    <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
                    <li><a class="nav-link scrollto" href="#about">Antecedentes</a></li>
                    <li><a class="nav-link scrollto " href="#cta">Programa</a></li>
                    <li><a class="nav-link scrollto" href="#semblanzas">Semblanzas</a></li>
                    <li><a class="nav-link scrollto" href="#ponencias">Ponencias</a></li>
                    -->
                    <li><a class="getstarted scrollto" href="./partials/outt.php"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Salir</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div><!-- End Header Container -->
    </div>
</header><!-- End Header -->


<main id="main">
    <!-- ======= Program Section ======= -->
    <section id="cta" class="cta">
        <div class="container col-8 offset-2">
            <div class="text-center" data-aos="zoom-in"><br><br>
                <h3>PROGRAMA</h3>
                <p> Conoce la programación de las ponencias y mesas de trabajo del 9° Taller de Cooperación Procesal Internacional. El contenido estará disponible el 31 de mayo de 2023 a las 00:00 hrs. Horario central GTM-6 </p>
                <!--
                <p class="fst-italic font-color-white small">Si desea participar de manera presencial en las mesas de trabajo del 1° de Junio, envía un email al correo: <strong>ejemplo@ejemplo.com</strong>; con los siguientes datos:</p>
                <ul class="font-color-white text-start">
                    <li>Nombre completo</li>
                    <li>Dependencia</li>
                    <li>Número telefónico</li>
                </ul>
                -->
                <!--<a class="cta-btn" href="#"> - </a>-->
                <!--<a href="https://online.flippingbook.com/view/1004615338/" class="fbo-embed" data-fbo-id="0db58b4912" data-fbo-ratio="3:2" data-fbo-lightbox="yes" data-fbo-width="100%" data-fbo-height="auto" data-fbo-version="1" style="max-width: 100%">Programa 9° TCPI</a><script async defer src="https://online.flippingbook.com/EmbedScriptUrl.aspx?m=redir&hid=1004615338"></script>-->
                <!-- <iframe style="width:900px;height:500px" src="https://online.fliphtml5.com/cjczl/kufg/"  seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" ></iframe>-->
                <!--<iframe style="width:900px;height:500px" src="https://flipbookpdf.net/web/site/3572b9b5e7b9d069b8a38a67a1926a7cdf142941202304.pdf.html"  seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" ></iframe>-->
                <iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe" src="https://heyzine.com/flip-book/4e2ba25f63.html" style="border: 1px solid lightgray; width: 100%; height: 600px;"></iframe>
            </div>
        </div>
    </section><!-- End Cta Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy;<strong><span> Poder Judicial de la Ciudad de México</span></strong>, 2023
            </div>
            <div class="credits">
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- JQUery y Boostrap -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<!-- Vendor JS Files -->
<!-- Vendor JS Files -->
<script src="css/stylesMixed/purecounter/purecounter_vanilla.js"></script>
<script src="css/stylesMixed/aos/aos.js"></script>
<script src="css/stylesMixed/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="css/stylesMixed/glightbox/js/glightbox.min.js"></script>
<script src="css/stylesMixed/isotope-layout/isotope.pkgd.min.js"></script>
<script src="css/stylesMixed/swiper/swiper-bundle.min.js"></script>
<script src="css/stylesMixed/php-email-form/validate.js"></script>
<!----Youtube------>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lazy-youtube-embed@1.0.0/dist/lazy-youtube-embed.js" defer></script>
<script src="./js/lazyJS.js"></script>
<!----End Youtube------>
<!-- Template Main JS File -->
<script src="js/jsmixed/main.js"></script>

</body>

</html>
