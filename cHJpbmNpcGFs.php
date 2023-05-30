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
    <!---Boton Flotante-->
    <link rel="stylesheet" href="./css/botonStyle.css">

    <!-- icons fontawesome -->
    <script src="https://kit.fontawesome.com/f40904d23d.js" crossorigin="anonymous"></script>
    <!-- Main CSS File -->
    <link href="css/stylesMixed/style.css" rel="stylesheet">
    <script>
        /*Acciones a realizar para pase de asistencia*/
        /*Función para evitar que pasen lista antes de tiempo*/
        function listReadynt(d) {
            //var toastxx = '<div aria-live="polite" aria-atomic="true" style="position: relative; min-width: 200px;"><div class="toast" id="nottt" style="position: absolute; top: 0; right: 200px;"><div class="toast-header"><img src="./assets/logos/9num.png" class="rounded mr-2" alt="9TCPI"> <strong class="mr-auto">Sistema</strong><small>Ahora</small><button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div><div class="toast-body">Aún no ha llegado el momento.</div></div></div>';
            var toastx = ' <div class="toast" id="nott" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false"><div class="toast-header"><strong class="mr-auto">9TCPI</strong><small class="text-muted">justo ahora</small><button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button></div><div class="toast-body" id="not">Aún no puede registrarse su asistencia.</div></div>'
            console.log("Aún no ha llegado el momento.");
            $('#toasts').html(toastx);
            $('#nott').toast('show');
        }
        /*Funcion para evitar que pasen lista después de tiempo*/
        function listReadyd(d) {
            var toasty = ' <div class="toast" id="past" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false"><div class="toast-header"><strong class="mr-auto">9TCPI</strong><small class="text-muted">justo ahora</small><button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button></div><div class="toast-body" id="not">Ya no es posible registrar su asistencia.</div></div>'
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
                    var textoH = '<div class="toast" id="responseAjax1" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false"><div class="toast-header"><strong class="mr-auto">9TCPI</strong><small class="text-muted">justo ahora</small><button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button></div><div class="toast-body">' + response.r + '</div></div>';
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
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-91J0H2ERYV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-91J0H2ERYV');
    </script>
</head>

<body>
<!-----------Boton flotante begin--------------><!---------------------PASE DE LISTA------------->
<div class="container_myBoton">
    <button type="button" class="btn" onclick="listReadynt('primerdia')">
    <!--<button type="button" class="btn" onclick="listReadyd('segundodia')">-->
        <img class="myBoton" src="./assets/logos/registro_icon.svg" alt="">
    </button>
<div style="position: absolute; bottom:0; right:120px;" id="toasts"></div>
</div>
<!-----------boton flotante end-------------->
<!-----------Modals begin-------------->
<!-----**** Katerina V. Ossenova ****----->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal1TLongTitle"><img src="./assets/logos/logo_sec.png" alt="9TCPI" width="80px">&nbsp;&nbsp;Katerina V. Ossenova</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-center fw-bold">Abogada Litigante Senior<br>
                    Oficina de Asistencia Judicial Internacional<br>
                    Oficina de Litigios en el Extranjero Departamento de Justicia de EE. UU.</p>
                <p class="text-justify">Katerina V. Ossenova es Abogada Litigante Senior y está a cargo de la Oficina de Asistencia Judicial Internacional (OIJA por sus siglas en inglés) dentro de la Oficina de Litigios en el Extranjero del Departamento de Justicia de los Estados Unidos. OIJA actúa como la Autoridad Central de los EE. UU. para tramitar las solicitudes entrantes de asistencia judicial internacional cuyo fin es notificar procesos u obtener pruebas en asuntos civiles o comerciales que tengan lugar fuera de los Estados Unidos.</p>
                <p class="text-justify">OIJA es la Autoridad Central de los EE. UU. para la Convención de La Haya sobre la Notificación en el Extranjero de Documentos Judiciales y Extrajudiciales en Materia Civil o Comercial, el Convenio de La Haya relativo a la Obtención de Pruebas, y el Protocolo Adicional de la Convención Interamericana sobre los exhortos y las cartas rogatorias recibidas a través de canales diplomáticos.</p>
                <p class="text-justify">La Lic. Ossenova también brinda orientación y capacitación a los abogados del gobierno de los Estados Unidos sobre cómo notificar el proceso u obtener evidencia en el extranjero para su uso en litigios en los Estados Unidos.</p>
                <p class="text-justify">Anteriormente, la Lic. Ossenova fue abogada-asesora internacional durante más de seis años en el Programa de Desarrollo de Derecho Comercial (CLDP por sus siglas en inglés) de la Oficina del Asesor Jurídico General del Departamento de Comercio de los EE. UU. También administró los programas de asistencia técnica de CLDP en Europa del Este y Eurasia.</p>
                <p class="text-justify">En el año 2008, la Lic. Ossenova recibió su Doctorado en Jurisprudencia de la Facultad de Derecho de la Universidad de Pittsburgh y se graduó con un Diploma en Derecho Internacional y Comparado.</p>
                <p class="text-justify">Katerina Ossenova obtuvo una Licenciatura en Relaciones Internacionales e Historia de la Universidad de Virginia en el año 2003. Está autorizada para ejercer la abogacía en Virginia y Washington, D.C.</p>
                <p class="text-justify">La Lic. Ossenova habla búlgaro con fluidez y tiene conocimientos prácticos de bosnio/croata/ serbio y macedonio.</p>
            </div>
        </div>
    </div>
</div>
<!----------------------------------->
<!-----**** Christine Darden Brennan ****----->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal2LongTitle"><img src="./assets/logos/logo_sec.png" alt="9TCPI" width="80px">&nbsp;&nbsp;Christine Darden Brennan</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-justify">Christine Brennan es actualmente la Abogada a Cargo de la Oficina de Litigios Extranjeros para Latinoamérica (OFL por sus siglas en inglés) del Departamento de Justicia de los Estados Unidos. Su oficina está ubicada en la Embajada de los Estados Unidos en la Ciudad de Panamá.</p>
                <p class="text-justify">OFL representa a los Estados Unidos en cortes de justicia y tribunales extranjeros cuando los Estados Unidos es parte de un caso o tiene un interés. OFL también representa a ciertas personas que son demandadas o imputadas penalmente en su capacidad oficial en jurisdicciones extranjeras.</p>
                <p class="text-justify">La Licenciada Brennan comenzó su carrera en el Departamento de Justicia en el año 2012, en la Oficina de Litigios Europeos de la Embajada de los Estados Unidos en Londres. Más tarde, se trasladó a la sede de OFL en Washington, D.C., donde se enfocó principalmente en casos en América Latina e Israel, así como en asuntos de seguridad nacional. En el año 2021, abrió la primera oficina regional de OFL fuera de Europa, la Oficina de Litigios Latinoamericanos en la Ciudad de Panamá.</p>
                <p class="text-justify">Antes de trabajar en el Departamento de Justicia, Christine Brennan trabajó en un bufete de abogados internacional en Washington, D.C. y se graduó con honores en la Facultad de Derecho de la Universidad de Georgetown. Tuvo una carrera anterior como periodista en CNN, donde formó parte del equipo que lanzó CNN en Español y luego cubrió la Casa Blanca para CNN América.</p>
            </div>
        </div>
    </div>
</div>
<!----------------------------------->
<!-----**** Liliana Oliva Bernal ****----->
<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal3LongTitle"><img src="./assets/logos/logo_sec.png" alt="9TCPI" width="80px">&nbsp;&nbsp;Liliana Oliva Bernal</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-justify">Liliana Oliva Bernal es abogada por la Universidad Panamericana (Aguascalientes, México) y maestra en derecho internacional público por la London School of Economics and Political Science (Londres, Reino Unido). Es miembro de la rama diplomático consular del Servicio Exterior Mexicano.</p>
                <p class="text-justify">Cuenta con más de 15 años de experiencia en diversas disciplinas del derecho público, incluyendo derecho constitucional, derecho administrativo y derecho internacional.</p>
                <p class="text-justify">Actualmente es Directora de litigios I en la Consultoría Jurídica de la Secretaría de Relaciones Exteriores donde, entre otras cuestiones, tiene a su cargo la coordinación de la defensa de México y de las Representaciones de México en el Exterior en litigios ante tribunales extranjeros y la emisión de todo tipo de dictámenes en materia de privilegios e inmunidades.</p>
            </div>
        </div>
    </div>
</div>
<!----------------------------------->
<!-----**** Dra. María José Rodríguez Rocha ****----->
<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal4LongTitle"><img src="./assets/logos/logo_sec.png" alt="9TCPI" width="80px">&nbsp;&nbsp;Dra. María José Rodríguez Rocha</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-justify">Dra. en Derecho y Ciencias Sociales - Facultad de Derecho, Universidad de la República (UdelaR)</p>
                <p class="text-justify">Asesora Legal de la Autoridad Central de Cooperación judicial internacional del Uruguay. (Ministerio de Educación y Cultura)</p>
                <p class="text-justify">Delegada uruguaya por la Autoridad Central del Uruguay ante OEA, MERCOSUR, La Conferencia de La Haya de Derecho Internacional Privado y la Red Iberoamericana de Cooperación Jurídica (IBERRED).</p>
                <p class="text-justify">Docente universitaria de Derecho Internacional Privado en cursos de grado en la Universidad de la República (UdelaR).</p>
                <p class="text-justify">Miembro del Instituto Uruguayo de Derecho Internacional Privado e Integrante del Grupo de Jurisprudencia del mismo.</p>
                <p class="text-start">Contacto<br>Teléfono: (+598) 094 820 743 <br>Email: marirodriguez@hotmail.com</p>
            </div>
        </div>
    </div>
</div>
<!----------------------------------->
<!-----**** Dr. Manuel Ferreira Catoira ****----->
<div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="modal5" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal5LongTitle"><img src="./assets/logos/logo_sec.png" alt="9TCPI" width="80px">&nbsp;&nbsp;Dr. Manuel Ferreira Catoira</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-justify">Dr. en Derecho y Ciencias Sociales - Facultad de Derecho, Universidad de la República (UdelaR)</p>
                <p class="text-justify">Asesor Legal de la Autoridad Central de Cooperación judicial internacional del Uruguay. (Ministerio de Educación y Cultura)</p>
                <p class="text-justify">Delegado uruguayo por la Autoridad Central del Uruguay ante OEA, MERCOSUR, La Conferencia de La Haya de Derecho Internacional Privado y la Red Iberoamericana de Cooperación Jurídica (IBERRED).</p>
                <p class="text-justify">Docente universitario de Derecho Internacional Privado en cursos de grado en la Universidad de la República (UdelaR).</p>
                <p class="text-justify">Miembro del Instituto Uruguayo de Derecho Internacional Privado e Integrante del Grupo de Jurisprudencia del mismo.</p>
                <p class="text-start">Contacto<br>Teléfono: (+598) 098 888 296 <br>Email: manuelferreiracatoira@gmail.com</p>
            </div>
        </div>
    </div>
</div>
<!----------------------------------->
<!-----**** Maxwel Aurora Flores Rico ****----->
<div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="modal6" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal6LongTitle"><img src="./assets/logos/logo_sec.png" alt="9TCPI" width="80px">&nbsp;&nbsp;Maxwel Aurora Flores Rico</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-justify">Es Licenciada en Derecho por la Universidad Nacional Autónoma de México, en donde también cursó un Diplomado en Derecho Corporativo.</p>
                <p class="text-justify">Su experiencia laboral inició en la Secretaría de Relaciones Exteriores, en donde actualmente se desempeña como Subdirectora de Pensiones Alimenticias y Adopciones Internacionales en la Coordinación de Derecho de Familia de la Dirección General de Protección Consular y Planeación Estratégica, instrumentando compromisos internacionales en materia de alimentos y adopciones firmados por el gobierno mexicano.</p>
                <p class="text-justify">Destaca en su ejercicio profesional haber sido Subdirectora de Capacitación en la División Científica de la Policía Federal. De igual forma, se desempeñó como Subgerente en el Área de Responsabilidades y Quejas ante el Órgano Interno de Control en la Lotería Nacional para la Asistencia Pública y colaboró como asesora en la Asamblea Legislativa del Distrito Federal durante la V Legislatura.</p>
                <p class="text-justify">Cuenta con estudios de Derecho Internacional Privado en la Academia de La Haya, Países Bajos. Participó como integrante de la Delegación mexicana en dos reuniones de la Conferencia de La Haya sobre Derecho Internacional Privado para el estudio del Convenio sobre el cobro internacional de alimentos con respecto a los menores y otras formas de manutención de la familia, así como en la Reunión de las Américas: Ejecución Internacional de Pensiones Alimenticias para Menores, en Orlando, Florida.</p>
            </div>
        </div>
    </div>
</div>
<!----------------------------------->
<!-----**** Arnaldo Silveira ****----->
<div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="modal7" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal7LongTitle"><img src="./assets/logos/logo_sec.png" alt="9TCPI" width="80px">&nbsp;&nbsp;Arnaldo Silveira</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-justify">Arnaldo Silveira es Coordinador-General de Cooperación Jurídica Internacional em Materia Civil del del Departamento de Recuperación de Activos y Cooperación Jurídica Internacional (DRCI) del Ministerio de Justicia y Seguridad Pública, la Autoridad Central de Brasil.</p>
                <p class="text-justify">Funcionario público federal, Especialista en Políticas Públicas y Gestión Gubernamental, licenciado en Derecho por la AEUDF (Brasília) y Especialista em Relaciones Internacionales por la UnB (Brasília). Cursó el Minerva Program en la George Washington University y su Programa Adicional.</p>
                <p class="text-justify">Trabajó en el area de comercio exterior por 14 años y después en la Unidad de Inteligencia Financiera.</p>
                <p class="text-justify">Trabajando en la Autoridad Central desde el 2004, ejerció diversas funciones, como Asesor de Tratados y Foros y Director-Adjunto. Silveira es miembro de diversos Grupos de Trabajo de la Conferência de La Haya, y Co-Chair de uno de ellos, así como Punto de Contacto para redes de cooperación. Actuó como avaliador por WGB/OCDE, GAFI, GAFILAT y UNODC, participó de negociaciones de tratados bilaterales y multilaterales y participó en actividades del G20, OEA, MERCOSUR, CPLP, Egmont Group y COMJIB.</p>
            </div>
        </div>
    </div>
</div>
<!----------------------------------->
<!-----**** Claudia Sierra Martínez ****----->
<div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="modal8" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal8LongTitle"><img src="./assets/logos/logo_sec.png" alt="9TCPI" width="80px">&nbsp;&nbsp;Claudia Sierra Martínez</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-justify fw-bold">Subdirectora de Restitución y Custodia Internacional de Niñas, Niños y Adolescentes</p>
                <p class="text-justify">Lic. en Derecho por la Universidad Nacional Autónoma de México, con especialidad en Derecho Administrativo y Mediación Familiar, es miembro supernumerario de la Academia Mexicana de Derecho Internacional Privado y Comparado, ha participado como ponente en las Reuniones de la Red Mexicana de Cooperación Judicial para la Protección de la Niñez, escuelas judiciales estatales, así como en las jornadas de actualización en materia civil y administrativa en el Consejo de la Judicatura Federal, entre otras instituciones públicas y privadas. Se ha desempeñado como Abogada Dictaminadora en la Dirección de Nacionalidad y Naturalización de la Dirección General de Asuntos Jurídicos y Jefa del Departamento de Recuperación de Alimentos en el Extranjero ambas en la Secretaría de Relaciones Exteriores. En este momento funge como Subdirectora de Restitución y Custodia Internacional de Niñas, Niños y Adolescentes en la Dirección General de Protección Consular y Planeación Estratégica, Oficina designada como Autoridad Central para las Convenciones en materia de Sustracción Internacional de Menores, pensiones alimenticias y casos de reunificación familiar Estados Unidos-México.</p>
            </div>
        </div>
    </div>
</div>
<!----------------------------------->
<!-----**** Martha Angélica Álvarez Rendón ****----->
<div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="modal9" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal9LongTitle"><img src="./assets/logos/logo_sec.png" alt="9TCPI" width="80px">&nbsp;&nbsp;Martha Angélica Álvarez Rendón</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-justify">Es Licenciada en Derecho por la Facultad de Derecho de la Universidad Nacional Autónoma de México.</p>
                <p class="text-justify">Como parte de su formación académica, ha realizado múltiples cursos y diplomados enfocados a temas de Derecho Internacional Público, Derecho Internacional Privado, Arbitraje Comercial Internacional y Derechos Humanos, entre los cuales destacan: “Regional Workshop in International Law for Latin America and the Caribbean on the Law of State Responsibility” y “Regional Workshop for Latin America and the Caribbean on the Peaceful Settlement of International Disputes”, impartidos por United Nations Programme of Assistance in the Teaching, Study, Dissemination and Wider Appreciation of International Law; el “Curso de Actualización sobre el Derecho Interamericano”, impartido por el Departamento de Derecho Internacional de la Secretaría de Asuntos Jurídicos de la Organización de los Estados Americanos y el Instituto Matías Romero de la Secretaría de Relaciones Exteriores; y “Course Introduction to the United Nations Commission on International Trade Law”, curso que ofrece la Comisión de Naciones Unidas para el Derecho Mercantil Internacional.</p>
                <p class="text-justify">Actualmente se desempeña como Directora de Derecho Internacional Privado en la Consultoría Jurídica de la Secretaría de Relaciones Exteriores, proporcionando seguimiento y análisis de los tópicos jurídicos que se encuentran en discusión en los foros internacionales especializados en materia de Derecho Internacional Privado, como la Conferencia de La Haya de Derecho Internacional Privado (HCCH); la Comisión de Naciones Unidas para el Derecho Mercantil Internacional (UNCITRAL); el Instituto Internacional para la Unificación del Derecho Privado (UNIDROIT); y el Comité Jurídico Interamericano.</p>
                <p class="text-justify">En el desempeño de sus funciones, ha sido integrante de las Delegaciones de México que han participado en los períodos de sesiones de los seis Grupos de Trabajo de la Comisión de Naciones Unidas para el Derecho Mercantil Internacional (UNCITRAL). Adicionalmente, ha participado en las reuniones y actividades de los Grupos de Trabajo y Expertos de la Conferencia de La Haya de Derecho Internacional Privado (HCCH)</p>
                <p class="text-justify">A partir de 2021, participa como representante de México en el Grupo de Trabajo sobre Jurisdicción de la Conferencia de La Haya de Derecho Internacional Privado.</p>
                <p class="text-justify">Desde 2021, coordina el evento que se celebra en México con motivo del Día de UNCITRAL en América Latina y el Caribe, iniciativa que ha consolidado la Comisión de Naciones Unidas para el Derecho Mercantil Internacional (UNCITRAL) para acercar a las nuevas generaciones de abogados la labor que realiza la Organización en pro de la armonización y desarrollo progresivo del Derecho Mercantil Internacional.</p>
            </div>
        </div>
    </div>
</div>
<!----------------------------------->
<!-----**** Dra. Irene López Faugier ****----->
<div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="modal10" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal10LongTitle"><img src="./assets/logos/logo_sec.png" alt="9TCPI" width="80px">&nbsp;&nbsp;Dra. Irene López Faugier</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-justify">Doctora y Maestra en Derecho con mención honorifica por la División de Estudios de Posgrado de la Facultad de Derecho de la UNAM.</p>
                <p class="text-justify">Especialista en Derecho Procesal y Derecho Civil por la Universidad de Salamanca, España.</p>
                <p class="text-justify">Desde 1997 es catedrática de la Facultad de Derecho de la UNAM en las materias de Derecho Familiar; Familia y Sucesiones; Temas de Derecho Familiar; Procesal Civil, Procesal Familiar y Ambiental, en los distintos sistemas de educación, como son: escolarizado, abierto, distancia y Posgrado.</p>
                <p class="text-justify">Profesora de Carrera Tempo Completo de la Facultad de Derecho de la Universidad Nacional Autónoma de México.</p>
                <p class="text-justify">Autora de diversos artículos en materia familiar, género, civil, procesal y ambiental, así como del libro "La prueba científica de la filiación” editado por Porrúa.</p>
                <p class="text-justify">Amplia trayectoria como consultora, abogada postulante, funcionario judicial y de procuración de justicia.</p>
            </div>
        </div>
    </div>
</div>
<!----------------------------------->
<!-----**** Mtro. Teofilo Abdo Kuri ****----->
<div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="modal11" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal11LongTitle"><img src="./assets/logos/logo_sec.png" alt="9TCPI" width="80px">&nbsp;&nbsp;Mtro. Teófilo Abdo Kuri</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-justify">Juez Séptimo de Proceso Oral en Materia Familiar del Tribunal Superior de Justicia de la Ciudad de México, Juez de Enlace en el Centro de Justicia para las Mujeres en la Aalcaldía Iztapalapa y de Tutela de Derechos Humanos de la Ciudad de México.</p>
                <p class="text-justify">Instituciones de Egreso: Benemérita Escuela Nacional de Maestros; Facultad de Derecho, Universidad Nacional Autónoma de México; Colegio Universitario del Distrito Federal; Instituto de Ciencias Jurídicas de Estudios Superiores; Universidad de Barcelona.</p>
                <p class="text-justify">Trayectoria en el Tribunal Superior de Justicia de la Ciudad de México: Secretario de Acuerdos “A” del Juzgado Primero y Octavo de lo Familiar; Titular de Juzgados Noveno, Sexto y Primero Familiar; Magistrado por Ministerio de Ley en la Primera y Tercera Sala Familiar, Juez Séptimo de Proceso Oral en Materia Familiar, Juez de Enlace en el Centro de Justicia para las Mujeres en la Alcaldía Iztapalapa y de Tutela de Derechos Humanos de la Ciudad de México.</p>
                <p class="text-justify">Experiencia Académica: Profesor en Escuelas Primarias Oficiales de la Secretaría de Educación Pública; Catedrático en el Instituto de Estudios Judiciales del Tribunal Superior de Justicia de la Ciudad de México; Colegio Universitario de la Ciudad de México; Instituto de Ciencias Jurídicas de Estudios Superiores; Universidad Nacional Autónoma de México; Universidad Autónoma de Chihuahua; Universidad Autónoma de Guerrero; Instituto Nacional de Desarrollo Jurídico; Universidad de Colima; Tribunal Superior de Justicia del Estado de Colima; Centro de Capacitación Profesional de Alto Rendimiento en la Ciudad de Querétaro, Querétaro; Colegio de Derecho, Estudios e Investigaciones Jurídicas; Instituto Williams Keembol en la Ciudad de Xalapa, Veracruz; Instituto Profesional Educativo del Sureste, Tuxtla Gutiérrez, San Cristóbal de las Casas, Chiapas; Instituto Cejuma de Tijuana, Estado de Baja California; Universidad de Sotavento A.C., Coatzacoalcos, del Poder Judicial del Estado de Veracruz; Universidad Tepantlato; Tribunal Superior de Justicia, Consejo de la Judicatura y Escuela Judicial de Xalapa, Estado de Veracruz; Poder Judicial del Estado de Coahuila de Zaragoza; Jurado Calificador del Segundo Concurso de Oratoria en Derechos Humanos y Género, en el Poder Judicial de la Ciudad de México; Universidad IUS SEMPER; Facultad Libré de Derecho de Chiapas A.C., Universidad Mesoamericana A.C., San Cristóbal de las Casas, Chiapas.</p>
                <p class="text-justify">Obra Editorial: Ensayos, Ponencias y Artículos en los temas de Educación y Cultura de la Legalidad; Educación y Derechos de la Mujer; Pensamiento Crítico y Argumentación; El Perfil del Juez Familiar en los Juicios Orales; Calidad de Vida del Ser Humano; Proyecto de Vida; Ética Judicial; Facultades Discrecionales del Juez de lo Familiar; Controversias del Orden Familiar; Formalidades en las Controversias del Orden Familiar; Medios Alternativos de Solución; La Conciliación como un medio necesario para la resolución de conflictos; Mecanismos para preservar la armonía e integración familiar; Divorcio sin causal; Técnicas de Litigio; Derechos Humanos; Perspectiva y Equidad de Género; Juicio Oral Familiar; Principios del Derecho Familiar, Amparo; Interrogatorio y Contrainterrogatorio; Debate; Argumentación Lógica y Falacias, Ética, Moral y Justicia.</p>
            </div>
        </div>
    </div>
</div>
<!----------------------------------->
<!-----**** Andrés Camilo Hernández Ramírez ****----->
<div class="modal fade" id="modal12" tabindex="-1" role="dialog" aria-labelledby="modal12" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal12LongTitle"><img src="./assets/logos/logo_sec.png" alt="9TCPI" width="80px">&nbsp;&nbsp;Andrés Camilo Hernández Ramírez</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-justify fw-bold">Cónsul General de Colombia en México</p>
                <p class="text-justify">Comunicador Social y periodista, ha trabajado por más de ocho años en medios de comunicación como Caracol Radio y RCN Radio, se ha desempeñado como jefe de comunicaciones y prensa durante más de seis años del hoy presidente de Gustavo Petro.</p>
                <p class="text-justify">Hizo parte en 2018 de la Unidad de Trabajo Legislativo en Senado de la República hasta julio de 2022, como asesor del Senador Gustavo Petro, desempeñando las funciones de jefe de prensa y liderando las investigaciones como Odebrecht, violación de DDHH, bombardeo a menores y el entrampamiento a la paz.</p>
                <p class="text-justify">Tiene experiencia en Derechos Humanos, DIH y ha trabajado de la mano con el observatorio de Derechos Humanos de INDEPAZ en temas migratorios y violaciones de derechos Humanos derivados al conflicto armado, ha participado en diplomados sobre comunicación visual y nuevas narrativas y BRICS – América Latina: Desarrollo Emergente y Crisis Global.</p>
                <p class="text-justify">Fue columnista de opinión de Publimetro Colombia y es activista de la población LGBTIQ desde hace más de 16 años en el país.</p>
            </div>
        </div>
    </div>
</div>
<!----------------------------------->
<!-----**** Mtra. Anameli Dávalos Vázquez ****----->
<div class="modal fade" id="modal13" tabindex="-1" role="dialog" aria-labelledby="modal13" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal13LongTitle"><img src="./assets/logos/logo_sec.png" alt="9TCPI" width="80px">&nbsp;&nbsp;Mtra. Anameli Dávalos Vázquez</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-justify">Coordinadora de Servicios Legales en la Dirección General de Asuntos Jurídicos de la Secretaría de Relaciones Exteriores, desde el 1 de julio de 2021.</p>
                <p class="text-justify">Recientemente ha formado parte del equipo coordinador de la Dirección General de Asuntos Jurídicos de los Foros de Nacionalidad organizados por la Cancillería, donde también ha tenido participación en los Conversatorios.</p>
                <p class="text-justify">Es Maestra en Derecho por parte de la Universidad Nacional Autónoma de México.</p>
                <p class="text-justify">Asimismo tiene el grado de Especialista en Derecho Internacional Público, por la misma casa de estudios.</p>
                <p class="text-justify">Y es Licenciada en Derecho por la Universidad La Salle.</p>
                <p class="text-justify">Tiene una trayectoria profesional de más de 20 años, principalmente en la Administración Pública Federal, ocupando diversos puestos en áreas jurídicas, siendo los últimos:</p>
                <ul>
                    <li>Directora de lo Consultivo y de Normatividad en la Secretaría de Relaciones Exteriores.</li>
                    <li>Directora de lo Consultivo en la Secretaría de Turismo.</li>
                </ul>
                <p class="text-justify">Asimismo, ha ocupado diversos cargos en áreas jurídicas órganos autónomos y órganos administrativos desconcentrados, como son:</p>
                <ul>
                    <li>Instituto Federal de Acceso a la Información y Protección de Datos, actualmente Instituto Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales, donde fue integrante del equipo pionero en la implementación de la entonces nueva Ley de Protección de Datos Personales en Posesión de Particulares, en la Dirección General de Sustanciación y Sanción.</li>
                    <li>Procuraduría General de la República, donde laboró en la Oficialía Mayor.</li>
                    <li>Instituto Nacional de Migración, donde estuvo en diversas áreas de la Coordinación Jurídica.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!----------------------------------->
<!-----**** Mag. Oscar Gregorio Cervera Rivero ****----->
<div class="modal fade" id="modal14" tabindex="-1" role="dialog" aria-labelledby="modal14" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal14LongTitle"><img src="./assets/logos/logo_sec.png" alt="9TCPI" width="80px">&nbsp;&nbsp;Mag. Oscar Gregorio Cervera Rivero</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-justify">Nombrado Magistrado del Tribunal Superior de Justicia del Distrito Federal en Agosto del 2000.</p>
                <p class="text-justify">Trayectoria en el TSJDF: Magistrado de la Tercera Sala Civil del 2000 al 2004 y a partir de 2005 Magistrado de la Segunda Sala Familiar.</p>
                <p class="text-justify">Ratificado por la Asamblea Legislativa del Distrito Federal el 18 de Agosto del 2006.</p>
                <p class="text-justify fw-bold">Otros:</p>
                <ul class="text-start">
                    <li>Juez de Enlace Mexicano en Materia de Restitución Internacional ante la Hague Conference on Private International Law (Conferencia de La Haya en Derecho Internacional Privado).</li>
                    <li>Miembro de la Asociación Internacional de Jueces en Materia de Familia.</li>
                    <li>Impulsor e integrante de la Red Mexicana de Cooperación Judicial para la protección de la Niñez, fundada en 2010.</li>
                    <li>Participante en la 5a (2006) y 6a (2011 y 2012) reuniones de la Comisión Especial para la evaluación del funcionamiento de la Conferencia de La Haya.</li>
                    <li>Integrante del Grupo de Trabajo para la elaboración de una Guía de “Buenas Prácticas, respecto al artículo 13, primer párrafo, inciso b), de la Convención sobre Aspectos Civiles de la Sustracción Internacional de Menores” (Excepción de Grave Riesgo).</li>
                    <li>Integrante de la Delegación mexicana que participó en la Reunión de la Red Internacional de Jueces de la Conferencia de La Haya, especializados en asuntos de Familia, celebrada en Cumberland Lodge, en Windsor Great Park, Reino Unido, llevada a cabo del 16 al 20 de julio del 2013.</li>
                    <li>Integrante de la Delegación mexicana ante la APEC en los años (2013 y 2015), llevada a cabo en Seúl Corea del Sur, para la evaluación de la eficacia de los sistemas jurídicos de los países afiliados.</li>
                    <li>Integrante de la Delegación Mexicana en las reuniones de trabajo ante la ONU para la Sustentación del IV y V Informes consolidados sobre el cumplimiento en nuestro País, de la Convención sobre los Derechos del Niño, celebrada los días 18 y 20 de Mayo del año 2015, en Ginebra, Suiza.</li>
                    <li>Doctor en Derecho y además actualmente, candidato a doctor en Administración y Gobierno del Poder Judicial, Instituto de Investigaciones Jurídicas de la UNAM e Instituto de Estudios Judiciales del TSJDF.</li>
                    <li>Miembro Numerario de la AMEDIP, Academia Mexicana de Derecho Internacional Privado.</li>
                </ul>
                <p class="text-justify"></p>
            </div>
        </div>
    </div>
