<?php
#session_start();
#require 'partials/base.php';
#require 'partials/expires.php';
#if(!isset($_SESSION['myuser']))
#{
#    echo'<script>window.location.href="index.html"</script>';
#}
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

    <!-- Main CSS File -->
    <link href="css/stylesMixed/style.css" rel="stylesheet">
</head>

<body>
<!-----------Modals begin-------------->
<!-----**** Katerina V. Ossenova ****----->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal1TLongTitle">Katerina V. Ossenova</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-center">Abogada Litigante Senior<br>
                    Oficina de Asistencia Judicial Internacional<br>
                    Oficina de Litigios en el Extranjero Departamento de Justicia de EE. UU.</p>
                <p>Katerina V. Ossenova es Abogada Litigante Senior y está a cargo de la Oficina de Asistencia Judicial Internacional (OIJA por sus siglas en inglés) dentro de la Oficina de Litigios en el Extranjero del Departamento de Justicia de los Estados Unidos. OIJA actúa como la Autoridad Central de los EE. UU. para tramitar las solicitudes entrantes de asistencia judicial internacional cuyo fin es notificar procesos u obtener pruebas en asuntos civiles o comerciales que tengan lugar fuera de los Estados Unidos.</p>
                <p>OIJA es la Autoridad Central de los EE. UU. para la Convención de La Haya sobre la Notificación en el Extranjero de Documentos Judiciales y Extrajudiciales en Materia Civil o Comercial, el Convenio de La Haya relativo a la Obtención de Pruebas, y el Protocolo Adicional de la Convención Interamericana sobre los exhortos y las cartas rogatorias recibidas a través de canales diplomáticos.</p>
                <p>La Lic. Ossenova también brinda orientación y capacitación a los abogados del gobierno de los Estados Unidos sobre cómo notificar el proceso u obtener evidencia en el extranjero para su uso en litigios en los Estados Unidos.</p>
                <p>Anteriormente, la Lic. Ossenova fue abogada-asesora internacional durante más de seis años en el Programa de Desarrollo de Derecho Comercial (CLDP por sus siglas en inglés) de la Oficina del Asesor Jurídico General del Departamento de Comercio de los EE. UU. También administró los programas de asistencia técnica de CLDP en Europa del Este y Eurasia.</p>
                <p>En el año 2008, la Lic. Ossenova recibió su Doctorado en Jurisprudencia de la Facultad de Derecho de la Universidad de Pittsburgh y se graduó con un Diploma en Derecho Internacional y Comparado.</p>
                <p>Katerina Ossenova obtuvo una Licenciatura en Relaciones Internacionales e Historia de la Universidad de Virginia en el año 2003. Está autorizada para ejercer la abogacía en Virginia y Washington, D.C.</p>
                <p>La Lic. Ossenova habla búlgaro con fluidez y tiene conocimientos prácticos de bosnio/croata/ serbio y macedonio.</p>
            </div>
        </div>
    </div>
</div>
<!----------------------------------->
<!-----------Modals end-------------->
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
                    <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
                    <li><a class="nav-link scrollto" href="#about">Antecedentes</a></li>
                    <li><a class="nav-link scrollto " href="#cta">Programa</a></li>
                    <li><a class="nav-link scrollto" href="#team">Semblanzas</a></li>
                    <li><a class="getstarted scrollto" href="./partials/outt.php">Salir</a></li>
                    <!--
                    <li><a class="nav-link scrollto" href="#services">Talleres</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div><!-- End Header Container -->
    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container text-start position-relative" data-aos="fade-in" data-aos-delay="200">
        <h1>9° Taller de Cooperación<br>Procesal Internacional</h1>
        <h2>19 & 20 de abril, Ciudad de México</h2>
        <a href="#about" class="btn-get-started scrollto">Comenzar</a>
    </div>
</section><!-- End Hero -->

