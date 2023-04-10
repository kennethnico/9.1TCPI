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
    <link rel="stylesheet" href="./css/youtube_embed.css">
    <title>Inicio | 8° TCPI</title>
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
<!-- ***** Preloader End ***** -->
<!-----**** Modals  ****----->
<!-----**** 1 TCPI  ****----->
<div class="modal fade" id="modal1T" tabindex="-1" role="dialog" aria-labelledby="modal1TTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal1TLongTitle">1er Taller de Cooperación Procesal Internacional</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                Se planteó la importancia del auxilio judicial internacional la cual se lleva a cabo a través de la cooperación que presentan los funcionarios de procuración y administración de justicia de distintos países, para el desahogo de diligencias procesales que deben practicarse fuera de la jurisdicción de la autoridad exhortante.
            </div>
        </div>
    </div>
</div>
<!-----**** 2 TCPI  ****----->
<div class="modal fade" id="modal2T" tabindex="-1" role="dialog" aria-labelledby="modal2TTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal2TLongTitle">2° Taller de Cooperación Procesal Internacional</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                Se señaló que en la práctica judicial se implementen adecuadamente el uso de los tratados internacionales suscritos por México en materia de Cooperación Procesal Internacional, de los cuales algunos incluyen formularios para la tramitación de exhortos y cartas rogatorias, toda vez que la utilización de los mismos es generalmente obligatoria entre los países parte.
            </div>
        </div>
    </div>
</div>
<!-----**** 3 TCPI  ****----->
<div class="modal fade" id="modal3T" tabindex="-1" role="dialog" aria-labelledby="modal3TTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal3TLongTitle">3er Taller de Cooperación Procesal Internacional</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                Se concluyó sobre la importancia del derecho de acceso a la justicia y Medios Alternos de Solución de Controversias en las convenciones internacionales de las que el estado mexicano forma parte.
            </div>
        </div>
    </div>
</div>
<!-----**** 4 TCPI  ****----->
<div class="modal fade" id="modal4T" tabindex="-1" role="dialog" aria-labelledby="modal4TTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal4TLongTitle">4° Taller de Cooperación Procesal Internacional</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                Se definió la importancia de hacer de la justicia una realidad viva y tangible para todos a través del debido proceso.
            </div>
        </div>
    </div>
</div>
<!-----**** 5 TCPI  ****----->
<div class="modal fade" id="modal5T" tabindex="-1" role="dialog" aria-labelledby="modal5TTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal5TLongTitle">5° Taller de Cooperación Procesal Internacional</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                Versó sobre actualización en materia de Cooperación Procesal Internacional, para facilitar el acceso a los justiciables, en el marco de los tratados internacionales suscritos por el gobierno de México y demás estados parte.
            </div>
        </div>
    </div>
</div>
<!-----**** 6 TCPI  ****----->
<div class="modal fade" id="modal6T" tabindex="-1" role="dialog" aria-labelledby="modal6TTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal6TLongTitle">6° Taller de Cooperación Procesal Internacional</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                Dar a conocer los alcances de los instrumentos internacionales de los que México forma parte en materia de Cooperación Procesal Internacional proporcionando al participante un conocimiento más amplio acerca de las posibilidades prácticas y herramientas para el acceso a los derechos que estos tratados proporcionan en los ámbitos público y privado.
            </div>
        </div>
    </div>
</div>
<!-----**** 7 TCPI  ****----->
<div class="modal fade" id="modal7T" tabindex="-1" role="dialog" aria-labelledby="modal7TTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal7TLongTitle">7° Taller de Cooperación Procesal Internacional</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                Se asentaron las bases de las nuevas responsabilidades de Cooperar en tiempos de pandemia, se buscó fortalecer más las instituciones vinculadas al proceso de la tramitología procesal como lo son los exhortos o cartas rogatorias, implementando las tecnologías que disminuyan la “tramitología procesal internacional” (por ejemplo, digitalizando absolutamente los exhortos o cartas rogatorias) o efectuando más reuniones y foros por plataformas virtuales.
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
                    <a href="index_old.html" class="logo">
                        <h4>8<span>TCPI</span></h4>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Inicio</a></li>
                        <li class="scroll-to-section"><a href="#antecedentes">Historia</a></li>
                        <li class="scroll-to-section"><a href="#program">Programa</a></li>
                        <li class="scroll-to-section"><a href="Y29uc3RhbmNpYXM.php">Constancias</a></li>
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
<!-- ***** Header Area End ***** -->
<!------------>
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <h6 class="text-white">Bienvenid@ <?= $_SESSION['myuser']; ?></h6>
                            <h2><em>Ciudad de México</em></h2>
                            <h4 class="text-white"><em>12, 13 y 14 de octubre de 2022</em></h4>
                            <div style="width: 100%; display: flex; justify-content: end; padding-top: 20px;">
                                <!--<a href="#antecedentes" class="font-white">Comenzar</a>-->
                        </div>
                        </div>
                        <div class="container_arrow">
                            <div class="chevron"></div>
                            <div class="chevron"></div>
                            <div class="chevron"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="assets/logos/logo_main.png" alt="team meeting">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----------Fin banner----------->
<!----------Antecedentes----------->
<div id="antecedentes" class="our-portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h2>Historia del <em> Taller de Cooperación Procesal</em> <span>Internacional</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <!--<a href="#">-->
                <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="hidden-content">
                        <h4>1er Taller de Cooperación Procesal Internacional</h4>
                        <button type="button" class="btn btn-light mybtn" data-toggle="modal" data-target="#modal1T">Ver semblanza</button>
                    </div>
                    <div class="showed-content">
                        <img src="assets/logos/talleres/Logo1TCPI.png" alt="">
                    </div>
                </div>
                <!--</a>-->
            </div>
            <div class="col-lg-3 col-sm-6">
                <!--<a href="#">-->
                <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="hidden-content">
                        <h4>2° Taller de Cooperación Procesal Internacional</h4>
                        <button type="button" class="btn btn-light mybtn" data-toggle="modal" data-target="#modal2T">Ver semblanza</button>
                    </div>
                    <div class="showed-content">
                        <img src="assets/logos/talleres/Logo2TCPI.png" alt="">
                    </div>
                </div>
                <!--</a>-->
            </div>
            <div class="col-lg-3 col-sm-6">
                <!--<a href="#">-->
                <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="hidden-content">
                        <h4>3er Taller de Cooperación Procesal Internacional</h4>
                        <button type="button" class="btn btn-light mybtn" data-toggle="modal" data-target="#modal3T">Ver semblanza</button>
                    </div>
                    <div class="showed-content">
                        <img src="assets/logos/talleres/Logo3TCPI.png" alt="">
                    </div>
                </div>
                <!--</a>-->
            </div>
            <div class="col-lg-3 col-sm-6">
                <!--<a href="#">-->
                <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="hidden-content">
                        <h4>4° Taller de Cooperación Procesal Internacional</h4>
                        <button type="button" class="btn btn-light mybtn" data-toggle="modal" data-target="#modal4T">Ver semblanza</button>
                    </div>
                    <div class="showed-content">
                        <img src="assets/logos/talleres/Logo4TCPI.png" alt="">
                    </div>
                </div>
                <!--</a>-->
            </div>
            <div class="col-lg-4 col-sm-6">
                <!--<a href="#">-->
                <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="hidden-content">
                        <h4>5° Taller de Cooperación Procesal Internacional</h4>
                        <button type="button" class="btn btn-light mybtn" data-toggle="modal" data-target="#modal5T">Ver semblanza</button>
                    </div>
                    <div class="showed-content">
                        <img src="assets/logos/talleres/Logo5TCPI.png" alt="">
                    </div>
                </div>
                <!--</a>-->
            </div>
            <div class="col-lg-4 col-sm-6">
                <!--<a href="#">-->
                <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="hidden-content">
                        <h4>6° Taller de Cooperación Procesal Internacional</h4>
                        <button type="button" class="btn btn-light mybtn" data-toggle="modal" data-target="#modal6T">Ver semblanza</button>
                    </div>
                    <div class="showed-content">
                        <img src="assets/logos/talleres/Logo6TCPI.png" alt="">
                    </div>
                </div>
                <!--</a>-->
            </div>
            <div class="col-lg-4 col-sm-6">
                <!--<a href="#">-->
                <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="hidden-content">
                        <h4>7° Taller de Cooperación Procesal Internacional</h4>
                        <button type="button" class="btn btn-light mybtn" data-toggle="modal" data-target="#modal7T">Ver semblanza</button>
                    </div>
                    <div class="showed-content">
                        <img src="assets/logos/talleres/Logo7TCPI.png" alt="">
                    </div>
                </div>
                <!--</a>-->
            </div>
        </div>
    </div>