</div>
<!----------------------------------->
<!-----**** Mag. Numerario Alberto Pérez Gasca ****----->
<div class="modal fade" id="modal15" tabindex="-1" role="dialog" aria-labelledby="modal15" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal15LongTitle"><img src="./assets/logos/logo_sec.png" alt="9TCPI" width="80px">&nbsp;&nbsp;Mag. Numerario Alberto Pérez Gasca</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-justify">Es Licenciado en Derecho por la Universidad Veracruzana (UV), egresado de la generación 1984-1988, diplomado en Administración Pública en el Instituto Nacional de Administración Pública (INAP) en 1993, postgraduado por la Universidad Panamericana (UP) en la especialidad de Derecho Administrativo, generación 2004 y Maestro de Derecho Procesal Constitucional por la Universidad Tecnológica Latinoamericana en línea (UTEL) generación 2018-2019.</p>
                <p class="text-justify">En 1987, inició su carrera profesional como agente del ministerio público municipal. Al concluir los estudios de licenciatura, fue designado por el Procurador General de Justicia del Estado de Veracruz agente del ministerio público del fuero común adscrito al Juzgado Mixto Menor en esta ciudad de San Andrés Tuxtla.</p>
                <p class="text-justify">En 1991, mediante curso de oposición, ingresó a la Procuraduría General de la República (PGR) como agente del ministerio público federal en materia de estupefacientes y psicotrópicos.</p>
                <p class="text-justify">Con las reformas Constitucionales de 1992, se incorporó al sector agrario como servidor público de carrera, en donde ha realizado diversas funciones:</p>
                <p class="text-justify">En la Procuraduría Agraria (PA) se desempeñó como jefe de departamento jurídico en Xalapa, Veracruz; subdelegado jurídico en Tuxtla Gutiérrez, Chiapas; delegado estatal en Tlaxcala y Oaxaca y director general Jurídico y de Representación Agraria.</p>
                <p class="text-justify">En el Registro Agrario Nacional (RAN) fue director de Recursos Humanos y Materiales.</p>
                <p class="text-justify">En la extinta Secretaría de la Reforma Agraria (SRA) hoy Secretaría de Desarrollo Agrario, Territorial y Urbano (SEDATU) fue Consejero Agrario Titular del Presidente de le República en diversos estados de la República. Fue director de Cumplimiento de Ejecutorias, Director General de Asuntos Jurídicos y Jefe de Unidad de Asuntos Jurídicos. Estuvo al frente de los aspectos jurídicos de esa secretaría de estado durante ocho años, el período más largo en que un servidor público haya ejercido tal responsabilidad, hasta el momento.</p>
                <p class="text-justify">En la actividad docente, ha impartido las cátedras de Derecho Agrario y Derecho Procesal Agrario en la Facultad de Derecho de la Universidad Nacional Autónoma de México (Ciudad Universitaria).</p>
                <p class="text-justify">Ha impartido cursos y conferencias relacionadas con el Derecho Agrario en diversos congresos, coloquios, foros nacionales, universidades públicas y privadas.</p>
                <p class="text-justify">Tuvo el alto honor de representar a la Secretaría de Reforma Agraria en las delegaciones del Gobierno Mexicano ante la Comisión Interamericana de Derechos Humanos, en Washington, D.C., en marzo de 2011; en el coloquio organizado por el Instituto Internacional por la Unificación del Derecho Privado (UNIDROIT), celebrado en la ciudad de Roma, Italia, en noviembre de 2011; en el Seminario sobre la dinámica del mercado de la tierra en América Latina y El Caribe, auspiciado por la Organización de las Naciones Unidas para la Alimentación y la Agricultura (FAO), realizado en Santiago de Chile, en 2011 y en la sustentación de los 16º y 17º informes consolidados, presentados ante la Convención Internacional sobre la eliminación de todas las formas de discriminación racial de la Organización de las Naciones Unidas, en febrero de 2012, en la ciudad de Ginebra, Suiza.</p>
                <p class="text-justify">Fue propuesto por el presidente de los Estados Unidos Mexicanos para ser designado magistrado unitario agrario, rindiendo protesta del encargo el 29 de mayo de 2012 ante el Senado de la República, fue titular de los Distritos 54, 31 y 40, los Distritos 31 y 40 fueron atendidos de manera simultánea y de manera óptima, fue ratificado en el mes de diciembre de 2020.</p>
                <p class="text-justify">Fue propuesto por el presidente de la República para ocupar el cargo de Magistrado Numerario del Tribunal Superior Agrario, siendo designado en este encargo por el Senado Mexicano en el mes de mayo de 2021.</p>
            </div>
        </div>
    </div>