<main id="main">
    <!-- ======= Logos Section ======= -->
    <section id="clients" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-5 offset-1 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="./assets/logos/logo_sre.png" class="img-fluid" alt="" style="width: 90%!important;">
                </div>
                <div class="col-lg-2 col-md-4 col-5 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="./assets/logos/logo_conatrib.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-5 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="300">
                    <img src="./assets/logos/logo_pjcdmx.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-5 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="400">
                    <img src="./assets/logos/logo_cide.png" class="img-fluid" alt="" style="width: 25%!important;">
                </div>

                <div class="col-lg-2 col-md-4 col-5 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="500">
                    <img src="./assets/logos/logo_unam.png" class="img-fluid" alt="" style="width: 30%!important;">
                </div>
            </div>

        </div>

        </div>
    </section><!-- End Clients Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="row content">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <!--<h2>Eum ipsam laborum deleniti velitena</h2>-->
                    <img src="./assets/logos/logo_sec.png" alt="" width="400">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
                    <h3>Objetivo del Taller</h3>
                    <p>
                        Se busca y persiste el diálogo participativo de manera presencial con la colaboración de la colectividad de los sujetos que intervienen en el trabajo de la Cooperación Procesal Internacional.
                    </p>
                    <!--<ul>
                      <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                      <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                      <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                    </ul>-->
                    <p class="">
                        Con la impartición de este Noveno Taller se facilitando el intercambio de conocimientos y experiencias entre los operadores judiciales, académicos, legisladores y ciudadanía sobre normas y estándares existentes en el campo y sus implicaciones, así como poder generar cambios en nuestro sistema y legislación que nos permita ir acorde con los avances mundiales en la materia tras la post pandemia.
                    </p>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">
            <div class="row counters text-center">
                <p class="fst-italic">A continuación podrás ver las estadísticas del 8° Taller de Cooperación procesal</p>
                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="897" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Participantes</p>
                </div>
                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="1547" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Views</p>
                </div>
                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Ponencias</p>
                </div>
                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Mesas de trabajo</p>
                </div>
            </div>
        </div>
    </section><!-- End Counts Section -->
    <!-- ======= Why Us Section ======= -->
    <!--
    <section id="why-us" class="why-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3>8° Taller de Cooperación Procesal 2022</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    -->
    <!-- End Why Us Section -->
    <!-- ======= Historia Talleres ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Historia del Taller</h2>
                        <p>Objetivos de los Talleres de Actualización Procesal Internacional pasados:</p>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">

                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/logos/talleres/Logo1TCPI.png" class="testimonial-img" alt="">
                                    <h3>1er Taller de Cooperación Procesal Internacional</h3>
                                    <h4></h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Se planteó la importancia del auxilio judicial internacional la cual se lleva a cabo a través de la cooperación que presentan los funcionarios de procuración y administración de justicia de distintos países, para el desahogo de diligencias procesales que deben practicarse fuera de la jurisdicción de la autoridad exhortante.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/logos/talleres/Logo2TCPI.png" class="testimonial-img" alt="">
                                    <h3>2° Taller de Cooperación Procesal Internacional</h3>
                                    <h4></h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Se señaló que en la práctica judicial se implementen adecuadamente el uso de los tratados internacionales suscritos por México en materia de Cooperación Procesal Internacional, de los cuales algunos incluyen formularios para la tramitación de exhortos y cartas rogatorias, toda vez que la utilización de los mismos es generalmente obligatoria entre los países parte.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/logos/talleres/Logo3TCPI.png" class="testimonial-img" alt="">
                                    <h3>3er Taller de Cooperación Procesal Internacional</h3>
                                    <h4></h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Se concluyó sobre la importancia del derecho de acceso a la justicia y Medios Alternos de Solución de Controversias en las convenciones internacionales de las que el estado mexicano forma parte.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/logos/talleres/Logo4TCPI.png" class="testimonial-img" alt="">
                                    <h3>4° Taller de Cooperación Procesal Internacional</h3>
                                    <h4></h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Se definió la importancia de hacer de la justicia una realidad viva y tangible para todos a través del debido proceso.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/logos/talleres/Logo5TCPI.png" class="testimonial-img" alt="">
                                    <h3>5° Taller de Cooperación Procesal Internacional</h3>
                                    <h4></h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Versó sobre actualización en materia de Cooperación Procesal Internacional, para facilitar el acceso a los justiciables, en el marco de los tratados internacionales suscritos por el gobierno de México y demás estados parte.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/logos/talleres/Logo6TCPI.png" class="testimonial-img" alt="">
                                    <h3>6° Taller de Cooperación Procesal Internacional</h3>
                                    <h4>2020</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Dar a conocer los alcances de los instrumentos internacionales de los que México forma parte en materia de Cooperación Procesal Internacional proporcionando al participante un conocimiento más amplio acerca de las posibilidades prácticas y herramientas para el acceso a los derechos que éstos tratados proporcionan en los ámbitos público y privado.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/logos/talleres/Logo7TCPI.png" class="testimonial-img" alt="">
                                    <h3>7° Taller de Cooperación Procesal Internacional</h3>
                                    <h4>2021</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Se asentaron las bases de las nuevas responsabilidades de Cooperar en tiempos de pandemia, se buscó fortalecer más las instituciones vinculadas al proceso de la tramitología procesal como lo son los exhortos o cartas rogatorias, implementando las tecnologías que disminuyan la “tramitología procesal internacional” (por ejemplo, digitalizando absolutamente los exhortos o cartas rogatorias) o efectuando más reuniones y foros por plataformas virtuales.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/logos/talleres/Logo8TCPI.png" class="testimonial-img" alt="">
                                    <h3>8° Taller de Cooperación Procesal Internacional</h3>
                                    <h4>2022</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Trató, respecto de los nuevos retos en la era post del COVID-19 para la Cooperación Procesal Internacional, la cual está implementando mecanismos e instrumentos realmente eficaces para dar soluciones a aquellas controversias que no se circunscriben a una jurisdicción, con el fin de poder responder a las peticiones de los ciudadanos de forma pronta y constante.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Fin Historia Talleres -->
    <!-- ======= Program Section ======= -->
    <section id="cta" class="cta">
        <div class="container">
            <div class="text-center" data-aos="zoom-in">
                <h3>PROGRAMA</h3>
                <p> Conoce la programación de las ponencias y mesas de trabajo del 9° Taller de Cooperación Procesal Internacional.</p>
                <!--<a class="cta-btn" href="#"> - </a>-->
                <!--<a href="https://online.flippingbook.com/view/1004615338/" class="fbo-embed" data-fbo-id="0db58b4912" data-fbo-ratio="3:2" data-fbo-lightbox="yes" data-fbo-width="100%" data-fbo-height="auto" data-fbo-version="1" style="max-width: 100%">Programa 9° TCPI</a><script async defer src="https://online.flippingbook.com/EmbedScriptUrl.aspx?m=redir&hid=1004615338"></script>-->
               <!-- <iframe style="width:900px;height:500px" src="https://online.fliphtml5.com/cjczl/kufg/"  seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" ></iframe>-->
               <!--<iframe style="width:900px;height:500px" src="https://flipbookpdf.net/web/site/3572b9b5e7b9d069b8a38a67a1926a7cdf142941202304.pdf.html"  seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" ></iframe>-->
                <iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe" src="https://heyzine.com/flip-book/4e2ba25f63.html" style="border: 1px solid lightgray; width: 100%; height: 600px;"></iframe>
            </div>

        </div>
    </section><!-- End Cta Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Semblanzas</h2>
                        <p>Mira las semblanzas curriculares de los Ponentes del 9° Taller de Cooperación Procesal Internacional 2023</p>
                    </div>
                </div>
                <div class="col-lg-8"  style="max-height: 600px!important; overflow: auto;">
                    <div class="row">
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                <h4><a href="">Katerina V. Ossenova</a></h4>
                                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal1">Ver semblanza</button>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex align-items-stretch mt-4 mt-lg-0">
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h4><a href="">Sed ut perspiciatis</a></h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex align-items-stretch mt-4 mt-lg-0">
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                                <div class="icon"><i class="bx bx-tachometer"></i></div>
                                <h4><a href="">Magni Dolores</a></h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex align-items-stretch mt-4">
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                                <div class="icon"><i class="bx bx-world"></i></div>
                                <h4><a href="">Nemo Enim</a></h4>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <!--
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-left">
                <h2>Portfolio</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    --><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <!--
    <section id="testimonials_1" class="testimonials section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Testimonials</h2>
                        <p>Magnam dolores commodi suscipit uisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">

                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    -->
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <!--
    <section id="team" class="team">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Team</h2>
                        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Walter White</h4>
                                    <span>Chief Executive Officer</span>
                                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <div class="member" data-aos="zoom-in" data-aos-delay="200">
                                <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                    <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4">
                            <div class="member" data-aos="zoom-in" data-aos-delay="300">
                                <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>William Anderson</h4>
                                    <span>CTO</span>
                                    <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4">
                            <div class="member" data-aos="zoom-in" data-aos-delay="400">
                                <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                    <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>
    --><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <!--
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="section-title">
                        <h2>Contact</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>
                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                    <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
                    <div class="info mt-4">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mt-4">
                            <div class="info">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="info w-100 mt-4">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>
                        </div>
                    </div>

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    --><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!--
                          <div class="col-lg-3 col-md-6 footer-contact">
                            <h3>Bethany</h3>
                            <p>
                              A108 Adam Street <br>
                              New York, NY 535022<br>
                              United States <br><br>
                              <strong>Phone:</strong> +1 5589 55488 55<br>
                              <strong>Email:</strong> info@example.com<br>
                            </p>
                          </div>

                          <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                            </ul>
                          </div>

                          <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Our Services</h4>
                            <ul>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                            </ul>
                          </div>

                          <div class="col-lg-4 col-md-6 footer-newsletter">
                            <h4>Join Our Newsletter</h4>
                            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                            <form action="" method="post">
                              <input type="email" name="email"><input type="submit" value="Subscribe">
                            </form>
                          </div>
                -->
            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>EKNR</span></strong>. All Rights Reserved
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

<!-- Template Main JS File -->
<script src="js/jsmixed/main.js"></script>

</body>

</html>