</div>
<!----------Fin Antecedentes----------->
<!----Programa----->
<div id="program" class="our-portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h2>Programa de <span>Actividades</span></h2>
                </div>
            </div>
        </div>
        <!----Inicio Inauguración---->
        <div class="row wow fadeInLeft">
            <div class="col-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="" id="">
                        <ul class="list-group">
                            <li class="list-group-item text-center">
                                <div class="jumbotron jumbotron-fluid">
                                    <div class="container">
                                        <h1 class="display-6">Inauguración</h1>
                                        <p class="lead">Dr. Rafael Guerra Álvarez</p>
                                        <p class="small">Magistrado Presidente de la Comisión Nacional de Tribunales Superiores de Justicia de los Estados Unidos Mexicanos</p>
                                        <p class="lead">Dirección General de Asuntos Jurídicos</p>
                                        <p class="small">Secretaría de Relaciones Exteriores</p>
                                        <button type="button" class="btn btn-secondary btn-sm mb-20 bg-primary-color" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Ver mensaje</button>
                                        <div class="collapse" id="collapseExample">
                                            <div class="card card-body">
                                                <!-- 1. Video Wrapper Container -->
                                                <div class="embed-youtube" data-video-id="jcyq_Np5qPk">
                                                    <!-- 2. The preview button that will contain the Play icon -->
                                                    <div class="embed-youtube-play"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!----Fin Inauguración---->
        <!----Inicio Programa---->
        <div class="row wow fadeInRight">
            <div class="col-12">
                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <a class="nav-link active font-primary-color" id="nav-one-tab" data-toggle="tab" href="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true">12 de Octubre</a>
                        <a class="nav-link font-primary-color" id="nav-two-tab" data-toggle="tab" href="#nav-two" role="tab" aria-controls="nav-two" aria-selected="false">13 de Octubre</a>
                        <a class="nav-link font-primary-color" id="nav-three-tab" data-toggle="tab" href="#nav-three" role="tab" aria-controls="nav-three" aria-selected="false">14 de Octubre</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                        <ul class="list-group">
                            <!--<li class="list-group-item text-center">
                                <div class="jumbotron jumbotron-fluid">
                                    <div class="container">
                                        <h1 class="display-6">Inauguración</h1>
                                        <p class="lead">Dr. Rafael Guerra Álvarez</p>
                                        <p class="small">Magistrado Presidente de la Comisión Nacional de Tribunales Superiores de Justicia de los Estados Unidos Mexicanos</p>
                                        <p class="lead">Dirección General de Asuntos Jurídicos</p>
                                        <p class="small">Secretaría de Relaciones Exteriores</p>
                                        <button type="button" class="btn btn-secondary btn-sm mb-20 bg-primary-color" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Ver mensaje</button>
                                        <div class="collapse" id="collapseExample">
                                            <div class="card card-body">
                                                <div class="embed-youtube" data-video-id="jcyq_Np5qPk">
                                                    <div class="embed-youtube-play"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>-->
                            <li class="list-group-item">
                                <div class="accordion" id="miercoles12">
                                    <!---Lic. Krysta Stanford - Sem--->
                                    <div class="card">
                                        <div class="card-header bg-gradiente-tres" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Lic. Krysta Stanford
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#miercoles12">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_female.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab" data-toggle="pill" data-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Ponencia</button>
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent">
                                                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                        <div class="overflow-active text-justify">
                                                                            <p><span class="font-primary-color">Krysta Stanford</span> es abogada litigante en la Oficina de Litigios Extranjeros (OFL por sus siglas en inglés) del Departamento de Justicia de los Estados Unidos, con sede en Washington, DC.
                                                                            </p>
                                                                            <p>OFL representa a los Estados Unidos en cortes y tribunales extranjeros cuando los Estados Unidos es parte de un proceso judicial o tiene un interés. OFL también representa a ciertas personas que son demandadas o imputadas penalmente en su capacidad oficial en jurisdicciones extranjeras. Dentro de la OFL, la Oficina de Asistencia Judicial Internacional (OIJA) actúa como la Autoridad Central de los EE. UU. de conformidad con el Convenio de La Haya sobre Evidencias, el Convenio de La Haya sobre Notificación y el Protocolo Adicional a la Convención Interamericana.</p>
                                                                            <p>La Lic. Stanford inició su carrera en OFL en el Departamento de Justicia de EE. UU. en el año 2015. Entre sus funciones se encuentra procesar todas las solicitudes de evidencia entrantes, y generalmente trabaja en asuntos de asistencia judicial dentro de OIJA.</p>
                                                                            <p>
                                                                                Antes de trabajar en OFL, Krysta Stanford trabajó en la Oficina de Asuntos Internacionales de la División Penal del Departamento de Justicia de los Estados Unidos. La Lic. Stanford se graduó de la Facultad de Derecho de la Universidad de Pittsburgh en el año 2014.</p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">

                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <!-- 1. Video Wrapper Container -->
                                                                                <div class="embed-youtube" data-video-id="T8Nd0Qc09E4">
                                                                                    <!-- 2. The preview button that will contain the Play icon -->
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!----Lic. Christine Brennan - Sem---->
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center collapsed font-primary-color" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Lic. Christine Brennan
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#miercoles12">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_female.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab1" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab1" data-toggle="pill" data-target="#v-pills-home1" type="button" role="tab" aria-controls="v-pills-home1" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab1" data-toggle="pill" data-target="#v-pills-profile1" type="button" role="tab" aria-controls="v-pills-profile1" aria-selected="false">Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent1">
                                                                    <div class="tab-pane fade show active" id="v-pills-home1" role="tabpanel" aria-labelledby="v-pills-home-tab1">
                                                                        <!--<p class="text-center font-primary-color">Secretario General de la Conferencia de Ministros de Justicia de los Países Iberoamericanos (COMJIB) y de la Red Iberoamericana de Cooperación Jurídica Internacional (IberRed).</p>-->
                                                                        <div class="overflow-active text-justify">
                                                                            <p><span class="font-primary-color">Christine Brennan</span> es actualmente la Abogada a Cargo de la Oficina de Litigios Extranjeros para Latinoamérica (OFL por sus siglas en inglés) del Departamento de Justicia de los Estados Unidos. Su oficina está ubicada en la Embajada de los Estados Unidos en la Ciudad de Panamá.</p>
                                                                            <p>OFL representa a los Estados Unidos en cortes de justicia y tribunales extranjeros cuando los Estados Unidos es parte de un caso o tiene un interés. OFL también representa a ciertas personas que son demandadas o imputadas penalmente en su capacidad oficial en jurisdicciones extranjeras.</p>
                                                                            <p>La Licenciada Brennan comenzó su carrera en el Departamento de Justicia en el año 2012, en la Oficina de Litigios Europeos de la Embajada de los Estados Unidos en Londres. Más tarde, se trasladó a la sede de OFL en Washington, D.C., donde se enfocó principalmente en casos en América Latina e Israel, así como en asuntos de seguridad nacional. En el año 2021, abrió la primera oficina regional de OFL fuera de Europa, la Oficina de Litigios Latinoamericanos en la Ciudad de Panamá.</p>
                                                                            <p>Antes de trabajar en el Departamento de Justicia, Christine Brennan trabajó en un bufete de abogados internacional en Washington, D.C. y se graduó con honores en la Facultad de Derecho de la Universidad de Georgetown. Tuvo una carrera anterior como periodista en CNN, donde formó parte del equipo que lanzó CNN en Español y luego cubrió la Casa Blanca para CNN América.</p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile1" role="tabpanel" aria-labelledby="v-pills-profile-tab1">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                            </p>
                                                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/T8Nd0Qc09E4?start=1045" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                            <!--
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="T8Nd0Qc09E4?start=1046">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>-->
                                                                        </div>
                                                                    </div>
                                                                    <!--<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!----Dra. Leticia Rocha Licea - Sem---->
                                    <div class="card">
                                        <div class="card-header bg-gradiente-tres" id="heading3">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                    Dra. Leticia Rocha Licea
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#miercoles12">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_female.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab2" data-toggle="pill" data-target="#v-pills-home2" type="button" role="tab" aria-controls="v-pills-home2" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab2" data-toggle="pill" data-target="#v-pills-profile2" type="button" role="tab" aria-controls="v-pills-profile2" aria-selected="false">Ponencia</button>
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent2">
                                                                    <div class="tab-pane fade show active" id="v-pills-home2" role="tabpanel" aria-labelledby="v-pills-home-tab2">
                                                                        <p class="text-center font-primary-color">Magistrada Integrante de la 4a Sala Penal del Tribunal Superior de Justicia de la Ciudad de México</p>
                                                                        <div class="overflow-active text-justify">
                                                                            <p>Es Licenciada en Derecho, Especialista en Derecho Penal y Maestra en Derecho por la Universidad Nacional Autónoma de México. Magister en Argumentación Jurídica por las Universidades de Alicante España y Palermo Italia. Magister en Constitución y Derechos Humanos, por la Universidad de Barcelona España y Universidad Autónoma Metropolitana. Especialista en Psicología del Testimonio por la Universidad de Girona España. Especialista en Juicios Orales y Proceso Penal Acusatorio por el Instituto Nacional de Ciencias Penales. Doctoranda en Derecho en el Centro de Estudios Jurídicos Carbonell.</p>
                                                                            <p>También cuenta con distintas certificaciones por su participación en congresos y diplomados internacionales sobre justicia juvenil y Litigación Procesal Penal, en la Universidad de Ginebra Suiza, la Universidad Alberto Hurtado, en Santiago de Chile, la Universidad Diego Portales y el Centro de Justicia de las Américas (CEJA), en Santiago de Chile y como formador de formadores en Justicia Oral Penal en México, por la Agencia Española de Cooperación Internacional.</p>
                                                                            <p>Ha participado en cursos sobre convencionalidad, derechos humanos y la aplicación de tratados internacionales, por la Universidad Pampeu Fabra, Barcelona España y el Instituto de Estudios Judiciales del TSJCDMX, Jurisprudencia Constitucional Comparada sobre Derechos Humanos por la Universidad de Castilla La Mancha y Derecho Constitucional en el Instituto de la Judicatura Federal y el Centro de Estudios Constitucionales de la Suprema Corte de Justicia de la Nación. Cuenta con otros cursos y diplomados en el Sistema Integral de Justicia para Adolescentes, Sistema procesal penal acusatorio, Ejecución de penas, Derechos Humanos y Perspectiva de Género, Amparo, Control de convencionalidad, Argumentación Jurídica y Justicia Terapéutica.</p>
                                                                            <p>Entre su formación cuenta con los cursos de preparación para el cargo de Proyectista y Juez Penal en el Instituto de Estudios Judiciales del Tribunal Superior de Justicia de la Ciudad de México.</p>
                                                                            <p>En sus actividades docentes ha sido capacitadora en la Escuela Judicial Federal, impartiendo módulos en Justicia para Adolescentes, Teoría de la prueba y Simulación de audiencias. En el Instituto de Estudios Judiciales del TSJCDMX, impartiendo cursos para mediadores y jueces en materia de justicia para adolescentes. Actualmente es Docente en el Centro de Estudios Jurídicos Carbonell, en la maestría de Juicios Orales y Derecho Penal.</p>
                                                                            <p>En su trayectoria laboral en el TSJCDMX inició en el año de 1993, donde se ha desempeñado con cargos de Mecanógrafa, Supervisora de Teleinformática, Pasante de Derecho, Secretaria Proyectista de primera y segunda instancia. Fue de las primeras juzgadoras en el Sistema de Justicia para Adolescentes en el sistema oral en el TSJCDMX. Fungió como Magistrada por Ministerio de Ley en la Segunda Sala de Justicia para Adolescentes de la misma institución, así como Magistrada por Ministerio de Ley, en la Cuarta Sala Penal del TSJCDMX, en la que ahora es titular a partir de abril de 2021.</p>
                                                                            <p>Entre las publicaciones cuenta con el texto denominado “Justicia Penal para Adolescentes en el Distrito Federal”. (Normatividad Local e Internacional), Editorial Porrúa. Las medidas cautelares. Revista Derecho Penal Mínimo. El perfil del juez de adolescentes en el sistema procesal penal acusatorio. Editorial Radbruck. Coautora del Código Nacional de Procedimientos Penales Anotado, Editorial Radbruck.</p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile2" role="tabpanel" aria-labelledby="v-pills-profile-tab2">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                “La Inteligencia Artificial en las Decisiones Judiciales”
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="yNnAcTaBV4c"><div class="embed-youtube-play"></div></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Mtra. Liliana Oliva Bernal - Sem---->
                                    <div class="card">
                                        <div class="card-header" id="heading4">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center collapsed font-primary-color" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                    Mtra. Liliana Oliva Bernal
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#miercoles12">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_female.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab3" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab3" data-toggle="pill" data-target="#v-pills-home3" type="button" role="tab" aria-controls="v-pills-home3" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab3" data-toggle="pill" data-target="#v-pills-profile3" type="button" role="tab" aria-controls="v-pills-profile3" aria-selected="false">Ponencia</button>
                                                                    <button class="nav-link" id="v-pills-messages-tab3" data-toggle="pill" data-target="#v-pills-messages3" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Material</button>
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent3">
                                                                    <div class="tab-pane fade show active" id="v-pills-home3" role="tabpanel" aria-labelledby="v-pills-home-tab3">
                                                                        <p class="text-center font-primary-color">Directora de Litigios I, Consultoría Jurídica de la Secretaría de Relaciones Exteriores.</p>
                                                                        <div class="overflow-active text-justify">
                                                                            <p>Liliana Oliva Bernal es abogada por la Universidad Panamericana (Aguascalientes, México) y maestra en derecho internacional público por la London School of Economics and Political Science (Londres, Reino Unido). Es miembro de la rama diplomático consular del Servicio Exterior Mexicano.</p><br>
                                                                            <p>Cuenta con más de 15 años de experiencia en diversas disciplinas del derecho público, incluyendo derecho constitucional, derecho administrativo y derecho internacional, así como en relaciones internacionales.</p><br>
                                                                            <p>Actualmente es Directora de litigios I en la Consultoría Jurídica de la Secretaría de Relaciones Exteriores donde, entre otras cuestiones, tiene a su cargo la coordinación de la defensa de México y de las Representaciones de México en el Exterior en litigios ante tribunales extranjeros y la resolución de todo tipo de consultas en materia de privilegios e inmunidades.</p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile3" role="tabpanel" aria-labelledby="v-pills-profile-tab3">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                “Inmunidades en la Práctica Procesal Mexicana”
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="xdB25m23HXE">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-messages3" role="tabpanel" aria-labelledby="v-pills-profile-tab3">
                                                                        <div class="align-center">
                                                                            <!--<div class="main-red-button"><a href="./assets/mat_apoyo/Pres_LilianaOliva.pdf" target="_blank">Ver material</a></div>-->
                                                                            <embed src="./assets/mat_apoyo/Pres_LilianaOliva.pdf" type="application/pdf" width="90%" height="300px" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Dr. Oscar Gregorio Cervera Rivero - Sem ---->
                                    <div class="card">
                                        <div class="card-header bg-gradiente-tres" id="heading5">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                                    Dr. Oscar Gregorio Cervera Rivero
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#miercoles12">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_male.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab4" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab4" data-toggle="pill" data-target="#v-pills-home4" type="button" role="tab" aria-controls="v-pills-home4" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab4" data-toggle="pill" data-target="#v-pills-profile4" type="button" role="tab" aria-controls="v-pills-profile4" aria-selected="false">Ponencia</button>
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent4">
                                                                    <div class="tab-pane fade show active" id="v-pills-home4" role="tabpanel" aria-labelledby="v-pills-home-tab4">
                                                                        <p class="text-center font-primary-color">Magistrado Integrante de la 2a Sala Familiar del Tribunal Superior de Justicia de la Ciudad de México</p>
                                                                        <div class="overflow-active">
                                                                            <p>Fue abogado postulante durante veintidós años, es Magistrado de la Segunda Sala Familiar del Tribunal Superior de Justicia de la Ciudad de México, Juez de enlace Mexicano en materia de Restitución Internacional ante la Conferencia de la Haya en Derecho Internacional Privado; asimismo, es miembro de la Asociación Internacional de Jueces en materia de Familia, Coordinador Nacional e impulsor de la Red Mexicana de Cooperación Judicial para la protección de la niñez, fundada en el año dos mil diez; ha sido participante en diversas comisiones y delegaciones especializadas en asuntos de familia alrededor del mundo; integrante del Grupo de Trabajo para la elaboración de una Guía de Buenas Prácticas, del artículo 13, primer párrafo inciso B, de la Convención Sobre Aspectos Civiles de la Sustracción Internacional de Menores; ha realizado diferentes Conferencias a nivel Nacional e Internacional; es integrante de la Comisión de Ética del Poder Judicial de la Ciudad de México, Capacitador en el Consejo de la Judicatura Federal, en temas de la Convención de la Haya de 1980 sobre Aspectos Civiles de la Sustracción Internacional Menores, dirigido a Magistrados de Circuito y Jueces de Distrito por el período de 2017-2018; es doctor en derecho y candidato a doctor en Administración y Gobierno del Poder Judicial por el Instituto de Investigaciones Jurídicas de la UNAM e Instituto de Estudios Judiciales del Poder Judicial de la Ciudad de México; posee diversas obras en coautoría denominadas “practica forense en derecho familiar y procesos orales en materia familiar”, así como “los menores titulares de la acción”, “la restitución internacional de la niñez enfoque iberoamericano doctrinario jurisprudencial”, de la obra colectiva.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile4" role="tabpanel" aria-labelledby="v-pills-profile-tab4">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                “El Sentido de Urgencia Convencional”
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="7r8R2-9EYIA">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!----Mtra. Sandra Peña Soriano - Sem----->
                                    <div class="card">
                                        <div class="card-header" id="heading6">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center collapsed font-primary-color" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                                    Mtra. Sandra Peña Soriano
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#miercoles12">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_pon/SandraPeña.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab5" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab5" data-toggle="pill" data-target="#v-pills-home5" type="button" role="tab" aria-controls="v-pills-home5" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab5" data-toggle="pill" data-target="#v-pills-profile5" type="button" role="tab" aria-controls="v-pills-profile5" aria-selected="false">Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent5">
                                                                    <div class="tab-pane fade show active" id="v-pills-home5" role="tabpanel" aria-labelledby="v-pills-home-tab5">
                                                                        <p class="text-center font-primary-color">Directora de Asistencia Jurídica Internacional en la Dirección General de Procedimientos Internacionales de la Fiscalía General de la República.</p>
                                                                        <div class="overflow-active">
                                                                            <p>Licenciada en Derecho por la Universidad Autónoma del Estado de México, Maestra en Derecho Procesal Penal, con una especialidad en Juicios Orales y con 11 años de trayectoria como especialista en Cooperación Internacional en Materia Penal, actualmente como Directora de Asistencia Jurídica Internacional de la Fiscalía General de la República (FGR).</p>
                                                                            <p>Se ha desempeñado como Fiscal Federal y Subdirectora de Asistencias Jurídicas Formuladas por México, ha participado en la elaboración de protocolos de actuación de Asistencia Jurídica Internacional en Materia Penal; y en la elaboración de Programas de Lavado de Dinero e Investigaciones Financieras.</p>
                                                                            <p>Punto de Contacto de la FGR para la Red de Cooperación Penal Internacional (REDCOOP) de la Asociación Iberoamericana de Ministerios Públicos (AIAMP) y Punto de Contacto de la Dirección General de Procedimientos Internacionales ante el Grupo de Acción Financiera Internacional (GAFI).</p>
                                                                            <p>Como representante de México ha participado en el “Webinario. Remisión espontánea de información como herramienta de cooperación internacional"; en la “Reunión de expertos sobre la actualización de la Ley Modelo de la ONUDD para Asistencia Jurídica”, organizada por la Oficina de las Naciones Unidas contra la Droga y el Delito (ONUDD); asimismo, en el marco del proyecto “Financiamiento Sostenible”. Ha colaborado con expertos de recuperación de activos de la Oficina de las Naciones Unidas contra la Droga y el Delito (ONUDD), en el desarrollo de acciones para fortalecer a Fiscalías Estatales y Especializadas en Combate a la Corrupción de México, concretamente en recuperación y reintegración de activos producto de la corrupción.</p>
                                                                            <p>Ha intervenido en diversas Reuniones de Trabajo con los países de Francia y Estados Unidos de América, para la “Recuperación de Bienes Culturares de origen mexicano subastados en territorios extranjeros”, así como, en Talleres y Reuniones de Trabajo sobre “Mejores Prácticas para la elaboración de Solicitudes de Asistencia Jurídica Internacional”, “Obtención de Evidencia Electrónica” y “Obtención de Pruebas Electrónicas mediante Asistencia Jurídica Internacional en Delitos Cibernéticos” entre otras, con el Departamento de Justicia de los Estados Unidos de América.</p>
                                                                            <small class="font-primary-color">CORREO ELECTRÓNICO: Sandra.pena@fgr.org.mx</small>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile5" role="tabpanel" aria-labelledby="v-pills-profile-tab5">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                “Obtención de Evidencia Digital mediante Asistencia Jurídica Internacional”
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="P0XbM9ipuVM">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!----Dr. Manuel Ferreira - Sem--->
                                    <div class="card">
                                        <div class="card-header bg-gradiente-tres" id="heading7">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                                    Dr. Manuel Ferreira
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#miercoles12">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_pon/Ferreira.png" class="rounded tmb-p" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab6" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab6" data-toggle="pill" data-target="#v-pills-home6" type="button" role="tab" aria-controls="v-pills-home6" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab6" data-toggle="pill" data-target="#v-pills-profile6" type="button" role="tab" aria-controls="v-pills-profile6" aria-selected="false">Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent6">
                                                                    <div class="tab-pane fade show active" id="v-pills-home6" role="tabpanel" aria-labelledby="v-pills-home-tab6">
                                                                        <p class="text-center font-primary-color">Autoridad Central de Cooperación Jurídica Internacional, Ministerio de Educación y Cultura de Uruguay.</p>
                                                                        <div class="overflow-active text-justify">
                                                                            <ol style="list-style: disc;">
                                                                                <li>- Dr. en Derecho y Ciencias Sociales - Facultad de Derecho, Universidad de la República (UdelaR)</li>
                                                                                <li>- Asesor Legal de la Autoridad Central de Cooperación judicial internacional del Uruguay. (Ministerio de Educación y Cultura)</li>
                                                                                <li>- Delegado uruguayo por la Autoridad Central del Uruguay ante OEA, MERCOSUR, La Conferencia de La Haya de Derecho Internacional Privado y la Red Iberoamericana de Cooperación Jurídica (IBERRED).</li>
                                                                                <li>- Docente universitario de Derecho Internacional Privado en cursos de grado en la Universidad de la República (UdelaR).</li>
                                                                                <li>- Miembro del Instituto Uruguayo de Derecho Internacional Privado e Integrante del Grupo de Jurisprudencia del mismo.</li>
                                                                            </ol>
                                                                            <small class="font-primary-color">CONTACTO: Teléfono: (+598) 098 888 296 || Email: manuelferreiracatoira@gmail.com</small>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile6" role="tabpanel" aria-labelledby="v-pills-profile-tab6">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "El uso de las Nuevas Tecnologías en la Cooperación Civil Internacional desde la perspectiva Uruguaya"
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="vIy-v6mNZ84">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!------Mtra. Claudia Elena De Buen Unna - Sem----->
                                    <div class="card">
                                        <div class="card-header" id="heading8">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center collapsed font-primary-color" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                                    Mtra. Claudia Elena De Buen Unna
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#miercoles12">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_pon/BuenUnna.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab7" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab7" data-toggle="pill" data-target="#v-pills-home7" type="button" role="tab" aria-controls="v-pills-home7" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab7" data-toggle="pill" data-target="#v-pills-profile7" type="button" role="tab" aria-controls="v-pills-profile7" aria-selected="false">Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent7">
                                                                    <div class="tab-pane fade show active" id="v-pills-home7" role="tabpanel" aria-labelledby="v-pills-home-tab7">
                                                                        <p class="text-center font-primary-color">Barra Mexicana del Colegio de Abogados.</p>
                                                                        <div class="overflow-active text-justify">
                                                                            <div>
                                                                                <strong>FORMACIÓN ACADÉMICA</strong><br>
                                                                                <ul style="list-style: square!important;">
                                                                                    <li>Licenciada en Derecho por la Universidad Autónoma Metropolitana (UAM).</li>
                                                                                    <li>Maestra en Derecho Familiar por el Instituto de Ciencias Jurídicas de Estudios Superiores.</li>
                                                                                    <li>Cursó tres especialidades en la Universidad Panamericana: Amparo, Derecho Financiero y Comercio Internacional, y Derecho Mercantil.</li>
                                                                                    <li>Diplomado en materia de juicios orales familiares.</li>
                                                                                    <li>Diplomado en Mediación.</li>
                                                                                    <li>Diplomado en Abogacía colaborativa.</li>
                                                                                </ul>
                                                                                <strong>FORMACIÓN PROFESIONAL</strong><br>
                                                                                <ul>
                                                                                    <li>Socia de BUFETE DE BUEN, S.C. y litigante en materia civil, familiar y mercantil (Desde 1978 a la fecha).
                                                                                    </li>
                                                                                    <li>Abogada General de la Universidad Autónoma Metropolitana (De 2007 a 2010).
                                                                                    </li>
                                                                                    <li>Ha sido profesora de Derecho Civil y Familiar en la Universidad Nacional Autónoma de México.</li>
                                                                                    <li>Mediadora privada No. 427, certificada por el Centro de Justicia Alternativa del Tribunal Superior de Justicia de la Ciudad de México.</li>
                                                                                </ul>
                                                                                <strong>COLEGIACIÓN Y ASOCIACIONES PROFESIONALES</strong><br>
                                                                                <ul>
                                                                                    <li>Presidenta de la Barra Mexicana, Colegio de Abogados, A.C.</li>
                                                                                    <li>Miembro de la Asociación Nacional de Abogados.</li>
                                                                                    <li>Miembro del Ilustre y Nacional Colegio de Abogados.</li>
                                                                                    <li>Asociada de la Union Internationale des Avocats.</li>
                                                                                    <li>Miembro de número de la Academia Mexicana de Jurisprudencia y Legislación.</li>
                                                                                    <li>Miembro de la Asociación Mexicana de Derecho Uniforme.</li>
                                                                                    <li>Miembro del International Women’s Forum</li>
                                                                                    <li>Miembro del colectivo femenino 50 +1</li>
                                                                                    <li>Miembro de la National Conference of Commissioners on Uniform State Laws.</li>
                                                                                    <li>Miembro de número de la Legión de Honor Mexicana.</li>
                                                                                    <li>Miembro del Consejo Asesor Jurídico de la Academia Mexicana de la Comunicación.</li>
                                                                                    <li>Consejera de Tojil, A.C.</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="container_arrow">
                                                                                <div class="chevron"></div>
                                                                                <div class="chevron"></div>
                                                                                <div class="chevron"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile7" role="tabpanel" aria-labelledby="v-pills-profile-tab7">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "Transformación del Litigio en la Era Digital: El Futuro de la Abogacía"
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="Yh64AkAtZpw">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Dr. Paul Martín Barba - Sem--->
                                    <div class="card">
                                        <div class="card-header bg-gradiente-tres" id="heading9">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                                    Dr. Paul Martín Barba
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#miercoles12">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_male.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab8" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab8" data-toggle="pill" data-target="#v-pills-home8" type="button" role="tab" aria-controls="v-pills-home8" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab8" data-toggle="pill" data-target="#v-pills-profile8" type="button" role="tab" aria-controls="v-pills-profile8" aria-selected="false">Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent8">
                                                                    <div class="tab-pane fade show active" id="v-pills-home8" role="tabpanel" aria-labelledby="v-pills-home-tab8">
                                                                        <p class="text-center font-primary-color">Magistrado por Ministerio de Ley Integrante de la 1a Sala Especializada en Ejecución de Sanciones Penales del Poder Judicial de la Ciudad de México.</p>
                                                                        <div class="overflow-active text-justify">
                                                                            <p><strong>Lugar y día de nacimiento:</strong> Ciudad de México, 1 de enero de 1974.</p>
                                                                            <p><strong>Institución de egreso:</strong> Facultad de Derecho, Universidad La Salle (1997).</p>
                                                                            <p><strong>Cédula profesional:</strong> 2803703</p>
                                                                            <p><strong>Trayectoria en el Tribunal Superior de Justicia de la Ciudad de México:</strong> Secretario Proyectista, Octava Sala Penal (2001-2004); Secretario Particular del Presidente del Tribunal (2004-2006); Juez de lo Penal (2006 a 2014; Juzgados Cuadragésimo Primero, Quincuagésimo Tercero y Cuadragésimo Cuarto). Juez Décimo Cuarto del Sistema Penal Acusatorio, con carácter bifuncional (enero de 2015 a junio de 2016); Juez de Tribunal de Enjuiciamiento (junio de 2016 a julio de 2021). Magistrado por Ministerio de Ley, Primera Sala Especializada en Ejecución de Sanciones Penales.</p>
                                                                            <p><strong>Experiencia Laboral:</strong> Secretario en la Procuraduría General de la República (1993-1995); abogado en Banco Nacional de México (1995-1998); Subdirector y agente del Ministerio Público Supervisor de Procesos en la Procuraduría General de Justicia del Distrito Federal (1998-2001).</p>
                                                                            <p><strong>Experiencia académica:</strong> Catedrático en el IEJ (2005 a la fecha); en la Universidad La Salle, Facultad de Derecho y Posgrado, en las materias Derecho Penal I y II, Derecho Penal y Procesal Penal Constitucional (2008 a 2018) y en la Facultad de Ciencias Forenses de la UNAM (2016 a 2019).</p>
                                                                            <p><strong>Obra editorial:</strong> Libro: La Responsabilidad Penal de las Personas Morales en México (Porrúa, 2015). Revistas: Derecho Penal Económico. La responsabilidad penal de las personas morales. Un análisis a la luz de los derechos humanos. Culpabilidad por defecto de la organización. Un modelo en materia de responsabilidad penal de las personas morales. La Política Criminal en materia de delincuencia de la empresa, Los Principios contenidos en el Código Nacional de Procedimientos Penales. Un enfoque desde la perspectiva jurisdiccional de tutela de Derechos Humanos, Límites y Alcances del Principio de Presunción de Inocencia, entre otros.</p>
                                                                            <p><strong>Capacitaciones:</strong> Diversos Cursos, Foros, Talleres y Seminarios en las materias de Sistema Penal Acusatorio, Derechos Humanos y Control de Convencionalidad, incluyendo los organizados por el Departamento de Estado de los Estados Unidos de América a través de la OPDAT, en San Juan de Puerto Rico (módulos básico, avanzado, en materia de evidencia digital y en redacción de sentencias); CEJA, en Santiago de Chile, en materia de dirección de audiencias; Diplomado en Introducción a la Función Jurisdiccional, Instituto de la Judicatura Federal (2007); Diplomado en Argumentación Jurídica en Derechos Humanos, FLACSO (2010); Diplomado en Juicios Orales, INACIPE (2016); Curso de Introducción en Estándares de Aplicación de Instrumentos Internacionales en Materia de Derechos Humanos, Fundación Konrad Adenauer (2011); Curso de Control de Convencionalidad, AMIJ (2013).</p>
                                                                            <p>Grado de Maestro en Derecho con Orientación Penal, División de Estudios de Posgrado de la Facultad de Derecho de la UNAM (2005), con mención honorífica.</p>
                                                                            <p>Grado de Doctor en Ciencias Penales y Política Criminal, INACIPE (2014), con mención honorífica.</p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile8" role="tabpanel" aria-labelledby="v-pills-profile-tab8">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "Asistencia en Materia Penal a la Luz del Régimen Interamericano"
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="BSLDRLhedgk">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Lic. Janet Melissa Monzalvo Vázquez - Sem--->
                                    <div class="card">
                                        <div class="card-header" id="heading10">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center collapsed font-primary-color" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                                    Lic. Janet Melissa Monzalvo Vázquez
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#miercoles12">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_pon/JanetMonzalvo.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab9" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab9" data-toggle="pill" data-target="#v-pills-home9" type="button" role="tab" aria-controls="v-pills-home9" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab9" data-toggle="pill" data-target="#v-pills-profile9" type="button" role="tab" aria-controls="v-pills-profile9" aria-selected="false">Ver Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent9">
                                                                    <div class="tab-pane fade show active" id="v-pills-home9" role="tabpanel" aria-labelledby="v-pills-home-tab9">
                                                                        <p class="text-center font-primary-color">Subdirectora de Nacionalidad, Dirección General de Asuntos Jurídicos de la Secretaría de Relaciones Exteriores.</p>
                                                                        <div class="overflow-active">
                                                                            <p>Lic. en Derecho por el Instituto de Posgrado en Derecho.</p>
                                                                            <p>Cuenta con 3 años de experiencia en la Administración Pública Federal, desarrollándose en temas relacionados con la Nacionalidad. Actualmente, se desempeña como Subdirectora de Nacionalidad, adscrita a la Dirección General de Asuntos Jurídicos de la Secretaría de Relaciones Exteriores.</p>
                                                                            <p>Anteriormente, ejerció como Abogada litigante en diversas áreas del Derecho en diferentes despachos.</p>
                                                                        </div>
                                                                        <!--<div class="container_arrow">
                                                                          <div class="chevron"></div>
                                                                          <div class="chevron"></div>
                                                                          <div class="chevron"></div>
                                                                        </div>-->
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile9" role="tabpanel" aria-labelledby="v-pills-profile-tab9">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "Reforma Constitucional en Materia de Nacionalidad"
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="Swdieo5BRSs">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Prof. Pablo Pruneda Gross - Sem--->
                                    <div class="card">
                                        <div class="card-header bg-gradiente-tres" id="heading11">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                                    Prof. Pablo Pruneda Gross
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#miercoles12">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_male.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab10" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab10" data-toggle="pill" data-target="#v-pills-home10" type="button" role="tab" aria-controls="v-pills-home10" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab10" data-toggle="pill" data-target="#v-pills-profile10" type="button" role="tab" aria-controls="v-pills-profile10" aria-selected="false">Ver Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent10">
                                                                    <div class="tab-pane fade show active" id="v-pills-home10" role="tabpanel" aria-labelledby="v-pills-home-tab10">
                                                                        <p class="text-center font-primary-color">Instituto de Investigaciones Jurídicas de la Universidad Nacional Autónoma de México.</p>
                                                                        <div class="overflow-active text-justify">
                                                                            <p>Cursó la licenciatura en la Facultad de Derecho de la Universidad Nacional Autónoma de México, donde ha sido profesor de derecho civil desde 1999 y, desde 2012, maestro por oposición de la materia de sucesiones.</p>
                                                                            <p>Estudió dos Cursos de Posgrado en la Universidad de Salamanca, España, siendo el último sobre “Inteligencia Artificial y Derecho” y acreditó el curso impartido por la UNESCO sobre “La IA y el Estado de Derecho”.</p>
                                                                            <p>Fue recipendario de la Cátedra extraordinaria “Francisco M. Vázquez” y de la Cátedra especial “Gabino Fraga”, ambas otorgadas por el H. Consejo Técnico de la Facultad de Derecho de la UNAM.</p>
                                                                            <p>Desde 2016 y hasta hace unos meses, tuvo el honor de ser Consejero Universitario representante de los profesores de la Facultad de Derecho de la UNAM.</p>
                                                                            <p>Desde 2020 y a la fecha, fue designado Coordinador de la línea de Investigación de Derecho e Inteligencia Artificial (LIDIA) del Instituto de Investigaciones Jurídicas de la UNAM, desde la cual ha organizado y participado en más de 32 conferencias, cursos, foros y seminarios relacionados con la Inteligencia Artificial desde diversas perspectivas y problemáticas jurídicas, así como participado en diversas publicaciones sobre la materia.</p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile10" role="tabpanel" aria-labelledby="v-pills-profile-tab10">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "Mecanismos de Inteligencia Artificial en la Evaluación de Riesgo de Reos"
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="XBY-Yp7L1zs">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Lic. Enrique Gil Botero - --->
                                    <div class="card">
                                        <div class="card-header" id="headingBis">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapseBis" aria-expanded="false" aria-controls="collapseBis">
                                                    Lic. Enrique Gil Botero
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseBis" class="collapse" aria-labelledby="headingBis" data-parent="#miercoles12">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_male.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tabBis" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tabBis" data-toggle="pill" data-target="#v-pills-homeBis" type="button" role="tab" aria-controls="v-pills-homeBis" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tabBis" data-toggle="pill" data-target="#v-pills-profileBis" type="button" role="tab" aria-controls="v-pills-profileBis" aria-selected="false">Ver Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContentBis">
                                                                    <div class="tab-pane fade show active" id="v-pills-homeBis" role="tabpanel" aria-labelledby="v-pills-home-tabBis">
                                                                        <p class="text-center font-primary-color"></p>
                                                                        <div class="overflow-active text-justify">
                                                                            <p></p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profileBis" role="tabpanel" aria-labelledby="v-pills-profile-tabBis">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "Mecanismos de Inteligencia Artificial en la Evaluación de Riesgo de Reos"
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="dkN05BTmnVw">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="accordion" id="jueves13">
                                    <!---Lic. Maxwel Aurora Flores Rico - Sem --->
                                    <div class="card">
                                        <div class="card-header bg-gradiente-tres" id="heading12">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="true" aria-controls="collapse12">
                                                    Lic. Maxwel Aurora Flores Rico
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse12" class="collapse show" aria-labelledby="heading12" data-parent="#jueves13">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_female.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab12" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab12" data-toggle="pill" data-target="#v-pills-home12" type="button" role="tab" aria-controls="v-pills-home12" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab12" data-toggle="pill" data-target="#v-pills-profile12" type="button" role="tab" aria-controls="v-pills-profile12" aria-selected="false">Ver Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent12">
                                                                    <div class="tab-pane fade show active" id="v-pills-home12" role="tabpanel" aria-labelledby="v-pills-home-tab12">
                                                                        <p class="text-center font-primary-color">Subdirectora de Pensiones Alimenticias y Adopciones Internacionales, Dirección General de Protección Consular y Planeación Estratégica de la Secretaría de Relaciones Exteriores.</p>
                                                                        <div class="overflow-active">
                                                                            <p>Es Licenciada en Derecho por la Universidad Nacional Autónoma de México, en donde igualmente cursó un Diplomado en Derecho Corporativo.</p>
                                                                            <p>Su experiencia laboral inició en la Secretaría de Relaciones Exteriores, en donde actualmente se desempeña como Subdirectora de Pensiones Alimenticias y Adopciones Internacionales en la Coordinación de Derecho de Familia de la Dirección General de Protección Consular y Planeación Estratégica, instrumentando compromisos internacionales en materia de alimentos y adopciones firmados por el gobierno mexicano.</p>
                                                                            <p>Destaca en su ejercicio profesional haber sido Subdirectora de Capacitación en la División Científica de la Policía Federal. De igual forma, se desempeñó como Subgerente en el Área de Responsabilidades y Quejas ante el Órgano Interno de Control en la Lotería Nacional para la Asistencia Pública y colaboró como asesora en la Asamblea Legislativa del Distrito Federal durante la V Legislatura.</p>
                                                                            <p>Cuenta con estudios de Derecho Internacional Privado en la Academia de La Haya, Países Bajos. Participó como integrante de la Delegación mexicana en dos reuniones de la Conferencia de La Haya sobre Derecho Internacional Privado para el estudio de un Proyecto de Convención sobre Recuperación del Apoyo Infantil y otras Formas de Manutención Familiar; así como en la Reunión de las Américas: Ejecución Internacional de Pensiones Alimenticias para Menores, en Orlando, Florida.</p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile12" role="tabpanel" aria-labelledby="v-pills-profile-tab12">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "Experiencia de la Secretaría de Relaciones Exteriores en el Trámite de Pensiones Alimenticias y Adopciones Internacionales, durante y posterior a la Pandemia".
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="ciSeaaBa7QU">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---EPPGG Arnaldo José Alves Silveira - Sem --->
                                    <div class="card">
                                        <div class="card-header" id="heading13">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                                    EPPGG Arnaldo José Alves Silveira
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#jueves13">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_pon/ArnaldoSilveira.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab13" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab13" data-toggle="pill" data-target="#v-pills-home13" type="button" role="tab" aria-controls="v-pills-home13" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab13" data-toggle="pill" data-target="#v-pills-profile13" type="button" role="tab" aria-controls="v-pills-profile13" aria-selected="false">Ver Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent13">
                                                                    <div class="tab-pane fade show active" id="v-pills-home13" role="tabpanel" aria-labelledby="v-pills-home-tab13">
                                                                        <p class="text-center font-primary-color">Coordinador General de Cooperación Jurídica Internacional en Materia Civil del Departamento de Recuperación de Activos y Cooperación Jurídica Internacional (DRCI) del Ministerio de Justicia y Seguridad Pública, Autoridad Central de Brasil.</p>
                                                                        <div class="overflow-active text-justify">
                                                                            <p>Arnaldo Silveira es Coordinador-General de Cooperación Jurídica Internacional em Materia Civil del Departamento de Recuperación de Activos y Cooperación Jurídica Internacional (DRCI) del Ministerio de Justicia y Seguridad Pública, la Autoridad Central de Brasil.</p>
                                                                            <p>Funcionario público federal, Especialista en Políticas Públicas y Gestión Gubernamental, licenciado en Derecho por la AEUDF (Brasília) y Especialista em Relaciones Internacionales por la UnB (Brasília). Cursó el Minerva Program en la George Washington University y su Programa Adicional.</p>
                                                                            <p>Trabajó en el área de comercio exterior por 14 años y después en la Unidad de Inteligencia Financiera.</p>
                                                                            <p>Trabajando en la Autoridad Central desde el 2004, ejerció diversas funciones, como Asesor de Tratados y Foros y Director-Adjunto. Silveira es miembro de diversos Grupos de Trabajo de la Conferência de La Haya, y Co-Chair de uno de ellos, así como Punto de Contacto para redes de cooperación. Actuó como avaliador por WGB/OCDE, GAFI, GAFILAT y UNODC, participó de negociaciones de tratados bilaterales y multilaterales y participó en actividades del G20, OEA, MERCOSUR, CPLP, Egmont Group y COMJIB.</p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile13" role="tabpanel" aria-labelledby="v-pills-profile-tab13">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "Tramitación Electrónica de las Solicitudes de Cooperación"
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="24TMNdeSToM">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Mtra. Azucena Fabiola Hernández Palacios - Sem -  Foto?--->
                                    <div class="card">
                                        <div class="card-header bg-gradiente-tres" id="heading14">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                                    Mtra. Azucena Fabiola Hernández Palacios
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#jueves13">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_female.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab14" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab14" data-toggle="pill" data-target="#v-pills-home14" type="button" role="tab" aria-controls="v-pills-home14" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab14" data-toggle="pill" data-target="#v-pills-profile14" type="button" role="tab" aria-controls="v-pills-profile14" aria-selected="false">Ver Ponencia</button>
                                                                    <button class="nav-link" id="v-pills-mat-tab14" data-toggle="pill" data-target="#v-pills-mat14" type="button" role="tab" aria-controls="v-pills-mat14" aria-selected="false">Material</button>
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent14">
                                                                    <div class="tab-pane fade show active" id="v-pills-home14" role="tabpanel" aria-labelledby="v-pills-home-tab14">
                                                                        <p class="text-center font-primary-color">Agente del Ministerio Público de la Federación, Encargada del Despacho de la Subdirección de Ejecución de Tratados y Convenios Internacionales de la Dirección General de Procedimientos Internacionales de la Fiscalía General de la República.</p>
                                                                        <div class="overflow-active text-justify">
                                                                            <p>Azucena Fabiola Hernández Palacios, es maestra en Derecho Procesal Penal y cuenta con especialidad en Juicios Orales, ha sido servidora pública en el ámbito de procuración de justicia por más de 18 años, siempre enfocada en el ámbito de cooperación internacional en materia penal, se ha desempeñado como Agente del Ministerio Público de la Federación, Directora de Área, Subdirectora de Asistencia Jurídica y Jefe de Departamento en la Dirección de Extradiciones de la entonces Procuraduría General de la República.</p>
                                                                            <p>Actualmente se encarga del Despacho de la Subdirección de Ejecución de Tratados y Convenios Internacionales de la Dirección General de Procedimientos Internacionales de la Fiscalía General de la República.</p>
                                                                            <p>Durante su trayectoria ha participado como expositora en reuniones y talleres a nivel nacional e internacional en temas de extradición y asistencia jurídica, en este momento se ocupa de la integración y seguimiento a los procedimientos de traslado internacional de sentenciados, coordina la operatividad y entrega formal de internos que se autorizan en traslado, solicita ante autoridad jurisdiccional la anuencia de transferencia internacional, brinda respuesta a requerimientos de autoridad jurisdiccional una vez que un sentenciado ha sido trasladado para que continúe con el cumplimiento de sentencia en su país de origen.</p>
                                                                            <p>Ha coordinado y realizado traslados internacionales con países como Belice, Canadá, Ecuador, España, Estados Unidos de América, El Salvador, Guatemala, Japón, Nicaragua, Panamá, Reino Unido de Gran Bretaña e Irlanda del Norte y Rusia.</p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                          <div class="chevron"></div>
                                                                          <div class="chevron"></div>
                                                                          <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile14" role="tabpanel" aria-labelledby="v-pills-profile-tab14">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "Traslado Internacional de Sentenciados conforme a la Legislación Mexicana"
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="A3vHxE2j1s8">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-mat14" role="tabpanel" aria-labelledby="v-pills-mat-tab14">
                                                                        <div class="align-center">
                                                                            <embed src="./assets/mat_apoyo/Pres_AzucenaFabiola.pdf" type="application/pdf" width="100%" height="400px" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Dr. Rogelio Rodríguez Garduño--->
                                    <div class="card">
                                        <div class="card-header" id="heading15">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                                    Dr. Rogelio Rodríguez Garduño
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#jueves13">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_male.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab15" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab15" data-toggle="pill" data-target="#v-pills-home15" type="button" role="tab" aria-controls="v-pills-home15" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab15" data-toggle="pill" data-target="#v-pills-profile15" type="button" role="tab" aria-controls="v-pills-profile15" aria-selected="false">Ver Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent15">
                                                                    <div class="tab-pane fade show active" id="v-pills-home15" role="tabpanel" aria-labelledby="v-pills-home-tab15">
                                                                        <p class="text-center font-primary-color">Universidad Nacional Autónoma de México.</p>
                                                                        <div class="overflow-active text-justify">
                                                                            <p>Rogelio Rodríguez Garduño, es Licenciado en Derecho con mención honorifica y acreedor a la medalla “Gabino Barreda” por la Universidad Nacional Autónoma de México (10:00 de promedio); cuenta con Maestrías por la Universidad Panamericana, en Derecho Procesal Constitucional y en Ciencias Jurídicas, es Doctor en Derecho por la misma institución.</p>
                                                                            <p>Tiene Especialidad en Administración de Empresas de Servicios por el Instituto Tecnológico Autónomo de México y obtuvo un certificado por la International Air Association en Ginebra Suiza, ha realizado diversos estudios de posgrado en México y en diferentes partes del mundo como Florida, USA; Montreal, Canadá; Buenos Aires, Argentina, entre otros países.</p>
                                                                            <p>Actualmente se desempeña como profesor de Tiempo Completo “C” en la Facultad de Derecho de la Universidad Nacional Autónoma de México.</p>
                                                                            <p>El tutor principal en los programas de investigación doctoral en la División de Estudios de Posgrado de Facultad de Derecho de la Universidad Nacional Autónoma de México y miembro titular del Jurado para los aspirantes al ingreso en el programa de Doctorado en Derecho, de la propia universidad.</p>
                                                                            <p>En la producción escrita académica es coautor de la obra “La ineficiencia normativa de las acciones de inconstitucionalidad como mecanismos de control de la constitucionalidad de los tratados internacionales”, publicado por Porrúa en el año de 2011 y también coautor de obra “Epistemología Jurídica”, de la editorial Tiran lo blanch, 2020.</p>
                                                                            <p>En el año 2021 recibió la “Medalla al Mérito Docente, Profesor José Santos Valdez”, en la modalidad de educación de posgrado, por parte del Congreso de la Ciudad de México.</p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                          <div class="chevron"></div>
                                                                          <div class="chevron"></div>
                                                                          <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile15" role="tabpanel" aria-labelledby="v-pills-profile-tab15">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "Control de Constitucionalidad y Convencionalidad, en el Debate en México de la Prisión Preventiva Oficiosa"
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="HM0T7AZvsuk">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Lic. Christianne Guadalupe Pérez Rivera - Sem --->
                                    <div class="card">
                                        <div class="card-header bg-gradiente-tres" id="heading16">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                                    Lic. Christianne Guadalupe Pérez Rivera
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#jueves13">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_pon/ChristiannePerez.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab16" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab16" data-toggle="pill" data-target="#v-pills-home16" type="button" role="tab" aria-controls="v-pills-home16" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab16" data-toggle="pill" data-target="#v-pills-profile16" type="button" role="tab" aria-controls="v-pills-profile16" aria-selected="false">Ver Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                    <button class="nav-link" id="v-pills-mat-tab16" data-toggle="pill" data-target="#v-pills-mat16" type="button" role="tab" aria-controls="v-pills-mat16" aria-selected="false">Material</button>
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent16">
                                                                    <div class="tab-pane fade show active" id="v-pills-home16" role="tabpanel" aria-labelledby="v-pills-home-tab16">
                                                                        <p class="text-center font-primary-color">Subdirectora de Naturalización, Dirección General de Asuntos Jurídicos de la Secretaría de Relaciones Exteriores.</p>
                                                                        <div class="overflow-active text-justify">
                                                                            <p>Licenciada en derecho egresada de la Universidad del Valle de México, Campus Lomas Verdes, pertenece al equipo de la Dirección General de Asuntos Jurídicos desde el año 2004 y desde el año 2009 funge como Subdirectora de Naturalización en la misma Unidad Administrativa, en la que ha contribuido y participado en los trabajos de actualización y análisis de la normatividad aplicable a los procedimientos en materia de nacionalidad y naturalización, así como también, ha participado en talleres y capacitaciones que la Dirección General de Asuntos Jurídicos ha impartido en materia de nacionalidad y naturalización a las distintas autoridades que intervienen en el procedimiento de naturalización y a organizaciones civiles de ayuda a personas en condición de refugiados y personas de protección complementaria.</p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile16" role="tabpanel" aria-labelledby="v-pills-profile-tab16">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "Antecedentes y Perspectivas del Procedimiento de Naturalización en México"
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="4YE8lz4cPQ4">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-mat16" role="tabpanel" aria-labelledby="v-pills-mat-tab16">
                                                                        <div class="align-center">
                                                                            <embed src="./assets/mat_apoyo/Mat_Christianne.pdf" type="application/pdf" width="100%" height="400px" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Mtro. Jorge Roberto Ordóñez Escobar - Sem - Foto?--->
                                    <div class="card">
                                        <div class="card-header" id="heading17">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                                    Mtro. Jorge Roberto Ordóñez Escobar
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#jueves13">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_male.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab17" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab17" data-toggle="pill" data-target="#v-pills-home17" type="button" role="tab" aria-controls="v-pills-home17" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab17" data-toggle="pill" data-target="#v-pills-profile17" type="button" role="tab" aria-controls="v-pills-profile17" aria-selected="false">Ver Ponencia</button>
                                                                    <button class="nav-link" id="v-pills-mat-tab17" data-toggle="pill" data-target="#v-pills-mat17" type="button" role="tab" aria-controls="v-pills-mat17" aria-selected="false">Material</button>
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent17">
                                                                    <div class="tab-pane fade show active" id="v-pills-home17" role="tabpanel" aria-labelledby="v-pills-home-tab17">
                                                                        <p class="text-center font-primary-color">Consultor en Litigio Constitucional y Asuntos Públicos.</p>
                                                                        <div class="overflow-active text-justify">
                                                                            <p>Es licenciado en derecho por la Universidad Nacional Autónoma de México, en donde también realizó los estudios del doctorado en derecho (inconclusos). Es Especialista Universitario en Argumentación Jurídica por la Universidad de Alicante y en Constitucionalismo del Estado Social por la Universidad de Castilla-La Mancha, España. Asimismo, ha realizado estancias de investigación en el Centro de Estudios sobre el Riesgo de la Universidad del Salento, Italia; un curso sobre interpretación conforme en la Universidad Pompeu Fabra de Barcelona y uno sobre justicia para adolescentes en el ministerio de justicia de Canadá.</p>
                                                                            <p>Actividades Laborales: Fue postulante en materia laboral y ocupó diversos cargos en la administración pública hasta 1999, año en que ingresó al Poder Judicial de la Federación como Asesor en la presidencia de la Suprema Corte de Justicia de la Nación. Posteriormente, ocupó el cargo de Secretario Privado, Adjunto, y Secretario de Estudio y Cuenta en la Primera Sala, adscrito a la ponencia de la ministra Olga Sánchez Cordero, hasta noviembre de 2015; mismo cargo que ocupó, desde diciembre de ese mismo año y hasta agosto de 2017, adscrito a la Segunda Sala en la ponencia del Ministro Javier Laynez Potisek. Fue, desde entonces y hasta junio de 2018, Coordinador de Asesores del Comisionado Ejecutivo de Atención a Víctimas, fue Titular de la Unidad General de Asuntos Jurídicos de la Secretaría de Gobernación del 1 de diciembre de 2018 hasta el día 30 de septiembre de 2020 el 01 de octubre de 2020 asumió el cargo de Jefe de Oficina de la Secretaria de Gobernación, cargo que desempeñó hasta el 31 de agosto de 2021. Del 1 de septiembre de 2021 al 28 de febrero de 2022, fue Coordinador de Asesores del Órgano de Gobierno del Senado de la República. Actualmente es consultor independiente.</p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                          <div class="chevron"></div>
                                                                          <div class="chevron"></div>
                                                                          <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile17" role="tabpanel" aria-labelledby="v-pills-profile-tab17">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "Legitimación para Solicitar la Restitución Internacional de Menores"
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="9hGj_QiX-kA">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-mat17" role="tabpanel" aria-labelledby="v-pills-mat-tab17">
                                                                        <div class="align-center">
                                                                            <embed src="./assets/mat_apoyo/Pres_JorgeOrdonez.pdf" type="application/pdf" width="100%" height="400px" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Lic. Claudia Sierra Martínez - Sem --->
                                    <div class="card">
                                        <div class="card-header bg-gradiente-tres" id="heading18">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                                    Lic. Claudia Sierra Martínez
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#jueves13">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_female.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab18" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab18" data-toggle="pill" data-target="#v-pills-home18" type="button" role="tab" aria-controls="v-pills-home18" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab18" data-toggle="pill" data-target="#v-pills-profile18" type="button" role="tab" aria-controls="v-pills-profile18" aria-selected="false">Ver Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent18">
                                                                    <div class="tab-pane fade show active" id="v-pills-home18" role="tabpanel" aria-labelledby="v-pills-home-tab18">
                                                                        <p class="text-center font-primary-color">Subdirectora de Restitución y Custodia Internacional de Menores, Dirección General de Protección Consular y Planeación Estratégica de la Secretaría de Relaciones Exteriores.</p>
                                                                        <div class="overflow-active text-justify">
                                                                            <p>Licenciada en Derecho por la Universidad Nacional Autónoma de México con una especialidad en Derecho Administrativo y un Diplomado en Mediación Familiar por el Instituto de Investigaciones Jurídicas de la UNAM, cuenta con un reconocimiento por la Conferencia de La Haya de Derecho Internacional de Privado por su participación en el Taller relativo al Convenio sobre Notificación o Traslado en el Extranjero de Documentos Judiciales y Extrajudiciales en Materia Civil o Comercial, ha participado como ponente en las Reuniones de la Red Mexicana de Cooperación Judicial para la Protección de la Niñez, escuelas judiciales estatales, así como en las jornadas de actualización en materia civil y administrativa en el Consejo de la Judicatura Federal. Se ha desempeñado como Abogada Dictaminadora en la Dirección de Nacionalidad y Naturalización de la Dirección General de Asuntos Jurídicos y Jefa del Departamento de Recuperación de Alimentos en el Extranjero ambas en la Secretaría de Relaciones Exteriores. En este momento funge como Subdirectora de Restitución y Custodia Internacional de Menores en la Dirección General Adjunta de Derecho de Familia, Oficina designada como Autoridad Central para las Convenciones en materia de Sustracción Internacional de Menores así como encargada de los casos de reunificación familiar Estados Unidos-México.</p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile18" role="tabpanel" aria-labelledby="v-pills-profile-tab18">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "Funciones de la Autoridad Central Mexicana en los Casos de Sustracción Internacional de Niñas, Niños y Adolescentes."
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="3TScQsZUcF0">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Mtra. Jimena Moreno González - Sem --->
                                    <div class="card">
                                        <div class="card-header" id="heading19">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                                    Mtra. Jimena Moreno González
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#jueves13">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_female.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab19" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab19" data-toggle="pill" data-target="#v-pills-home19" type="button" role="tab" aria-controls="v-pills-home19" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab19" data-toggle="pill" data-target="#v-pills-profile19" type="button" role="tab" aria-controls="v-pills-profile19" aria-selected="false">Ver Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent19">
                                                                    <div class="tab-pane fade show active" id="v-pills-home19" role="tabpanel" aria-labelledby="v-pills-home-tab19">
                                                                        <p class="text-center font-primary-color">División de Estudios Jurídicos del Centro de Investigación y Docencia Económicas, CIDE.</p>
                                                                        <div class="overflow-active text-justify">
                                                                            <p>Abogada por la Universidad Nacional Autónoma de México. Maestra en Dirección Internacional por el Instituto Tecnológico Autónomo de México, con Diplomado en Políticas Públicas y en Competencia Económica por el Centro de Investigación y Docencia Económicas (CIDE), cuenta con un curso en Derecho Constitucional Norteamericano por la Universidad de Berkeley, California. Fue Coordinadora de la licenciatura en derecho (2009-2016) y Secretaria General del CIDE (2016-2020). Actualmente se desempeña como profesora de la División de Estudios Jurídicos del CIDE en las siguientes materias: Derecho Internacional Público, Privacidad y Protección de Datos Personales e Introducción al Análisis Jurídico. Dirige el Diplomado de Privacidad, Regulación y Governanza de Datos. Ha impartido diversos cursos sobre Transparencia, Acceso a la Información y Protección de Datos Personales y es integrante del equipo de Centro Latam Digital sobre política digital del CIDE. Especialista en temas regulación, aceso a la información, privacidad, datos personales y derecho internacional público. Correo electrónico: jimena.moreno@cide.edu</p>
                                                                            <p>Co autora del Manual de Derecho Internacional Público, y de artículos en revistas internacionales sobre controversias de inversiones Inversionista –Estado, educación jurídica, proteccion de datos personales y privacidad, cómputo en la nube, competitividad y economía del internet, voto electrónico, ciberseguridad, ciudadanía digital, inteligencia artificial en el poder judicial y acceso a datos con información de interés público, entre otros. Fue conductora del programa en el canal judicial denominado Conversaciones en la cuidadela enfocado en analizar problemas de interés púbico y de promover la cultura constitucional.</p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                          <div class="chevron"></div>
                                                                          <div class="chevron"></div>
                                                                          <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile19" role="tabpanel" aria-labelledby="v-pills-profile-tab19">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "Retos y Desafíos para la Implementación de la Inteligencia Artificial en el Poder Judicial"
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="sdnxQ3H8RwA">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Dr. César Rentería Marín - Sem --->
                                    <div class="card">
                                        <div class="card-header bg-gradiente-tres" id="heading20">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                                    Dr. César Rentería Marín
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#jueves13">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_male.png" class="rounded" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab20" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab20" data-toggle="pill" data-target="#v-pills-home20" type="button" role="tab" aria-controls="v-pills-home20" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab20" data-toggle="pill" data-target="#v-pills-profile20" type="button" role="tab" aria-controls="v-pills-profile20" aria-selected="false">Ver Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent20">
                                                                    <div class="tab-pane fade show active" id="v-pills-home20" role="tabpanel" aria-labelledby="v-pills-home-tab20">
                                                                        <p class="text-center font-primary-color">División de Estudios Jurídicos del Centro de Investigación y Docencia Económicas, CIDE.</p>
                                                                        <div class="overflow-active text-justify">
                                                                            <p>Profesor-Investigador en la División de Administración Pública del Centro de Investigación y Docencia Económicas (CIDE). Sus líneas de investigación son tecnologías de información en organizaciones, uso de la información, automatización de decisiones e innovación pública. Es Doctor en Administración y Políticas Públicas por la Universidad Estatal de Nueva York. Es miembro del Sistema Nacional de Investigadores, nivel Candidato. Ha sido investigador visitante en la Universidad de Columbia y en la Universidad Nacional de Irlanda, Galway; consultor para el Banco Interamericano de Desarrollo, Banco de Desarrollo de América Latina, Emiratos Árabes Unidos, Instituto Federal de Telecomunicaciones y Secretaría de Comunicaciones y Transporte, entre otros. Ha obtenido subvenciones para la investigación del International Development Research Center (IDRC) y Diálogo Regional sobre la Sociedad de la Información (DIRSI). Fue galardonado con el Digital Governance Junior Scholar Award por la American Society for Public Administration y el Research Grant for Young Researchers Amy Mahan por DIRSI.</p>
                                                                            <p>Profesor-Investigador en la División de Administración Pública del CIDE, donde investiga sobre tecnologías de información en organizaciones, uso de la información, automatización de decisiones e innovación pública. Es Doctor en Administración y Políticas Públicas por la Universidad Estatal de Nueva York.</p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                          <div class="chevron"></div>
                                                                          <div class="chevron"></div>
                                                                          <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile20" role="tabpanel" aria-labelledby="v-pills-profile-tab20">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "Inteligencia Artificial en la Agenda de Legislación y de Cooperación Internacional"
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="sdnxQ3H8RwA">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Dra. Olivia Andrea Mendoza Enríquez - Sem --->
                                    <div class="card">
                                        <div class="card-header" id="heading21">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                                    Dra. Olivia Andrea Mendoza Enríquez
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse21" class="collapse" aria-labelledby="heading21" data-parent="#jueves13">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_female.png" class="rounded" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab21" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab21" data-toggle="pill" data-target="#v-pills-home21" type="button" role="tab" aria-controls="v-pills-home21" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab21" data-toggle="pill" data-target="#v-pills-profile21" type="button" role="tab" aria-controls="v-pills-profile21" aria-selected="false">Ver Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent21">
                                                                    <div class="tab-pane fade show active" id="v-pills-home21" role="tabpanel" aria-labelledby="v-pills-home-tab21">
                                                                        <p class="text-center font-primary-color">División de Estudios Jurídicos del Centro de Investigación y Docencia Económicas, CIDE.</p>
                                                                        <div class="overflow-active text-justify">
                                                                            <p>Licenciada en Derecho, Maestra en Derecho con especialidad en Derecho Económico y Doctora en Derecho con distinción Ad Honorem por la Benemérita Universidad Autónoma de Puebla. Especialista en Derechos Humanos y Máster en Derecho Constitucional por la Universidad Castilla- La Macha (UCLM), España. Profesora Investigadora Asociada del Centro de Investigación y Docencia Económicas (CIDE). Miembro del Sistema Nacional de Investigadores, nivel I. Se desempeñó por seis años como Profesora Investigadora Titular de Tiempo Completo del Centro de Investigación e Innovación en Tecnologías de la Información y Comunicación, INFOTEC (Centro Público CONACYT). Fungió como coordinadora Académica y miembro del Núcleo Académico Básico de la Maestría en Derecho y TIC. Se ha desempeñado como Coordinadora Académica de la Maestría en Regulación y Competencia Económica de las Telecomunicaciones impartida a servidores públicos del Instituto Federal de Telecomunicaciones IFT; asimismo, participó en la creación y desarrollo de dicho programa.</p>
                                                                            <p>Su línea de investigación es Regulación y Tecnología, particularmente relacionada con el Derecho a la Protección de Datos Personales. Conferencista nacional e internacional y autora de diversos productos académicos en dichas temáticas.</p>
                                                                            <p>Colaboradora en el Observatorio Iberoamericano de Datos Personales. Ganadora del Premio Municipal de la Juventud, por su aportación a la cultura democrática edición 2013, otorgado por el H. Ayuntamiento de Puebla. Profesora Invitada de la División de Educación Continua de la Facultad de Derecho la UNAM. Profesora del Diplomado de Protección de Datos Personales de la Escuela Libre de Derecho y del Diplomado de Privacidad, Regulación y Gobernanza de Datos del Centro de Investigación y Docencia Económicas CIDE. Profesora invitada de la Universidad Iberoamericana campus Santa Fe. Profesora del Máster en Legaltech y gestión digital de la Abogacía de la Universidad de Salamanca USAL, España. Capacitadora en temas de protección de datos personales, transparencia y acceso a la información en el Instituto Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales INAI. Participante del sector académico para la conformación de la Estrategia Nacional de Ciberseguridad (ENCS), para México. Desarrolladora temática del Aula Iberoamericana de Protección de Datos Personales.</p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                          <div class="chevron"></div>
                                                                          <div class="chevron"></div>
                                                                          <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile21" role="tabpanel" aria-labelledby="v-pills-profile-tab21">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "Agenda Internacional en Materia de Inteligencia Artificial"
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="sdnxQ3H8RwA">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Mtro. Carlos E. Odriozola Mariscal - Sem --->
                                    <div class="card">
                                        <div class="card-header bg-gradiente-tres" id="heading22">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                                    Mtro. Carlos E. Odriozola Mariscal
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse22" class="collapse" aria-labelledby="heading22" data-parent="#jueves13">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_male.png" class="rounded" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab22" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab22" data-toggle="pill" data-target="#v-pills-home22" type="button" role="tab" aria-controls="v-pills-home22" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab22" data-toggle="pill" data-target="#v-pills-profile22" type="button" role="tab" aria-controls="v-pills-profile22" aria-selected="false">Ver Ponencia</button>
                                                                    <button class="nav-link" id="v-pills-mat-tab22" data-toggle="pill" data-target="#v-pills-mat22" type="button" role="tab" aria-controls="v-pills-mat22" aria-selected="false">Material</button>
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent22">
                                                                    <div class="tab-pane fade show active" id="v-pills-home22" role="tabpanel" aria-labelledby="v-pills-home-tab22">
                                                                        <p class="text-center font-primary-color">Academia Mexicana de Derecho Internacional Privado y Comparado, A.C.</p>
                                                                        <div class="overflow-active text-justify">
                                                                            <p>Egresado de la Facultad de Derecho de la Universidad Nacional Autónoma de México, ha cursado diversas especialidades, diplomados y cursos en las Universidades de Salamanca, Harvard, Federica de Nápoles, Panamericana, El Colegio de México e Instituto de Investigaciones Jurídicas de la UNAM.</p>
                                                                            <p>Estudió la Maestría en Derecho Internacional en la División de Estudios de Posgrado de la UNAM, en donde forma parte del claustro de profesores al haber impartido diversas cátedras relativas al Derecho internacional y los derechos humanos.</p>
                                                                            <p>Actualmente es Doctorando por la misma Universidad en donde su investigación aborda el funcionamiento de las redes judiciales para una mejor cooperación procesal internacional.</p>
                                                                            <p>Fue Presidente de la junta de gobierno de la Academia Mexicana de Derecho Internacional Privado y Comparado, A.C. (AMEDIP) y es miembro pleno de la Asociación Americana de Derecho Internacional Privado (ASADIP).</p>
                                                                            <p>Ha publicado numerosos artículos en materia de Derecho procesal internacional, litigio estratégico y Derechos humanos. Es autor del libro “El seguro de título inmobiliario”, única obra en lengua hispana sobre dicha figura anglosajona.</p>
                                                                            <p>Ha obtenido diversos premios de investigación jurídica en México, incluidos el primer lugar del Concurso de Ensayo Jurídico para celebrar el 50 aniversario del Instituto de Investigaciones Jurídicas de la UNAM y el primer lugar del Concurso literario sobre la Justicia, organizado por el Tribunal Superior de Justicia de la Ciudad de México conmemorativo de los 150 años de su fundación.</p>
                                                                            <p>Es Director General de Bufete Odriozola, S.C., firma de abogados litigantes en materia civil, familiar, mercantil y amparo desde hace 28 años. Es Presidente del CENTRO CONTRA LA DISCRIMNACION, AC (CECODI), en donde ha realizado una importante labor social a través de litigio estratégico en derechos humanos desde hace más de 15 años.</p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                          <div class="chevron"></div>
                                                                          <div class="chevron"></div>
                                                                          <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile22" role="tabpanel" aria-labelledby="v-pills-profile-tab22">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "La Cooperación Procesal Internacional del Siglo XXI en México: ¿El CNPCF será de Vanguardia?"
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="ldiylpmWfiY">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-mat22" role="tabpanel" aria-labelledby="v-pills-mat-tab22">
                                                                        <div class="align-center">
                                                                            <embed src="./assets/mat_apoyo/Pres_CarlosOdriozola.pdf" type="application/pdf" width="100%" height="400px" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---EDOMEX - 3 Semblanzas --->
                                    <div class="card">
                                        <div class="card-header" id="heading23">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                                                    Mtro. Sergio Arturo Valls Esponda || Mtra. María Lourdes Hernández Garduño || Dra. Gabriela Guillermina Cejudo Guzmán
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse23" class="collapse" aria-labelledby="heading23" data-parent="#jueves13">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-12 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab23" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab23" data-toggle="pill" data-target="#v-pills-home23" type="button" role="tab" aria-controls="v-pills-home23" aria-selected="true">Semblanza - S.A.V.E.</button>
                                                                    <button class="nav-link" id="v-pills-pon2-tab23" data-toggle="pill" data-target="#v-pills-pon123" type="button" role="tab" aria-controls="v-pills-pon123" aria-selected="true">Semblanza - M.L.H.G</button>
                                                                    <button class="nav-link" id="v-pills-pon3-tab23" data-toggle="pill" data-target="#v-pills-pon223" type="button" role="tab" aria-controls="v-pills-pon223" aria-selected="true">Semblanza - G.G.C.G</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab23" data-toggle="pill" data-target="#v-pills-profile23" type="button" role="tab" aria-controls="v-pills-profile23" aria-selected="false">Ver Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent23">
                                                                    <div class="tab-pane fade show active" id="v-pills-home23" role="tabpanel" aria-labelledby="v-pills-home-tab23">
                                                                        <div class="col-lg-12 text-center">
                                                                            <img src="./assets/images/tmb_pon/SergioValls.png" class="rounded tmb-p" alt="...">
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <p class="text-center font-primary-color">Mtro. Sergio Arturo Valls Esponda</p>
                                                                            <p class="text-center font-primary-color">Director General del Centro Estatal de Mediación, Conciliación y Justicia Restaurativa del Estado de México.</p>
                                                                        </div>
                                                                        <div class="col-lg-12 overflow-active text-justify">
                                                                            <span><strong>Formación Académica</strong></span>
                                                                            <ul class="myForcedList">
                                                                                <li>◉ Licenciado en derecho por la universidad intercontinental.</li>
                                                                                <li>◉ Maestro en derecho por el centro de estudios de posgrado en derecho.</li>
                                                                                <li>◉ Master en argumentación jurídica por la Universidad de León España.</li>
                                                                                <li>◉ Cuenta con cursos de especialización en la Universidad de Salamanca, Universidad de Alcalá de Henares, Instituto de Investigaciones Jurídicas de la UNAM, centro de estudios jurídicos para las Américas (CEJA-OEA) y Harvard University.</li>
                                                                                <li>◉ Autor de múltiples artículos de investigación y crítica jurídica.</li>
                                                                                <li>◉ Coautor de la obra “Tiempos de Justicia“ editado por la Suprema Corte de Justicia de la Nación.</li>
                                                                            </ul>
                                                                            <span><strong>Trayectoria profesional</strong></span>
                                                                            <ul>
                                                                                <li>◉ Se ha desempeñado en la administración pública federal y estatal.</li>
                                                                                <li>◉ En organismos autónomos ocupó la secretaría técnica de la presidencia de la Comisión Nacional de Derechos Humanos (CNDH).</li>
                                                                                <li>◉ Comisionado en el Instituto de Transparencia y Acceso a la Información del Estado de México (INFOEM).</li>
                                                                                <li>◉ En 2010 la legislatura del Estado de México le tomó protesta como magistrado del Tribunal Superior de Justicia del Estado de México.</li>
                                                                            </ul>
                                                                            <small class="font-primary-color">Redes sociales: @sergiovallse</small>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade " id="v-pills-pon123" role="tabpanel" aria-labelledby="v-pills-pon2-tab23">
                                                                        <div class="col-lg-12 text-center">
                                                                            <img src="./assets/images/tmb_pon/MariaHernandez.png" class="rounded tmb-p" alt="...">
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <p class="text-center font-primary-color"> Mtra. María Lourdes Hernández Garduño </p>
                                                                            <p class="text-center font-primary-color">Jueza Especializada en Procedimientos de Adopción, Restitución Internacional de Menores y demás Especiales y No Contenciosos Relacionados con Menores de Edad y Sumario de Conclusión de Patria Potestad del Estado de México.</p>
                                                                        </div>
                                                                        <div class="col-lg-12 overflow-active text-justify">
                                                                            <ul class="myForcedList">
                                                                                <li>◉ LICENCIADA EN DERECHO POR LA UNIVERSIDAD AUTÓNOMA DEL ESTADO DE MÉXICO.</li>
                                                                                <li>◉ MAESTRÍA EN DERECHO PROCESAL CIVIL POR EL CENTRO DE ESTUDIOS SUPERIORES EN CIENCIAS JURÍDICAS Y CRIMINOLÓGICAS.</li>
                                                                                <li>◉ ESPECIALIDAD EN DERECHO PROCESAL CIVIL LA UNIVERSIDAD AUTÓNOMA DEL ESTADO DE MÉXICO.</li>
                                                                                <li>◉ ESPECIALIDAD EN AMPARO POR LA UNIVERSIDAD AUTÓNOMA DEL ESTADO DE MÉXICO.</li>
                                                                                <li>◉ ESPECIALIDAD EN DERECHO JUDICIAL POR LA ESCUELA JUDICIAL DEL PODER JUDICIAL DEL ESTADO DE MÉXICO.</li>
                                                                            </ul>
                                                                            <span><strong>Trayectoria profesional</strong></span>
                                                                            <ul>
                                                                                <li>◉ SE HA DESEMPEÑADO EN EL TRIBUNAL SUPERIOR DE JUSTICIA DEL ESTADO DE MÉXICO POR MÁS DE 30 AÑOS; ENTRE LOS PUESTOS QUE HA OCUPADO SE ENCUENTRAN: TÉCNICO JUDICIAL, NOTIFICADOR JUDICIAL, SECRETARIO DE ACUERDOS, PROYECTISTA Y JUEZ DE CUANTÍA MENOR.</li>
                                                                                <li>◉ ACTUALMENTE SE DESEMPEÑA COMO JUEZ DE CUANTÍA MAYOR DENTRO DEL ANTES MENCIONADO.</li>
                                                                            </ul>
                                                                            <small class="font-primary-color">Redes sociales: @Lulú Hernández</small>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade " id="v-pills-pon223" role="tabpanel" aria-labelledby="v-pills-pon3-tab23">
                                                                        <div class="col-lg-12 text-center">
                                                                            <img src="./assets/images/tmb_pon/GabrielaCejudo.png" class="rounded tmb-p" alt="...">
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <p class="text-center font-primary-color">Dra. Gabriela Guillermina Cejudo Guzmán</p>
                                                                            <p class="text-center font-primary-color">Mediadora-Conciliadora y Facilitadora del Centro Estatal del Poder Judicial del Estado de México.</p>
                                                                        </div>
                                                                        <div class="col-lg-12 overflow-active text-justify">
                                                                            <ul class="myForcedList">
                                                                                <li>◉ LICENCIADA EN DERECHO POR LA UNIVERSIDAD AUTÓNOMA DEL ESTADO DE MÉXICO.</li>
                                                                                <li>◉ MAESTRÍA EN DERECHO PROCESAL PENAL, POR EL INSTITUTO DE ESTUDIOS SUPERIORES EN DERECHO PENAL A.C.</li>
                                                                                <li>◉ DOCTORA EN DERECHO, POR EL INSTITUTO DE ESTUDIOS SUPERIORES EN DERECHO PENAL A.C.</li>
                                                                                <li>◉ DOCTORA EN DERECHO POR EL CENTRO DE ESTUDIOS DE POSGRADO EN DERECHO.</li>
                                                                                <li>◉ DIPLOMADO EN MEDIACIÓN Y CONCILIACIÓN, POR LA ESCUELA JUDICIAL DEL ESTADO DE MÉXICO.</li>
                                                                                <li>◉ CERTIFICACIÓN POR LA UNIVERSIDAD JAVERIANA DE CALI COLOMBIA, DEL DIPLOMADO VIRTUAL EN JUSTICIA RESTAURATIVA.</li>
                                                                                <li>◉ DIVERSOS DIPLOMADOS EN DERECHOS HUMANOS POR LA COMISIÓN NACIONAL DE DERECHOS HUMANOS.</li>
                                                                            </ul>
                                                                            <span><strong>Trayectoria profesional</strong></span>
                                                                            <ul>
                                                                                <li>◉ SE HA DESEMPEÑADO COMO COMO CATEDRÁTICO Y DISERTANTE EN DIVERSOS CURSOS, TALLERES Y SEMINARIOS RELACIONADOS CON LOS MÉTODOS ALTERNOS DE SOLUCIÓN DE CONFLICTOS.</li>
                                                                                <li>◉ FACILITADORA DE PROCESOS RESTAURATIVOS EN JUSTICIA PENAL PARA ADULTOS Y ADOLESCENTES.</li>
                                                                                <li>◉ ACTUALMENTE SE DESEMPEÑA COMO MEDIADORA- CONCILIADORA Y FACILITADORA DEL CENTRO ESTATAL DEL PODER JUDICIAL DEL ESTADO DE MÉXICO.</li>
                                                                            </ul>
                                                                            <small class="font-primary-color">Redes sociales: @Gabriela Cejudo</small>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile23" role="tabpanel" aria-labelledby="v-pills-profile-tab23">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "La Mediación una Oportunidad en la Restitución Internacional de Menores"
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="f1z8_q3MFSo">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Mtra. Dulce María Mejía Cortes - Sem - Foto? --->
                                    <div class="card">
                                        <div class="card-header bg-gradiente-tres" id="heading26">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                                                    Mtra. Dulce María Mejía Cortes
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse26" class="collapse" aria-labelledby="heading26" data-parent="#jueves13">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_female.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab26" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab26" data-toggle="pill" data-target="#v-pills-home26" type="button" role="tab" aria-controls="v-pills-home26" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab26" data-toggle="pill" data-target="#v-pills-profile26" type="button" role="tab" aria-controls="v-pills-profile26" aria-selected="false">Ver Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent26">
                                                                    <div class="tab-pane fade show active" id="v-pills-home26" role="tabpanel" aria-labelledby="v-pills-home-tab26">
                                                                        <p class="text-center font-primary-color">Dirección General de Representación Jurídica y Restitución de Derechos de Niñas, Niños y Adolescentes en la Procuraduría Federal de Protección Niñas, Niños y Adolescentes en el Sistema Nacional para el Desarrollo Integral de la Familia.</p>
                                                                        <div class="overflow-active text-justify">
                                                                            <p><span class="font-primary-color">Licenciada en Derecho, Especialista en Derecho Penal y Maestra en Derecho.</span> Titulada en las tres con Mención Honorífica por la Facultad de Derecho de la Universidad Nacional Autónoma de México.</p>
                                                                            <p><span class="font-primary-color">Directora General de Representación Jurídica y Restitución de Derechos de Niñas, Niños y Adolescentes</span> en la Procuraduría Federal de Protección de Niñas, Niños y Adolescentes en el Sistema Nacional para el Desarrollo Integral de la Familia. En donde tiene a su cargo la representación jurídica en suplencia ó coadyuvancia en procedimientos administrativos ó jurisdiccionales, gestión de acciones para la restitución integral de derechos de niñas, niños y adolescentes, así como la revisión de medidas de protección integral y restitución de derechos, especiales y urgentes en favor de niñas, niños y adolescentes cuyos derechos han sido vulnerados.</p>
                                                                            <p>En su trayectoria profesional, ha desempeñado diversos cargos en la Procuraduría General de Justicia de la Ciudad de México, hoy Fiscalía General:</p>
                                                                            <ul>
                                                                                <li>o	Fiscal de Análisis y Opinión.</li>
                                                                                <li>o	Agente del Ministerio Público Supervisor.</li>
                                                                                <li>o	Directora de Relaciones Laborales.</li>
                                                                                <li>o	Agente del Ministerio Público.</li>
                                                                            </ul>
                                                                            <p>En la Secretaría de Seguridad Pública de la Ciudad de México, hoy Secretaría de Seguridad Ciudadana de la Ciudad de México, ocupó el cargo de Secretaria Particular de la Subsecretaría de Prevención del Delito y Participación Ciudadana. </p>
                                                                            <p>Asimismo, cuenta con capacitación y actualización en materia de Sistema Penal Acusatorio, Derechos de Niñas, Niños y Adolescentes, Adopciones, Acogimiento Familiar, Perspectiva de Género, entre otras. </p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                          <div class="chevron"></div>
                                                                          <div class="chevron"></div>
                                                                          <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile26" role="tabpanel" aria-labelledby="v-pills-profile-tab26">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "Restitución al Derecho a Vivir en Familia de Niños, Niñas y Adolescentes"
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="EfMjLICaHYY">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Consejero Dr. Andrés Linares Carranza - Sem --->
                                    <div class="card">
                                        <div class="card-header" id="heading27">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
                                                    Dr. Andrés Linares Carranza
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse27" class="collapse" aria-labelledby="heading27" data-parent="#jueves13">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_pon/AndresLinares.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab27" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab27" data-toggle="pill" data-target="#v-pills-home27" type="button" role="tab" aria-controls="v-pills-home27" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab27" data-toggle="pill" data-target="#v-pills-profile27" type="button" role="tab" aria-controls="v-pills-profile27" aria-selected="false">Ver Ponencia</button>
                                                                    <button class="nav-link" id="v-pills-mat-tab27" data-toggle="pill" data-target="#v-pills-mat27" type="button" role="tab" aria-controls="v-pills-mat27" aria-selected="false">Material</button>
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent27">
                                                                    <div class="tab-pane fade show active" id="v-pills-home27" role="tabpanel" aria-labelledby="v-pills-home-tab27">
                                                                        <p class="text-center font-primary-color">Consejero de la Judicatura de la Ciudad de México.</p>
                                                                        <div class="overflow-active text-justify">
                                                                            <p>Nació en la Ciudad de México, Distrito Federal realizó sus estudios de Licenciatura en la Facultad de Derecho de la Universidad Nacional Autónoma de México, en donde también realizó la Especialidad de Derecho Privado y diversos cursos de actualización en materia Civil y de Amparo, realizó las Especialidades de Sistema Penitenciario y menores infractores, así como de Derechos Humanos y Victimología y la Maestría en Prevención del Delito y Sistemas Penitenciarios en el Instituto de Prevención del Delito y Estudios Penitenciarios, el Diplomado de Derecho Familiar en el Centro de Estudios Judiciales.</p>
                                                                            <p>Es maestro de asignatura en la Facultad de Derecho de la Universidad Nacional Autónoma de México de Derecho Familiar y Teoría del Proceso, y maestro titular de Derecho Procesal Civil y Derecho Sucesorio, además de impartir clases en posgrado en materia de Derecho Probatorio y Procesal Familiar en la Máxima casa de estudios y en diversas universidades privadas.</p>
                                                                            <p>Ha desempeñado los siguientes cargos: asesor jurídico de la policía auxiliar del Distrito Federal; Secretario de Acuerdos de Juzgado Mixto de Paz del Ramo Civil, Secretario de Acuerdos de Juzgado Familiar y Juez de lo Familiar del Tribunal Superior de Justicia del Distrito Federal, Director General del Ministerio Público en lo Civil y Familiar, Coordinador de Asuntos de Menores e incapaces y Director General del Ministerio Público de lo Familiar y todos estos cargos en la Procuraduría General de justicia del Distrito Federal hoy Fiscalía General de la Ciudad de México; Director de Asistencia Jurídica del Sistema Nacional para el Desarrollo Integral de la Familia, Secretario de Acuerdos del Juzgado Primero de Distrito en Materia Civil del Primer Circuito en el Distrito Federal, Secretario Proyectista de la Séptima Sala Civil del Tribunal Superior de Justicia del Distrito Federal, nuevamente se desempeño como Juez de lo Familiar, asimismo fue designado como miembro de la Red Nacional de Cooperación Judicial y Protección para la Niñez, teniendo el cargo de Secretario Técnico de la misma desde febrero del 2010 hasta el Abril del 2012; asimismo es especialista en Restitución Internacional. Fue designado por la Asamblea Legislativa del Distrito Federal como Magistrado del Tribunal Superior de Justicia del Distrito Federal a partir del 8 de noviembre del año 2011, Magistrado integrante de la Quinta Sala Familiar del Tribunal Superior de Justicia de la Ciudad de México.</p>
                                                                            <p>Actualmente se desempeña como Consejero de la Ponencia 1 del Consejo de la Judicatura de la Ciudad de México.</p>
                                                                            <small class="font-primary-color">Correo electrónico: andres.linares@cjcdmx.gob.mx</small>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile27" role="tabpanel" aria-labelledby="v-pills-profile-tab27">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                "Inteligencia Artificial aplicada a la Cooperación Procesal Internacional"
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="aj7C6CAp8es">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-mat27" role="tabpanel" aria-labelledby="v-pills-mat-tab27">
                                                                        <div class="align-center">
                                                                            <embed src="./assets/mat_apoyo/Pres_LinaresCarranza.pdf" type="application/pdf" width="100%" height="400px" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Lic. Martha Angélica Álvarez Rendón - Sem --->
                                    <div class="card">
                                        <div class="card-header bg-gradiente-tres" id="heading28">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                                                    Lic. Martha Angélica Álvarez Rendón
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse28" class="collapse" aria-labelledby="heading28" data-parent="#jueves13">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_female.png" class="rounded" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab28" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab28" data-toggle="pill" data-target="#v-pills-home28" type="button" role="tab" aria-controls="v-pills-home28" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab28" data-toggle="pill" data-target="#v-pills-profile28" type="button" role="tab" aria-controls="v-pills-profile28" aria-selected="false">Ver Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent28">
                                                                    <div class="tab-pane fade show active" id="v-pills-home28" role="tabpanel" aria-labelledby="v-pills-home-tab28">
                                                                        <p class="text-center font-primary-color">Subdirectora de Derecho Internacional II, Consultoría Jurídica de la Secretaría de Relaciones Exteriores.</p>
                                                                        <div class="overflow-active text-justify">
                                                                            <p>Licenciada en Derecho por la Facultad de Derecho de la Universidad Nacional Autónoma de México.</p>
                                                                            <p>Como parte de su formación académica, ha realizado múltiples cursos y diplomados enfocados a temas de Derecho Internacional Público, Derecho Internacional Privado, Arbitraje Comercial Internacional y Derechos Humanos, entre los cuales destacan: “Regional Workshop in International Law for Latin America and the Caribbean on the Law of State Responsibility” y “Regional Workshop for Latin America and the Caribbean on the Peaceful Settlement of International Disputes”, impartidos por United Nations Programme of Assistance in the Teaching, Study, Dissemination and Wider Appreciation of International Law; el “Curso de Actualización sobre el Derecho Interamericano”, impartido por el Departamento de Derecho Internacional de la Secretaría de Asuntos Jurídicos de la Organización de los Estados Americanos y el Instituto Matías Romero de la Secretaría de Relaciones Exteriores; y “Course Introduction to the United Nations Commission on International Trade Law”, curso que ofrece la Comisión de Naciones Unidas para el Derecho Mercantil Internacional.</p>
                                                                            <p>De febrero de 2021 a la fecha, se desempeña como Subdirectora de Derecho Internacional II en la Consultoría Jurídica de la Secretaría de Relaciones Exteriores, proporcionando seguimiento y análisis de los tópicos jurídicos que se encuentran en discusión en los foros internacionales especializados en materia de Derecho Internacional Privado, como la Conferencia de La Haya de Derecho Internacional Privado (HCCH); la Comisión de Naciones Unidas para el Derecho Mercantil Internacional (UNCITRAL); el Instituto Internacional para la Unificación del Derecho Privado (UNIDROIT); y el Comité Jurídico Interamericano.</p>
                                                                            <p>En el desempeño de sus funciones, ha sido integrante de las Delegaciones de México que han participado en los períodos de sesiones de los seis Grupos de Trabajo de la Comisión de Naciones Unidas para el Derecho Mercantil Internacional (UNCITRAL). Adicionalmente, ha participado en las reuniones y actividades de los Grupos de Trabajo y Expertos de la Conferencia de La Haya de Derecho Internacional Privado (HCCH)</p>
                                                                            <p>A partir de 2021, participa como representante de México en el Grupo de Trabajo sobre Jurisdicción de la Conferencia de La Haya de Derecho Internacional Privado.</p>
                                                                            <p>En noviembre de 2021, coordinó el evento “Día de UNCITRAL-LAC: Reflexiones sobre Arbitraje y Mediación Comercial Internacional", organizado por la Facultad de Derecho de la UNAM y la Consultoría Jurídica de la Secretaría de Relaciones Exteriores, el cual se llevó a cabo en el marco de las actividades de la 2” Edición del Día de UNCITRAL en América Latina y el Caribe. Aunado a lo anterior, participó como moderadora de la mesa de trabajo titulada “Reflexiones sobre la Convención de Singapur y la Ley Modelo de CNUDMI sobre Mediación Comercial Internacional.”</p>
                                                                            <p>En 2019, por invitación del Poder Judicial del Estado de Guanajuato y su Escuela de Estudios e Investigación Jurídica, impartió el curso “La Conferencia de La Haya de Derecho Internacional Privado y la Comisión de Naciones Unidas para el Derecho Mercantil Internacional”.</p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile28" role="tabpanel" aria-labelledby="v-pills-profile-tab28">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                Actualización de los Trabajos de la Conferencia de La Haya de Derecho Internacional Privado"
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="hf6iroAGSH8">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Dra. Graciela Tagle de Ferreyra -Sem --->
                                    <div class="card">
                                        <div class="card-header" id="heading29">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
                                                    Dra. Graciela Tagle de Ferreyra
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse29" class="collapse" aria-labelledby="heading29" data-parent="#jueves13">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_pon/GracielaTagle.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab29" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab29" data-toggle="pill" data-target="#v-pills-home29" type="button" role="tab" aria-controls="v-pills-home29" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab29" data-toggle="pill" data-target="#v-pills-profile29" type="button" role="tab" aria-controls="v-pills-profile29" aria-selected="false">Ver Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent29">
                                                                    <div class="tab-pane fade show active" id="v-pills-home29" role="tabpanel" aria-labelledby="v-pills-home-tab29">
                                                                        <p class="text-center font-primary-color">Representante de la Red Internacional de Jueces de La Haya de la República Argentina. Coordinadora de la Oficina de Cooperación Judicial Internacional del Tribunal Superior de Justicia de la Provincia de Córdoba; y Punto de Contacto de la Red Iberoamericana de Cooperación Jurídica Internacional (IberRed).</p>
                                                                        <div class="overflow-active text-justify align-center">
                                                                            <embed src="./assets/mat_apoyo/Sem_GracielaTagle.pdf" type="application/pdf" width="90%" height="400px">
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile29" role="tabpanel" aria-labelledby="v-pills-profile-tab29">
                                                                        <div class="align-center">
                                                                            <p class="font-primary-color">
                                                                                Desafíos en la Cooperación Procesal Internacional: Nuevas Herramientas
                                                                            </p>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="RkF2OFSqzWc">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Mtro. Luis Peña cruz--->
                                    <div class="card">
                                        <div class="card-header bg-gradiente-tres" id="heading30">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
                                                    Mtro. Luis Peña cruz
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse30" class="collapse" aria-labelledby="heading30" data-parent="#jueves13">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_male.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab30" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab30" data-toggle="pill" data-target="#v-pills-home30" type="button" role="tab" aria-controls="v-pills-home30" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab30" data-toggle="pill" data-target="#v-pills-profile30" type="button" role="tab" aria-controls="v-pills-profile30" aria-selected="false">Ver Ponencia</button>
                                                                    <button class="nav-link" id="v-pills-mat-tab30" data-toggle="pill" data-target="#v-pills-mat30" type="button" role="tab" aria-controls="v-pills-mat30" aria-selected="false">Material</button>
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent30">
                                                                    <div class="tab-pane fade show active" id="v-pills-home30" role="tabpanel" aria-labelledby="v-pills-home-tab30">
                                                                        <p class="text-center font-primary-color">Director de Adopciones en la Procuraduría Federal de Protección Niñas, Niños y Adolescentes.</p>
                                                                        <div class="overflow-active text-justify align-center">
                                                                            <p>Luis Peña Cruz es maestro en Derechos Humanos y Democracia por la Facultad Latinoamericana de Ciencias Sociales (FLACSO), sede México y licenciado en Derecho por la Universidad Autónoma de Tlaxcala; actualmente cursa el Máster de Argumentación Jurídica por la Universidad de Alicante. Su formación se ha centrado en el ámbito de los derechos humanos, derecho constitucional, derechos de la niñez, justicia para adolescentes y argumentación jurídica.</p>
                                                                            <p>Como servidor público ha impulsado distintas transformaciones legales e institucionales en beneficio de los derechos de niñas, niños y adolescentes. En 2018 coordinó la creación e implementación de la primera Ley de Adopciones para el Estado de Tlaxcala, la cual ha permitido la restitución del derecho a vivir en familia de decenas de niñas, niños y adolescentes. Dirigió las primeras adopciones internacionales en la historia del estado de Tlaxcala, bajo la aplicación del tratado internacional en la materia, concretando satisfactoriamente procesos con Estados Unidos, Suiza y Austria.</p>
                                                                            <p>Su labor en el servicio público se ha combinado con actividades académicas que van desde el dictado de conferencias en distintos foros, hasta la impartición de cursos especializados dirigidos a autoridades vinculadas con la salvaguarda de los derechos de la niñez. Ha sido profesor de distintas materias a nivel licenciatura y posgrado en la Universidad Iberoamericana Puebla, en el Centro de Estudios Jurídicos Carbonell y en el Colegio Jurista. Actualmente es profesor titular del Departamento de Derecho de la Universidad Iberoamericana en la Ciudad de México, donde imparte las materias de Personas y Familia y Derecho Constitucional de los Derechos Humanos.</p>
                                                                            <p>Desde el 2017 hasta la fecha ha ocupado distintos cargos especializados en la salvaguarda de los derechos de la niñez. Hasta el mes de agosto de 2021 se desempeñó como Procurador para la Protección de Niñas, Niños y Adolescentes del estado de Tlaxcala. Y desde septiembre de 2021, se incorporó a la Procuraduría Federal de Protección de Niñas, Niños y Adolescentes, donde actualmente se desempeña como Director de Adopciones.</p>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile30" role="tabpanel" aria-labelledby="v-pills-profile-tab30">
                                                                        <div class="align-center">
                                                                            <small class="font-primary-color">
                                                                                "Lineamientos para la Certificación de casos de Niños, Niñas y Adolescentes en Situación de Exposición y Abandono, y para Decretar su Susceptibilidad de Adopción del Sistema Nacional para el Desarrollo Integral de la Familia (DIF)"
                                                                            </small>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="WDYrWl_I2iQ">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-mat30" role="tabpanel" aria-labelledby="v-pills-mat-tab30">
                                                                        <div class="align-center">
                                                                            <embed src="./assets/mat_apoyo/Pres_LuisPenia.pdf" type="application/pdf" width="100%" height="400px" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---Dr. Raúl Aparicio Alba--->
                                    <div class="card">
                                        <div class="card-header" id="heading31">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-center font-primary-color collapsed" type="button" data-toggle="collapse" data-target="#collapse31" aria-expanded="false" aria-controls="collapse31">
                                                    Dr. Raúl Aparicio Alba
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse31" class="collapse" aria-labelledby="heading31" data-parent="#jueves13">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <img src="./assets/images/tmb_pon/RaulAparicio.png" class="rounded tmb-p" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 align-middle">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="nav flex-column nav-pills" id="v-pills-tab31" role="tablist" aria-orientation="vertical">
                                                                    <button class="nav-link active" id="v-pills-home-tab31" data-toggle="pill" data-target="#v-pills-home31" type="button" role="tab" aria-controls="v-pills-home31" aria-selected="true">Semblanza</button>
                                                                    <button class="nav-link" id="v-pills-profile-tab31" data-toggle="pill" data-target="#v-pills-profile31" type="button" role="tab" aria-controls="v-pills-profile31" aria-selected="false">Ver Ponencia</button>
                                                                    <!--<button class="nav-link" id="v-pills-mat-tab31" data-toggle="pill" data-target="#v-pills-mat31" type="button" role="tab" aria-controls="v-pills-mat31" aria-selected="false">Material</button>-->
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="tab-content" id="v-pills-tabContent31">
                                                                    <div class="tab-pane fade show active" id="v-pills-home31" role="tabpanel" aria-labelledby="v-pills-home-tab31">
                                                                        <small class="text-center font-primary-color">Presidente de la Asociación Derecho Internacional Privado y Derecho comprado de Panamá (ADIPCOP).</small>
                                                                        <div class="overflow-active text-justify align-center">
                                                                            <p>Catedrático de Derecho Internacional Privado (DIPr) en la Universidad de Panamá (UP)</p>
                                                                            <p>Socio fundador de la firma de abogados Aparicio, Aba y Asociados (AAA).</p>
                                                                            <p>Abogado y Árbitro interno e internacional en varios centros de arbitraje en la República de Panamá.</p>
                                                                            <p>Licenciado en Derecho y Ciencias Políticas egresado de la Universidad de Panamá, Especialista en Derecho Internacional Público y Privado de la Universidad Rodrigo Facio,
                                                                                San José, Costa Rica. Magíster en Derecho Privado de la Universidad de Panamá y Doctorando en Derecho Procesal de la Universidad del Rosario, Argentina.</p>
                                                                            <p>Presidente de la Asociación de Derecho Internacional y Derecho Comparado de Panamá (ADIPCOP), vicepresidente del Instituto Colombo-Panameño de Derecho Procesal (ICPDP), Miembro del Colegio Nacional de Abogados de Panamá. Miembro de la Asociación Americana de Juristas, miembro del Instituto Iberoamericano de Derecho Procesal.
                                                                            </p>
                                                                            <p>Autor de múltiples libros y artículos jurídicos en su especialidad, algunas de sus publicaciones son las siguientes:</p>
                                                                            <ul>
                                                                                <li>⎯ Aparicio, Alba. Curso básico de Derecho Internacional Privado: primera parte, Sigma Editores, 2020.</li>
                                                                                <li>⎯ Aparicio, Alba. El control de la convencionalidad y el control de la constitucionalidad como instrumentos de garantía de los derechos humanos, Sigma Editores, 2016.</li>
                                                                                <li>⎯ Aparicio, Alba. Jerarquía constitucional de los tratados sobre derechos humanos. Editorial Exedra Books, 2021</li>
                                                                                <li>⎯ Aparicio, Alba. Cooperación judicial internacional en el sistema interamericano, Exedra Books, 2007.</li>
                                                                                <li>⎯ Aparicio, Alba. El proceso contencioso de protección de los derechos humanos, Exedra Books,</li>
                                                                                <li>⎯ Aparicio, Alba. “Hacia una construcción de una concepción de orden público internacional como excluyente del exequatur de los laudos arbitrales”, Revista Panameña de Derecho Internacional Privado, Año 2, N° 2, Octubre – 2021, pp.37-73.</li>
                                                                                <li>⎯ Aparicio, Alba. “Hacia una construcción de una concepción de orden público internacional como excluyente del exequatur de los laudos arbitrales”, Revista Panameña de Derecho Internacional Privado, Año 2, N° 2, Octubre – 2021, pp.37-73.</li>
                                                                                <li>⎯ Aparicio, Alba. “El rol del árbitro en la evacuación de la prueba como garantía de independencia e imparcialidad en el contexto de la ley de arbitraje de Panamá”, Revista Panameña de Derecho Internacional Privado (edición especial sobre métodos alternos de solución de conflictos), Año 2, N°1, 2021, pp. 203-223.</li>
                                                                                <li>⎯ Aparicio, Alba. “El exequátur en el Código de Derecho Internacional Privado Panameño”, Revista Panameña de Derecho Internacional Privado, Año 1, N°1, octubre 2021, pp. 7-25.</li>
                                                                                <li>⎯ Aparicio, Alba. “El exequatur en el Derecho Internacional Privado Panameño”, Revista de Derecho Privado, Año 2, N° 2, enero – diciembre 2017, pp. 182-197.</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="container_arrow">
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                            <div class="chevron"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile31" role="tabpanel" aria-labelledby="v-pills-profile-tab31">
                                                                        <div class="align-center">
                                                                            <small class="font-primary-color">
                                                                                "P/Confirmar"
                                                                            </small>
                                                                            <div class="video-frame">
                                                                                <div class="embed-youtube" data-video-id="mh6WteBruN0">
                                                                                    <div class="embed-youtube-play"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--
                                                                    <div class="tab-pane fade" id="v-pills-mat31" role="tabpanel" aria-labelledby="v-pills-mat-tab31">
                                                                        <div class="align-center">
                                                                            <embed src="./assets/mat_apoyo/Pres_LuisPeña.pdf" type="application/pdf" width="100%" height="400px" />
                                                                        </div>
                                                                    </div>
                                                                    -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                        <ul class="list-group">
                            <?php
                            switch ($_SESSION['mesa']){
                            case 'IA':?>
                            <!-----Mesa IA----->
                            <li class="list-group-item text-center">
                                        <div class="jumbotron jumbotron-fluid">
                                            <div class="container">
                                                <h1 class="display-8">MESA DE ANÁLISIS</h1>
                                                <h1 class="display-8">“INTELIGENCIA ARTIFICIAL APLICADA A LA IMPARTICIÓN DE JUSTICIA”</h1>
                                                <p class="lead font-secondary-color">09:00 hrs. - 10:30 hrs. Horario central UTC -6 o GMT -6</p>
                                                <p class="lead font-primary-color">Moderada por Mtro. José Luis Amaro Jaramillo</p>
                                                <p class="small">Dirección General de Asuntos Jurídicos de la Secretaría de Relaciones Exteriores.</p>
                                                <p class="lead-1">Dr. Oscar Gregorio Cervera Rivero</p>
                                                <p class="small">Magistrado de la Segunda Sala Familiar del Tribunal Superior de Justicia de la Ciudad de México.</p>
                                                <p class="lead-1">Prof. Pablo Pruneda Gross</p>
                                                <p class="small">Instituto de Investigaciones Jurídicas de la Universidad Nacional Autónoma de México.</p>
                                                <p class="lead-1">Dra. Leticia Rocha Licea</p>
                                                <p class="small">Magistrada de la Cuarta Sala Penal del Tribunal Superior de Justicia de la Ciudad de México.</p>
                                                <p class="lead-1">Dra. Olivia Andrea Mendoza Enríquez</p>
                                                <p class="small">División de Estudios Jurídicos del Centro de Investigación y Docencia Económicas.</p>
                                                <p class="lead-1">Dr. Héctor Macedo García</p>
                                                <p class="small">Magistrado del Tribunal Superior de Justicia del Estado de México.</p>
                                                <p class="lead-1">Dip. Javier Joaquín López Casarín</p>
                                                <p class="small">Cámara de Diputados.</p>
                                                <button type="button" class="btn btn-secondary btn-sm mb-20 bg-primary-color" data-toggle="collapse" href="#collapseMesa1" role="button" aria-expanded="false" aria-controls="collapseMesa1">Ver transmisión</button>
                                                <div class="collapse" id="collapseMesa1">
                                                    <div class="card card-body">
                                                        <div class="embed-youtube" data-video-id="b99GfY41rBk">
                                                            <div class="embed-youtube-play"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                            <?php break;
                            case 'AIM':?>
                            <!---- Mesa AIM ---->
                            <li class="list-group-item text-center">
                                    <div class="jumbotron jumbotron-fluid">
                                        <div class="container">
                                            <h1 class="display-8">MESA DE ANÁLISIS</h1>
                                            <h1 class="display-8">“ADOPCIÓN INTERNACIONAL DE MENORES”</h1>
                                            <p class="lead font-secondary-color">10:45 hrs. - 12:15 hrs. Horario central UTC -6 o GMT -6</p>
                                            <p class="lead font-primary-color">Moderada por Mtro. Miguel Ángel Reyes Moncayo</p>
                                            <p class="small">Consultoría Jurídica de la Secretaría de Relaciones Exteriores.</p>
                                            <p class="lead-1">Mtra. Dulce María Mejía Cortes</p>
                                            <p class="small">Dirección General de Representación Jurídica y Restitución de Derechos de Niñas, Niños y Adolescentes en la Procuraduría Federal de Protección Niñas, Niños y Adolescentes en el Sistema Nacional para el Desarrollo Integral de la Familia.</p>
                                            <p class="lead-1">Dr. Andrés Linares Carranza</p>
                                            <p class="small">Consejero de la Judicatura de la Ciudad de México.</p>
                                            <p class="lead-1">Lic. Oscar Joe Rivas Lozano</p>
                                            <p class="small">Oficial Nacional de Protección de UNICEF México.</p>
                                            <p class="lead-1">Magistrada Dra. Blanca Colmenares Sánchez</p>
                                            <p class="small">Tribunal Superior de Justicia del Estado de México.</p>
                                            <button type="button" class="btn btn-secondary btn-sm mb-20 bg-primary-color" data-toggle="collapse" href="#collapseMesa2" role="button" aria-expanded="false" aria-controls="collapseMesa2">Ver transmisión</button>
                                            <div class="collapse" id="collapseMesa2">
                                                <div class="card card-body">

                                                    <div class="embed-youtube" data-video-id="692YVzDNUDk">
                                                        <div class="embed-youtube-play"></div>
                                                    </div>

                                                    <!--
                                                    <div class="align-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                                        <img src="assets/images/services-left-image.png" alt="Constancias 8TCPI">
                                                    </div>
                                                    Agradecemos tu paciencia, pronto se publicará la siguiente mesa...
                                                    <br> <small>No olvides registrar tu asistencia en el apartado de Constancias</small>
                                                    -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php break;
                            case 'Penal': ?>
                            <!---Mesa Penal--->
                            <li class="list-group-item text-center">
                                        <div class="jumbotron jumbotron-fluid">
                                            <div class="container">
                                                <h1 class="display-8">MESA DE ANÁLISIS</h1>
                                                <h1 class="display-8">“COOPERACIÓN PROCESAL INTERNACIONAL EN MATERIA PENAL”</h1>
                                                <p class="lead font-secondary-color">14:15 hrs. - 15:45 hrs. Horario central UTC -6 o GMT -6</p>
                                                <p class="lead font-primary-color">Moderada por Mtro. Igor Mendoza Ruiz</p>
                                                <p class="small">Dirección General de Asuntos Jurídicos de la Secretaría de Relaciones Exteriores.</p>
                                                <p class="lead-1">Dr. Paul Martín Barba</p>
                                                <p class="small">Magistrado por Ministerio de Ley Integrante de la 1a Sala Especializada en Ejecución de Sanciones Penales del Poder Judicial de la Ciudad de México.</p>
                                                <p class="lead-1">Dra. Linda Milena Torres Castro</p>
                                                <p class="small">Coordinadora del Grupo de Traslado de Personas Condenadas, Dirección de Asuntos Internacionales, Ministerio de Justicia y del Derecho de Colombia.</p>
                                                <p class="lead-1">Mtra. Azucena Fabiola Hernández Palacios</p>
                                                <p class="small">Agente del Ministerio Público de la Federación, Encargada del Despacho de la Subdirección de Ejecución de Tratados y Convenios Internacionales de la Dirección General de Procedimientos Internacionales de la Fiscalía General de la República.</p>
                                                <button type="button" class="btn btn-secondary btn-sm mb-20 bg-primary-color" data-toggle="collapse" href="#collapseMesa3" role="button" aria-expanded="false" aria-controls="collapseMesa3">Ver transmisión</button>
                                                <div class="collapse" id="collapseMesa3">
                                                    <div class="card card-body">

                                                        <div class="embed-youtube" data-video-id="aCvWLlx50ws">
                                                            <div class="embed-youtube-play"></div>
                                                        </div>
                                                        <!--
                                                        Agradecemos tu paciencia, pronto se publicará la transmisión de la Mesa de Análisis 4...
                                                        <br> En espera de las conclusiones de la Mesa de Análisis 3
                                                        <br> <small>No olvides registrar tu asistencia en el apartado de Constancias</small>
                                                        -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                            <?php break;
                            case 'LDN':?>
                            <!----Mesa LDN---->
                            <li class="list-group-item text-center">
                                        <div class="jumbotron jumbotron-fluid">
                                            <div class="container">
                                                <h1 class="display-8">MESA DE ANÁLISIS</h1>
                                                <h1 class="display-8">“LEY DE NACIONALIDAD”</h1>
                                                <p class="lead font-secondary-color">12:30 hrs. - 14:00 hrs. Horario central UTC -6 o GMT -6</p>
                                                <p class="lead font-primary-color">Moderada por Mtro. Jorge Roberto Ordóñez Escobar</p>
                                                <p class="small">Consultor en Litigio Constitucional y Asuntos Públicos.</p>
                                                <p class="lead-1">Dip. Mario Alberto Torres Escudero</p>
                                                <p class="small">Cámara de Diputados.</p>
                                                <p class="lead-1">Lic. Christianne Guadalupe Pérez Rivera</p>
                                                <p class="small">Subdirectora de Naturalización, Dirección General de Asuntos Jurídicos de la Secretaría de Relaciones Exteriores.</p>
                                                <p class="lead-1">Dr. Gerardo Leyva Parra</p>
                                                <p class="small">Director General Adjunto de Investigación Nacional de Estadística y Geografía (INEGI).</p>
                                                <p class="lead-1">Dra. Roxana Rosas Fregoso</p>
                                                <p class="small">Investigadora Asociada “C” de tiempo completo del Instituto de Investigaciones Jurídicas de la UNAM, Estación Noroeste de Investigación y Docencia, ENID.</p>
                                                <p class="lead-1">Lic. Janet Melissa Monzalvo Vázquez,</p>
                                                <p class="small">Subdirectora de Nacionalidad, Dirección General de Asuntos Jurídicos de la Secretaría de Relaciones Exteriores.</p>
                                                <button type="button" class="btn btn-secondary btn-sm mb-20 bg-primary-color" data-toggle="collapse" href="#collapseMesa4" role="button" aria-expanded="false" aria-controls="collapseMesa4">Ver transmisión</button>
                                                <div class="collapse" id="collapseMesa4">
                                                    <div class="card card-body">
                                                        <div class="card card-body">
                                                            <div class="embed-youtube" data-video-id="mP-pija3Vn0">
                                                                <div class="embed-youtube-play"></div>
                                                            </div>
                                                            <!--
                                                            Agradecemos tu paciencia, pronto se publicará la transmisión de la Mesa de Análisis 3...
                                                            <br> En espera de las conclusiones de la Mesa de Análisis 2
                                                            <br> <small>No olvides registrar tu asistencia en el apartado de Constancias</small>
                                                            -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                            <?php break;
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!----Fin Programa---->
        <!----Clausura---->
        <div class="row wow fadeInUp">
            <div class="col-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="" id="">
                        <ul class="list-group">
                            <li class="list-group-item text-center">
                                <div class="jumbotron jumbotron-fluid">
                                    <div class="container">
                                        <h1 class="display-6">Clausura</h1>
                                        <p class="lead font-primary-color">Disponible el Viernes 14 de Octubre <br> al finalizar la 4a Mesa de Análisis</p>
                                        <button type="button" class="btn btn-secondary btn-sm mb-20 bg-primary-color" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">Ver mensaje</button>
                                        <div class="collapse" id="collapseExample1">
                                            <div class="card card-body">
                                                <!--Agradecemos tu paciencia, pronto se publicará la transmisión de la Clausura...
                                                <br> En espera del término de la Mesa de Análisis 4
                                                <br> <small>No olvides registrar tu asistencia en el apartado de Constancias</small>-->
                                                <div class="embed-youtube" data-video-id="aCvWLlx50ws">
                                                    <div class="embed-youtube-play"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!----Fin Clausura---->
        <!----Clausura---->
        <div class="row align-center">
            <div class="col-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
                        <p>No olvides registrar tu asistencia diariamente en el apartado de <a href="./Y29uc3RhbmNpYXM.php">Contancias</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!----Fin Clausura---->

    </div>
</div>
<!------ Fin programa-------------------->
<!--
<div id="portfolio" class="our-portfolio section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <h2>See What Our Agency <em>Offers</em> &amp; What We <span>Provide</span></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <a href="#">
          <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="hidden-content">
              <h4>SEO Analysis</h4>
              <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
            </div>
            <div class="showed-content">
              <img src="assets/images/portfolio-image.png" alt="">
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-sm-6">
        <a href="#">
          <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="hidden-content">
              <h4>Website Reporting</h4>
              <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
            </div>
            <div class="showed-content">
              <img src="assets/images/portfolio-image.png" alt="">
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-sm-6">
        <a href="#">
          <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="hidden-content">
              <h4>Performance Tests</h4>
              <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
            </div>
            <div class="showed-content">
              <img src="assets/images/portfolio-image.png" alt="">
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-sm-6">
        <a href="#">
          <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
            <div class="hidden-content">
              <h4>Data Analysis</h4>
              <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
            </div>
            <div class="showed-content">
              <img src="assets/images/portfolio-image.png" alt="">
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
-->
<!--
<div id="blog" class="our-blog section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
        <div class="section-heading">
          <h2>Check Out What Is <em>Trending</em> In Our Latest <span>News</span></h2>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
        <div class="top-dec">
          <img src="assets/images/blog-dec.png" alt="">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
        <div class="left-image">
          <a href="#"><img src="assets/images/big-blog-thumb.jpg" alt="Workspace Desktop"></a>
          <div class="info">
            <div class="inner-content">
              <ul>
                <li><i class="fa fa-calendar"></i> 24 Mar 2021</li>
                <li><i class="fa fa-users"></i> TemplateMo</li>
                <li><i class="fa fa-folder"></i> Branding</li>
              </ul>
              <a href="#"><h4>SEO Agency &amp; Digital Marketing</h4></a>
              <p>Lorem ipsum dolor sit amet, consectetur and sed doer ket eismod tempor incididunt ut labore et dolore magna...</p>
              <div class="main-blue-button">
                <a href="#">Discover More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
        <div class="right-list">
          <ul>
            <li>
              <div class="left-content align-self-center">
                <span><i class="fa fa-calendar"></i> 18 Mar 2021</span>
                <a href="#"><h4>New Websites &amp; Backlinks</h4></a>
                <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
              </div>
              <div class="right-image">
                <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
              </div>
            </li>
            <li>
              <div class="left-content align-self-center">
                <span><i class="fa fa-calendar"></i> 14 Mar 2021</span>
                <a href="#"><h4>SEO Analysis &amp; Content Ideas</h4></a>
                <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
              </div>
              <div class="right-image">
                <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
              </div>
            </li>
            <li>
              <div class="left-content align-self-center">
                <span><i class="fa fa-calendar"></i> 06 Mar 2021</span>
                <a href="#"><h4>SEO Tips &amp; Digital Marketing</h4></a>
                <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
              </div>
              <div class="right-image">
                <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
-->
<!--
<div id="contact" class="contact-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <div class="section-heading">
          <h2>Feel Free To Send Us a Message About Your Website Needs</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doer ket eismod tempor incididunt ut labore et dolores</p>
          <div class="phone-info">
            <h4>For any enquiry, Call Us: <span><i class="fa fa-phone"></i> <a href="#">010-020-0340</a></span></h4>
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-lg-6">
              <fieldset>
                <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="form-submit" class="main-button ">Send Message</button>
              </fieldset>
            </div>
          </div>
          <div class="contact-dec">
            <img src="assets/images/contact-decoration.png" alt="">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
                <p>DRIDPE © Copyright 2022 All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Scripts -->
<script src="vendor/jquery/jquery.min.js"></script>
<!--<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="./assets/js/animation.js"></script>
<script src="./assets/js/imagesloaded.js"></script>
<script src="./assets/js/templatemo-custom.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lazy-youtube-embed@1.0.0/dist/lazy-youtube-embed.js" defer></script>
<!--<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js"></script>-->
<script src="./js/lazyJS.js"></script>
</body>
</html>