</div>
<!----------------------------------->
<!-----**** Maribel Concepción Méndez de Lara ****----->
<div class="modal fade" id="modal16" tabindex="-1" role="dialog" aria-labelledby="modal16" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal16LongTitle"><img src="./assets/logos/logo_sec.png" alt="9TCPI" width="80px">&nbsp;&nbsp;Maribel Concepción Méndez de Lara</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-justify">Nació en Villanueva, Zacatecas.</p>
                <p class="text-justify">Licenciada en Derecho por la Universidad Autónoma de Zacatecas, con Maestría en Gestión Pública por el CIDE. Doctoranda en Administración del Poder Judicial en la Escuela del Poder Judicial de la CDMX.</p>
                <p class="text-justify">30 años de experiencia en materia agraria, 20 años en instituciones agrarias de la Administración Pública Federal (PA-SRA hoy SEDATU, FIFONAFE), y hace 10 años nombrada por la Comisión Permanente, como Magistrada Numeraria al Pleno del Tribunal Superior Agrario.</p>
                <p class="text-justify">Autora del libro “El Ejido y la Comunidad en el México del Siglo XXI – La Transición Agraria 1992-2015”, así como coordinadora de la obra Derecho Agrario en la Función Jurisdiccional, en el que participan 10 magistradas agrarias, en el que elaboró el artículo “El dilema de la justicia en la acción de restitución en materia agraria”.</p>
                <p class="text-justify">Trabaja por la igualdad de derechos de mujeres y hombres, por la equidad y el estado de derecho.</p>
                <p class="text-justify">Actualmente es Presidenta del Tribunal Superior Agrario, designada en sesión administrativa del 15 de diciembre de 2020.</p>
            </div>
        </div>
    </div>
