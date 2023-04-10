<?php
require 'base.php';
?>
<!Doctype>
<html>

<head>
    <meta charset="utf-8">
    <title>Lista de Registros</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="theme-color" content="#11322C" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!-- Favicons -->
    <link href="../img/logo_central.png" rel="icon">
    <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">
    <!-- Bootstrap css -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/TableExport/5.2.0/css/tableexport.min.css" integrity="sha512-QNApdXD0OM7mWwz9n+xCNgjfkYe7Usw17xroPYOtsnVQqTQfardTXrrUWyvkcpkmYaeVn3KS0ps0BLbV59KCQg==" crossorigin="anonymous" />
    <!-- Main Stylesheet File -->
    <link href="../css/mystyle.css?v=1" rel="stylesheet">
    <style>
        body {
            background-color: #FFF;
        }

    </style>

</head>

<body>

<header id="header" class="header header-hide d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <div id="logo" class="pull-left">
            <a style="color: #FFF"><img src="../img/logos/9num.png" alt="" width="100px" height="auto"></a>
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a></a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->
<section id="testimonials" class="padd-section text-center wow fadeInUp">
    <div class="container">
        <div class="dropdown-divider u"></div><br>
        <div class="row justify-content-center" style="width= 100% !important;">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="testimonials-content">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="top-top table-responsive">
                                    <h2>Inscritos - 9º Taller de Cooperación Procesal Internacional</h2>
                                    <button type="button" class="btn-outline-primary xlsx" tableexport-id="2280ca-xlsx">Descargar .XLSX</button>
                                    <button type="button" class="btn-outline-secondary csv" tableexport-id="3a8efbb5-csv">Descargar .CSV</button>
                                    <button type="button" class="btn-outline-success txt" tableexport-id="399d2dcb-txt">Descargar .TXT</button><br>
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Ubicacion</th>
                                            <th scope="col">Mesa</th>
                                            <!--<th scope="col">V</th>-->
                                        </tr>
                                        </thead>
                                        <tbody class="listaReg">
                                        <?php include_once "consultaAjax.php" ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<!--FileSaver-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.2/FileSaver.min.js" integrity="sha512-k8F8QynmFNURwbUJC8drKA+fo3YfNvjqKzStdydD6au+MzvxBoRnxH8E31RJXwDY9DrnEiPhh9wBoDSIxhkyHQ==" crossorigin="anonymous"></script>
<!--FileSaver-->
<!--XLSX CORE-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.8/xlsx.core.min.js" integrity="sha512-Nml08bTNsmV1v/7rMaYUL6KzLfG87gslxgWtInWf6NhbgivCWsJ0cV3K9l+MwLXwrjKVA4IcbfPoYwvwWdAT2Q==" crossorigin="anonymous"></script>
<!--XLSX CORE-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/TableExport/5.2.0/js/tableexport.min.js" integrity="sha512-XmZS54be9JGMZjf+zk61JZaLZyjTRgs41JLSmx5QlIP5F+sSGIyzD2eJyxD4K6kGGr7AsVhaitzZ2WTfzpsQzg==" crossorigin="anonymous"></script>

<script src="../js/Blob.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        function updateT() {
            $.ajax({
                url: "consultaAjax.php",
                type: "get",
                beforeSend: function() {
                    console.log("Actualizando...");
                },
                success: function(response) {
                    console.log("Actualizado correctamente");
                    $('.listaReg').html(response);
                }
            })
        }
        setInterval(updateT, 30000);
    });
    var d = new Date();
    var month = d.getMonth() + 1;
    var day = d.getDate();
    var h = d.getHours();
    var min = d.getMinutes();
    var nameD = day + "_" + month + "-" + h + min + "hrs_Lista_de_Registro_TCPI6";
    $("table").tableExport({
        headers: true, // (Boolean), display table headers (th or td elements) in the <thead>, (default: true)
        footers: true, // (Boolean), display table footers (th or td elements) in the <tfoot>, (default: false)
        formats: ["xlsx", "csv", "txt"], // (String[]), filetype(s) for the export, (default: ['xlsx', 'csv', 'txt'])
        filename: nameD, // (id, String), filename for the downloaded file, (default: 'id')
        bootstrap: false, // (Boolean), style buttons using bootstrap, (default: true)
        exportButtons: false, // (Boolean), automatically generate the built-in export buttons for each of the specified formats (default: true)
        position: "top", // (top, bottom), position of the caption element relative to table, (default: 'bottom')
        trimWhitespace: true, // (Boolean), remove all leading/trailing newlines, spaces, and tabs from cell text in the exported file(s) (default: false)
        RTL: false, // (Boolean), set direction of the worksheet to right-to-left (default: false)
        sheetname: "Lista preeliminar" // (id, String), sheet name for the exported spreadsheet, (default: 'id')
    });

</script>
</body>

</html>