</div>
<!----------------------------------->
<!-----**** Dr. Andrés Linares Carranza ****----->
<div class="modal fade" id="modal17" tabindex="-1" role="dialog" aria-labelledby="modal17" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal17LongTitle"><img src="./assets/logos/logo_sec.png" alt="9TCPI" width="80px">&nbsp;&nbsp;Dr. Andrés Linares Carranza</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-justify">Consejero de la Judicatura de la Ciudad de México.</p>
                <p class="text-justify">Nació en la Ciudad de México, Distrito Federal realizó sus estudios de Licenciatura en la Facultad de Derecho de la Universidad Nacional Autónoma de México, en donde también realizó la Especialidad de Derecho Privado y diversos cursos de actualización en materia Civil y de Amparo, realizó las Especialidades de Sistema Penitenciario y menores infractores, así como de Derechos Humanos y Victimología y la Maestría en Prevención del Delito y Sistemas Penitenciarios en el Instituto de Prevención del Delito y Estudios Penitenciarios, el Diplomado de Derecho Familiar en el Centro de Estudios Judiciales.</p>
                <p class="text-justify">Es maestro de asignatura en la Facultad de Derecho de la Universidad Nacional Autónoma de México de Derecho Familiar y Teoría del Proceso, y maestro titular de Derecho Procesal Civil y Derecho Sucesorio, además de impartir clases en posgrado en materia de Derecho Probatorio y Procesal Familiar en la Máxima casa de estudios y en diversas universidades privadas.</p>
                <p class="text-justify">Ha desempeñado los siguientes cargos: asesor jurídico de la policía auxiliar del Distrito Federal; Secretario de Acuerdos de Juzgado Mixto de Paz del Ramo Civil, Secretario de Acuerdos de Juzgado Familiar y Juez de lo Familiar del Tribunal Superior de Justicia del Distrito Federal, Director General del Ministerio Público en lo Civil y Familiar, Coordinador de Asuntos de Menores e incapaces y Director General del Ministerio Público de lo Familiar y todos estos cargos en la Procuraduría General de justicia del Distrito Federal hoy Fiscalía General de la Ciudad de México; Director de Asistencia Jurídica del Sistema Nacional para el Desarrollo Integral de la Familia, Secretario de Acuerdos del Juzgado Primero de Distrito en Materia Civil del Primer Circuito en el Distrito Federal, Secretario Proyectista de la Séptima Sala Civil del Tribunal Superior de Justicia del Distrito Federal, nuevamente se desempeño como Juez de lo Familiar, asimismo fue designado como miembro de la Red Nacional de Cooperación Judicial y Protección para la Niñez, teniendo el cargo de Secretario Técnico de la misma desde febrero del 2010 hasta el Abril del 2012; asimismo es especialista en Restitución Internacional. Fue designado por la Asamblea Legislativa del Distrito Federal como Magistrado del Tribunal Superior de Justicia del Distrito Federal a partir del 8 de noviembre del año 2011, Magistrado integrante de la Quinta Sala Familiar del Tribunal Superior de Justicia de la Ciudad de México.</p>
                <p class="text-justify">Actualmente se desempeña como Consejero de la Ponencia 1 del Consejo de la Judicatura de la Ciudad de México.</p>
                <p class="text-justify">Correo electrónico: andres.linares@cjcdmx.gob.mx</p>
            </div>
        </div>
    </div>
</div>
<!----------------------------------->
<!-----**** Mtra. Dulce María Mejía Cortés ****----->
<div class="modal fade" id="modal18" tabindex="-1" role="dialog" aria-labelledby="modal18" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal18LongTitle"><img src="./assets/logos/logo_sec.png" alt="9TCPI" width="80px">&nbsp;&nbsp;Mtra. Dulce María Mejía Cortés</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-justify">Dirección General de Representación Jurídica y Restitución de Derechos de Niñas, Niños y Adolescentes en la Procuraduría Federal de Protección Niñas, Niños y Adolescentes en el Sistema Nacional para el Desarrollo Integral de la Familia.</p>
                <p class="text-justify">Licenciada en Derecho, Especialista en Derecho Penal y Maestra en Derecho. Titulada en las tres con Mención Honorífica por la Facultad de Derecho de la Universidad Nacional Autónoma de México.</p>
                <p class="text-justify">Directora General de Representación Jurídica y Restitución de Derechos de Niñas, Niños y Adolescentes en la Procuraduría Federal de Protección de Niñas, Niños y Adolescentes en el Sistema Nacional para el Desarrollo Integral de la Familia. En donde tiene a su cargo la representación jurídica en suplencia ó coadyuvancia en procedimientos administrativos ó jurisdiccionales, gestión de acciones para la restitución integral de derechos de niñas, niños y adolescentes, así como la revisión de medidas de protección integral y restitución de derechos, especiales y urgentes en favor de niñas, niños y adolescentes cuyos derechos han sido vulnerados.</p>
                <p class="text-justify">En su trayectoria profesional, ha desempeñado diversos cargos en la Procuraduría General de Justicia de la Ciudad de México, hoy Fiscalía General:</p>
                <ul class="text-start">
                    <li>Fiscal de Análisis y Opinión.</li>
                    <li>Agente del Ministerio Público Supervisor.</li>
                    <li>Directora de Relaciones Laborales.</li>
                    <li>Agente del Ministerio Público.</li>
                </ul>
                <p class="text-justify">En la Secretaría de Seguridad Pública de la Ciudad de México, hoy Secretaría de Seguridad Ciudadana de la Ciudad de México, ocupó el cargo de Secretaria Particular de la Subsecretaría de Prevención del Delito y Participación Ciudadana.</p>
                <p class="text-justify">Asimismo, cuenta con capacitación y actualización en materia de Sistema Penal Acusatorio, Derechos de Niñas, Niños y Adolescentes, Adopciones, Acogimiento Familiar, Perspectiva de Género, entre otras.</p>
            </div>
        </div>
    </div>
</div>
<!----------------------------------->
<!-----**** Mtro. Carlos E. Odriozola  Mariscal ****----->
<div class="modal fade" id="modal19" tabindex="-1" role="dialog" aria-labelledby="modal19" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-color">
                <h5 class="modal-title font-white" id="modal19LongTitle"><img src="./assets/logos/logo_sec.png" alt="9TCPI" width="80px">&nbsp;&nbsp;Mtro. Carlos E. Odriozola Mariscal</h5>
                <button type="button" class="close font-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="text-justify">Egresado de la Facultad de Derecho de la Universidad Nacional Autónoma de México, ha cursado diversas especialidades, diplomados y cursos en las Universidades de Salamanca, Harvard, Federica de Nápoles, Panamericana, El Colegio de México e Instituto de Investigaciones Jurídicas de la UNAM.</p>
                <p class="text-justify">Estudió la Maestría en Derecho Internacional en la División de Estudios de Posgrado de la UNAM, en donde forma parte del claustro de profesores al haber impartido diversas cátedras relativas al Derecho internacional y los derechos humanos.</p>
                <p class="text-justify">Actualmente es Doctorando por la misma Universidad en donde su investigación aborda el funcionamiento de las redes judiciales para una mejor cooperación procesal internacional.</p>
                <p class="text-justify">Fue Presidente de la junta de gobierno de la Academia Mexicana de Derecho Internacional Privado y Comparado, A.C. (AMEDIP) y es miembro pleno de la Asociación Americana de Derecho Internacional Privado (ASADIP).</p>
                <p class="text-justify">Ha publicado numerosos artículos en materia de Derecho procesal internacional, litigio estratégico y Derechos humanos. Es autor del libro “El seguro de título inmobiliario”, única obra en lengua hispana sobre dicha figura anglosajona.</p>
                <p class="text-justify">Ha obtenido diversos premios de investigación jurídica en México, incluidos el primer lugar del Concurso de Ensayo Jurídico para celebrar el 50 aniversario del Instituto de Investigaciones Jurídicas de la UNAM y el primer lugar del Concurso literario sobre la Justicia, organizado por el Tribunal Superior de Justicia de la Ciudad de México conmemorativo de los 150 años de su fundación.</p>
                <p class="text-justify">Es Director General de Bufete Odriozola, S.C., firma de abogados litigantes en materia civil, familiar, mercantil y amparo desde hace 28 años. Es Presidente del CENTRO CONTRA LA DISCRIMNACION, AC (CECODI), en donde ha realizado una importante labor social a través de litigio estratégico en derechos humanos desde hace más de 15 años.</p>
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
                    <li><a class="nav-link scrollto" href="#semblanzas">Semblanzas</a></li>
                    <li><a class="nav-link scrollto" href="#ponencias">Ponencias</a></li>
                    <li><a class="getstarted scrollto" href="./partials/outt.php"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Salir</a></li>
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
        <h2>31 de mayo, 1 y 2 de junio, Ciudad de México</h2>
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
                <iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe" src="https://heyzine.com/flip-book/2d7fc65d93.html" style="border: 0px; width: 100%; height: 600px;"></iframe>
            </div>
        </div>
    </section><!-- End Cta Section -->
    <!-- ======= Semblanzas Section ======= -->
    <section id="semblanzas" class="services section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Semblanzas</h2>
                        <p>Mira las semblanzas curriculares de los Ponentes del 9° Taller de Cooperación Procesal Internacional 2023</p>
                    </div>
                </div>
                <div class="col-lg-8"  style="max-height: 600px!important; overflow: auto;">
                    <div class="row" data-aos="fade-left"  data-aos-delay="200">
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <h4>Katerina V. Ossenova</h4>
                                <p>Da clic en el botón para consultar la semblanza curricular de la ponente:</p><br>
                                <button type="button" class="btn btn-light bg-primary-color" data-toggle="modal" data-target="#modal1">Ver semblanza</button>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch mt-4 mt-lg-0">
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <h4>Christine Darden Brennan</h4>
                                <p>Da clic en el botón para consultar la semblanza curricular de la ponente:</p><br>
                                <button type="button" class="btn btn-light bg-primary-color" data-toggle="modal" data-target="#modal2">Ver semblanza</button>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch mt-4 mt-lg-0">
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <h4>Liliana Oliva Bernal</h4>
                                <p>Da clic en el botón para consultar la semblanza curricular de la ponente:</p><br>
                                <button type="button" class="btn btn-light bg-primary-color" data-toggle="modal" data-target="#modal3">Ver semblanza</button>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch mt-4">
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <h4>Dra. María José Rodríguez Rocha</h4>
                                <p>Da clic en el botón para consultar la semblanza curricular de la ponente:</p><br>
                                <button type="button" class="btn btn-light bg-primary-color" data-toggle="modal" data-target="#modal4">Ver semblanza</button>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch mt-4">
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <h4>Dr. Manuel Ferreira Catoira</h4>
                                <p>Da clic en el botón para consultar la semblanza curricular del ponente:</p><br>
                                <button type="button" class="btn btn-light bg-primary-color" data-toggle="modal" data-target="#modal5">Ver semblanza</button>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch mt-4">
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="600">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <h4>Maxwel Aurora Flores Rico</h4>
                                <p>Da clic en el botón para consultar la semblanza curricular de la ponente:</p><br>
                                <button type="button" class="btn btn-light bg-primary-color" data-toggle="modal" data-target="#modal6">Ver semblanza</button>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch mt-4">
                            <div class="icon-box">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <h4>Arnaldo Silveira</h4>
                                <p>Da clic en el botón para consultar la semblanza curricular del ponente:</p><br>
                                <button type="button" class="btn btn-light bg-primary-color" data-toggle="modal" data-target="#modal7">Ver semblanza</button>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch mt-4">
                            <div class="icon-box">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <h4>Claudia Sierra Martínez</h4>
                                <p>Da clic en el botón para consultar la semblanza de la ponente: </p><br>
                                <button type="button" class="btn btn-light bg-primary-color" data-toggle="modal" data-target="#modal8">Ver semblanza</button>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch mt-4">
                            <div class="icon-box">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <h4>Martha Angélica Álvarez Rendón</h4>
                                <p>Da clic en el botón para consultar la semblanza curricular de la ponente:</p><br>
                                <button type="button" class="btn btn-light bg-primary-color" data-toggle="modal" data-target="#modal9">Ver semblanza</button>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch mt-4">
                            <div class="icon-box">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <h4>Dra. Irene López Faugier</h4>
                                <p>Da clic en el botón para consultar la semblanza curricular de la ponente:</p><br>
                                <button type="button" class="btn btn-light bg-primary-color" data-toggle="modal" data-target="#modal10">Ver semblanza</button>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch mt-4">
                            <div class="icon-box">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <h4>Mtro. Teofilo Abdo Kuri</h4>
                                <p>Da clic en el botón para consultar la semblanza curricular del ponente:</p><br>
                                <button type="button" class="btn btn-light bg-primary-color" data-toggle="modal" data-target="#modal11">Ver semblanza</button>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch mt-4">
                            <div class="icon-box">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <h4>Andrés Camilo Hernández Ramírez</h4>
                                <p>Da clic en el botón para consultar la semblanza curricular del ponente:</p><br>
                                <button type="button" class="btn btn-light bg-primary-color" data-toggle="modal" data-target="#modal12">Ver semblanza</button>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch mt-4">
                            <div class="icon-box">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <h4>Mtra. Anameli Dávalos Vázquez</h4>
                                <p>Da clic en el botón para consultar la semblanza curricular de la ponente:</p><br>
                                <button type="button" class="btn btn-light bg-primary-color" data-toggle="modal" data-target="#modal13">Ver semblanza</button>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch mt-4">
                            <div class="icon-box">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <h4>Mag. Oscar Gregorio Cervera Rivero</h4>
                                <p>Da clic en el botón para consultar la semblanza curricular del ponente:</p><br>
                                <button type="button" class="btn btn-light bg-primary-color" data-toggle="modal" data-target="#modal14">Ver semblanza</button>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch mt-4">
                            <div class="icon-box">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <h4>Mag. Numerario Alberto Pérez Gasca</h4>
                                <p>Da clic en el botón para consultar la semblanza curricular del ponente:</p><br>
                                <button type="button" class="btn btn-light bg-primary-color" data-toggle="modal" data-target="#modal15">Ver semblanza</button>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch mt-4">
                            <div class="icon-box">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <h4>Maribel Concepción Méndez de Lara</h4>
                                <p>Da clic en el botón para consultar la semblanza curricular de la ponente:</p><br>
                                <button type="button" class="btn btn-light bg-primary-color" data-toggle="modal" data-target="#modal16">Ver semblanza</button>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch mt-4">
                            <div class="icon-box">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <h4>Dr. Andrés Linares Carranza</h4>
                                <p>Da clic en el botón para consultar la semblanza curricular del ponente:</p><br>
                                <button type="button" class="btn btn-light bg-primary-color" data-toggle="modal" data-target="#modal17">Ver semblanza</button>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch mt-4">
                            <div class="icon-box">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <h4>Mtra. Dulce María Mejía Cortés</h4>
                                <p>Da clic en el botón para consultar la semblanza curricular del ponente:</p><br>
                                <button type="button" class="btn btn-light bg-primary-color" data-toggle="modal" data-target="#modal18">Ver semblanza</button>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch mt-4">
                            <div class="icon-box">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <h4>Mtro. Carlos E. Odriozola  Mariscal</h4>
                                <p>Da clic en el botón para consultar la semblanza curricular del ponente:</p><br>
                                <button type="button" class="btn btn-light bg-primary-color" data-toggle="modal" data-target="#modal19">Ver semblanza</button>
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

    <!-- ======= Sección Ponencias ======= -->
    <section id="ponencias" class="team">
        <div class="container">
            <div class="text-center" data-aos="zoom-in">
                <!--<h3></h3>-->
                <div class="section-title" data-aos="fade-right" data-aos-delay="100">
                    <h2>Ponencias</h2>
                </div>
                <!----Inicio Inauguración---->
                <div class="row wow" data-aos="fade-left" data-aos-delay="300">
                    <div class="col-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="" id="">
                                <ul class="list-group">
                                    <li class="list-group-item text-center">
                                        <div class="jumbotron jumbotron-fluid">
                                            <div class="container">
                                                <h1 class="display-6">Inauguración</h1>
                                                <p class="lead">Dr. Rafael Guerra Álvarez</p>
                                                <p class="small">Magistrado Presidente de la Comisión Nacional de Tribunales Superiores de Justicia de los Estados Unidos Mexicanos y del Poder Judicial de la Ciudad de México</p>
                                                <p class="lead">Dirección General de Asuntos Jurídicos</p>
                                                <p class="small">Secretaría de Relaciones Exteriores</p>
                                                <button type="button" class="btn btn-secondary btn-sm mb-20 bg-primary-color" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Ver mensaje</button>
                                                <div class="collapse" id="collapseExample">
                                                    <div class="card card-body">
                                                        <!-- 1. Video Wrapper Container -->
                                                        <div class="embed-youtube" data-video-id="mzpjiUpHobY">
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
                <!-------Begin Ponencias------>
                <div class="row wow fadeInRight">
                    <div class="col-12">
                        <nav>
                            <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                                <a class="nav-link active font-primary-color" id="nav-one-tab" data-toggle="tab" href="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true">31 de Mayo</a>
                                <a class="nav-link font-primary-color" id="nav-two-tab" data-toggle="tab" href="#nav-two" role="tab" aria-controls="nav-two" aria-selected="false">1 de Junio</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="accordion" id="miercoles31">
                                            <!---Plantilla--->
                                            <!--
                                            <div class="card">
                                                <div class="card-header bg-second-color" id="headingOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-white collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none;">
                                                            Ponencia 1
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        Ponente: <br>
                                                                        <span class="fst-italic"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur excepturi laborum modi officia ratione rerum tempora ullam vel? Beatae blanditiis, et modi quia sit voluptatem! Animi facere modi neque officiis?</span></span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="####">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            -->
                                            <!--Ponencia 1--->
                                            <div class="card">
                                                <div class="card-header bg-second-color" id="headingOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-white collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none;">
                                                            "Cooperación Judicial entre Estados Unidos y México de conformidad con la Convención de la Haya sobre pruebas"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                       <span class="font-ponencia">Ponente: </span><span class="font-ponentes">Lic. Katerina V. Ossenova</span><br>
                                                                        <span class="fst-italic"><span>Oficina de Asistencia Judicial Internacional, División Civil, Departamento de Justicia de los Estados Unidos de América.</span></span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="8YrruMVXm6c">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 1-->
                                            <!-- Begin Ponencia 2-->
                                            <div class="card">
                                                <div class="card-header bg-gray-color" id="heading2">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2" style="text-decoration: none;">
                                                            "Actualización en Materia de Cooperación Procesal Internacional en los Estados Unidos de América"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                       <span class="font-ponencia">Ponente: </span><span class="font-ponentes">Lic. Christine Brennan</span><br>
                                                                        <span class="fst-italic">Abogada a cargo de Litigio Latinoamericano, Departamento de Justicia de EE. UU., Oficina de Litigios Extranjeros, Embajada de los Estados Unidos en Panamá.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="RQLa9zDJ6Ao">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 2-->
                                            <!-- Begin Ponencia 3 - Pendiente Video-->
                                            <div class="card">
                                                <div class="card-header bg-second-color" id="heading3">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-white collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3" style="text-decoration: none;">
                                                            "Práctica mexicana sobre inmunidades y Derecho Procesal"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        <span class="font-ponencia">Ponente: </span><span class="font-ponentes">Mtra. Liliana Olivia Bernal</span><br>
                                                                        <span class="fst-italic">Directora de Litigios I, Consultoría Jurídica de la Secretaría de Relaciones Exteriores.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="iFzv8lTjDTg">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 3-->
                                            <!-- Begin Ponencia 4-->
                                            <div class="card">
                                                <div class="card-header bg-gray-color" id="heading4">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4" style="text-decoration: none;">
                                                            "La Gestación Sustituta y Subrogada en Tabasco"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        <span class="font-ponencia">Ponente: </span><span class="font-ponentes">Mgda. María Isabel Solís García</span><br>
                                                                        <span class="fst-italic">Magistrada Integrante de la Segunda Sala Civil del Tribunal Superior de Justicia del Estado de Tabasco.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="3L8UuJ33aeo">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 4-->
                                            <!-- Begin Ponencia 5-->
                                            <div class="card">
                                                <div class="card-header bg-second-color" id="heading5">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-white collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5" style="text-decoration: none;">
                                                            "Problemáticas en el Procedimiento de Extradición"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        <span class="font-ponencia">Ponente: </span><span class="font-ponentes">Mgdo. Ricardo Paredes Calderón</span><br>
                                                                        <span class="fst-italic">Tercer Tribunal Colegiado en Materia Penal del Segundo Circuito con residencia en Toluca, Estado de México del Consejo de la Judicatura Federal.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="ulehyigkMpc">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 5-->
                                            <!-- Begin Ponencia 6-->
                                            <div class="card">
                                                <div class="card-header bg-gray-color" id="heading6">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6" style="text-decoration: none;">
                                                            "Cobro de Pensiones Alimenticias en el Extranjero"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        <span class="font-ponencia">Ponente: </span><span class="font-ponentes">Lic. Maxwel Aurora Flores Rico</span><br>
                                                                        <span class="fst-italic">Subdirectora de Pensiones Alimenticias y Adopciones Internacionales, Dirección General de Protección Consular y Planeación Estratégica de la de Relaciones Exteriores.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="3h7DOvG4QyI">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 6-->
                                            <!-- Begin Ponencia 7-->
                                            <div class="card">
                                                <div class="card-header bg-second-color" id="heading7">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-white collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7" style="text-decoration: none;">
                                                            "Conferencia de la Haya – Comisión Especial del 2023 sobre la Operación Práctica de los Convenios de Notificaciones (1965), Pruebas (1970) y Acceso a la Justicia (1980)"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        <span class="font-ponencia">Ponente: </span><span class="font-ponentes">EPPGG Arnaldo José Alves Silveira</span><br>
                                                                        <span class="fst-italic">Coordinador General de Cooperación Jurídica Internacional en Materia Civil del Departamento de Recuperación de Activos y Cooperación Jurídica Internacional (DRCI) del Ministerio de Justicia y Seguridad Pública, Autoridad Central de Brasil.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="Lbz-DnHPAv0">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 7-->
                                            <!-- Begin Ponencia 8 Pendiente-->
                                            <div class="card">
                                                <div class="card-header bg-gray-color" id="heading8">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8" style="text-decoration: none;">
                                                            "Prisión Preventiva Oficiosa"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        <span class="font-ponencia">Ponente: </span><span class="font-ponentes">Dr. Rogelio Rodríguez Garduño</span><br>
                                                                        <span class="fst-italic">Universidad Nacional Autónoma de México.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="GxSrVymsQ7E">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 8-->
                                            <!-- Begin Ponencia 9-->
                                            <div class="card">
                                                <div class="card-header bg-second-color" id="heading9">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-white collapsed" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9" style="text-decoration: none;">
                                                            "Medidas Preventivas de Sustracción Internacional de Menores"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        <span class="font-ponencia">Ponente: </span><span class="font-ponentes">Lic. Claudia Sierra Martínez</span><br>
                                                                        <span class="fst-italic">Subdirectora de Restitución y Custodia Internacional de Menores, Dirección General de Protección Consular y Planeación Estratégica de la Secretaría de Relaciones Exteriores.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="BrRKi47JFPc">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 9-->
                                            <!-- Begin Ponencia 10 Pendiente-->
                                            <div class="card">
                                                <div class="card-header bg-gray-color" id="heading10">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10" style="text-decoration: none;">
                                                            "Derecho al olvido, lugar de México en el mundo"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        <span class="font-ponencia">Ponente: </span><span class="font-ponentes">Mtro. Ricardo Vázquez Rosas</span><br>
                                                                        <span class="fst-italic">Dirección General de Asuntos Jurídicos de la Secretaría de Relaciones Exteriores.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="VkOYT3N_60k">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 10-->
                                            <!-- Begin Ponencia 11-->
                                            <div class="card">
                                                <div class="card-header bg-second-color" id="heading11">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-white collapsed" type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="true" aria-controls="collapse11" style="text-decoration: none;">
                                                            "Una mirada al futuro del trabajo de la Conferencia de la Haya sobre el Derecho Internacional Privado en Materia de Cooperación Procesal Internacional"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        <span class="font-ponencia">Ponente: </span><span class="font-ponentes">Lic. Martha Angélica Álvarez Rendón</span><br>
                                                                        <span class="fst-italic">Subdirectora de Derecho Internacional II, Consultoría Jurídica de la Secretaría de Relaciones Exteriores.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="CUGCSddPzwM">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 11-->
                                            <!-- Begin Ponencia 12 Pendiente-->
                                            <div class="card">
                                                <div class="card-header bg-gray-color" id="heading12">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="true" aria-controls="collapse12" style="text-decoration: none;">
                                                            "Medios de Comunicación Jurídico Procesal"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        <span class="font-ponencia">Ponente: </span><span class="font-ponentes">Dr. Andrés Linares Carranza</span><br>
                                                                        <span class="fst-italic">Consejero de la Judicatura de la Ciudad de México.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="EgmHWfRmAuI">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 12-->
                                            <!-- Begin Ponencia 13 Pendiente-->
                                            <div class="card">
                                                <div class="card-header bg-second-color" id="heading13">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-white collapsed" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="true" aria-controls="collapse13" style="text-decoration: none;">
                                                            "Análisis del Tratado de Medellín relativo a la transmisión electrónica de soluciones de cooperación jurídica internacional entre autoridades centrales"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        <span class="font-ponencia">Ponentes: </span><span class="font-ponentes">Dra. María José Rodríguez Rocha<br>Dr. Manuel Ferreira</span><br>
                                                                        <span class="fst-italic">Autoridad Central de Cooperación Jurídica Internacional, Ministerio de Educación y Cultura de Uruguay.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="4HjgyyFzqFk">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 13-->
                                            <!-- Begin Ponencia 14-->
                                            <div class="card">
                                                <div class="card-header bg-gray-color" id="heading14">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="true" aria-controls="collapse14" style="text-decoration: none;">
                                                            "Gestación Asistida: Explotación de mujeres con fines reproductivos"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        <span class="font-ponencia">Ponente: </span><span class="font-ponentes">Dra. Concepción Irene López Faugier</span><br>
                                                                        <span class="fst-italic">Titular Profesora de Carrera de la Facultad de Derecho de la Universidad Nacional Autónoma de México.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="jEkyGuybxO0">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 14-->
                                            <!-- Begin Ponencia 15-->
                                            <div class="card">
                                                <div class="card-header bg-second-color" id="heading15">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-white collapsed" type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="true" aria-controls="collapse15" style="text-decoration: none;">
                                                            "El repudio y la aversión a lo étnico, confrontado a la discriminación racial en México"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        <span class="font-ponencia">Ponente: </span><span class="font-ponentes">Dra. Roxana Rosas Fregoso</span><br>
                                                                        <span class="fst-italic">Investigadora ENID/IIJ UNAM.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="WpPC5kTH3xU">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 15-->
                                            <!-- Begin Ponencia 16-->
                                            <div class="card">
                                                <div class="card-header bg-gray-color" id="heading16">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapse16" aria-expanded="true" aria-controls="collapse16" style="text-decoration: none;">
                                                            "Aplicación del Derecho Extranjero en México y el Código Nacional de Procedimientos Civiles y Familiares"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        <span class="font-ponencia">Ponente: </span><span class="font-ponentes">Mtro. Carlos E. Odriozola Mariscal</span><br>
                                                                        <span class="fst-italic">Academia Mexicana de Derecho Internacional Privado y Comparado, A.C.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="_xwVsgubshY">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 16-->
                                            <!-- Begin Ponencia 17-->
                                            <div class="card">
                                                <div class="card-header bg-second-color" id="heading17">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-white collapsed" type="button" data-toggle="collapse" data-target="#collapse17" aria-expanded="true" aria-controls="collapse17" style="text-decoration: none;">
                                                            "El Orden Público Internacional y la Convención de la Haya de 1980"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        <span class="font-ponencia">Ponente: </span><span class="font-ponentes">Mgdo. Oscar Gregorio Cervera Rivero</span><br>
                                                                        <span class="fst-italic">Magistrado de la Segunda Sala Familiar del Tribunal Superior de Justicia de la Ciudad de México.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="glmdqK2vHT0">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 17-->
                                            <!-- Begin Ponencia 18-->
                                            <div class="card">
                                                <div class="card-header bg-gray-color" id="heading18">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapse18" aria-expanded="true" aria-controls="collapse18" style="text-decoration: none;">
                                                            "Los Derechos Humanos y el Derecho Familiar"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        <span class="font-ponencia">Ponente: </span><span class="font-ponentes">Mtro. Teófilo Abdo Kuri</span><br>
                                                                        <span class="fst-italic">Juez Séptimo de Proceso Oral en Materia Familiar de Enlace en el Centro de Justicia para las Mujeres de la Alcaldía Iztapalapa y de Tutela de Derechos Humanos de la Ciudad de México.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="glmdqK2vHT0">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 18-->
                                            <!-- Begin Ponencia 19-->
                                            <div class="card">
                                                <div class="card-header bg-second-color" id="heading19">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-white collapsed" type="button" data-toggle="collapse" data-target="#collapse19" aria-expanded="true" aria-controls="collapse19" style="text-decoration: none;">
                                                            "Cooperación Procesal, Retos y Avances para una Colombia Potencia Mundial de la Vida"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        <span class="font-ponencia">Ponente: </span><span class="font-ponentes">Cónsul General Andrés Camilo Hernández Ramírez</span><br>
                                                                        <span class="fst-italic">Embajada de Colombia.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="18zgYvy7RHY">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 19-->
                                            <!-- Begin Ponencia 20-->
                                            <div class="card">
                                                <div class="card-header bg-gray-color" id="heading20">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapse20" aria-expanded="true" aria-controls="collapse20" style="text-decoration: none;">
                                                            Convenio de Colaboración suscrito el 1° de diciembre de 2011 entre los Tribunales Agrarios y la Secretaría de Relaciones Exteriores, para agilizar la impartición de Justicia Agraria en Materia de Cartas Rogatorias"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        <span class="font-ponencia">Ponente: </span><span class="font-ponentes">Mtro. Alberto Pérez Gasca</span><br>
                                                                        <span class="fst-italic">Magistrado Numerario del Tribunal Agrario.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="J2OzPen_6fY">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 20-->
                                            <!-- Begin Ponencia 21-->
                                            <div class="card">
                                                <div class="card-header bg-second-color" id="heading21">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-center font-color-white collapsed" type="button" data-toggle="collapse" data-target="#collapse21" aria-expanded="true" aria-controls="collapse21" style="text-decoration: none;">
                                                            "Acuerdo Bilaterales en Materia de Nacionalidad como Mecanismos de Solución de Conflictos"
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse21" class="collapse" aria-labelledby="heading21" data-parent="#miercoles31">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8 offset-2 align-middle">
                                                                <div class="align-center">
                                                                    <p class="font-primary-color text-start">
                                                                        <span class="font-ponencia">Ponente: </span><span class="font-ponentes">Mtra. Anameli Dávalos Vázquez</span><br>
                                                                        <span class="fst-italic">Dirección General de Asuntos Jurídicos de la Secretaría de Relaciones Exteriores.</span>
                                                                    </p>
                                                                    <div class="video-frame mx-auto">
                                                                        <div class="embed-youtube" data-video-id="x1jFvidUx6Q">
                                                                            <div class="embed-youtube-play"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Ponencia 20-->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="accordion" id="jueves1">
                                            <!----Clausura---->
                                            <div class="row wow fadeInUp">
                                                <div class="col-12">
                                                    <div class="tab-content" id="nav-tabContent">
                                                        <div class="" id="">
                                                            <ul class="list-group">
                                                                <li class="list-group-item text-center">
                                                                    <div class="jumbotron jumbotron-fluid">
                                                                        <div class="container">
                                                                            <h1 class="display-6">Mesas de Trabajo</h1>
                                                                            <p class="lead font-primary-color">Sigue la transmisión en vivo el<br> 1° de Junio de 2023</p>
                                                                            <button type="button" class="btn btn-secondary btn-sm mb-20 bg-primary-color" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1" disabled>Ver transmisión</button>
                                                                            <div class="collapse" id="collapseExample1">
                                                                                <div class="card card-body">
                                                                                    <!--Agradecemos tu paciencia, pronto se publicará la transmisión de la Clausura...
                                                                                    <br> En espera del término de la Mesa de Análisis 4
                                                                                    <br> <small>No olvides registrar tu asistencia en el apartado de Constancias</small>-->
                                                                                    <div class="embed-youtube" data-video-id="####">
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
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-------End Ponencias------>
            </div>
        </div>
    </section>
    <!-- End Team Section -->

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
<!--<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
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
