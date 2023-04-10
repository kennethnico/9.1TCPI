<?php
//error_reporting(0);
/*
 * Consulta de inner join
 * SELECT tcpi_ocho.id,tcpi_ocho.nombre,tcpi_ocho.email,tcpi_ocho.dependencia,checklist_ocho.email,checklist_ocho.primerdia,checklist_ocho.segundodia,checklist_ocho.tercerdia FROM `tcpi_ocho` INNER JOIN `checklist_ocho` WHERE `tcpi_ocho`.`email`=`checklist_ocho`.`email`;
*/
$server = '172.19.202.77';
$username = 'registros';
$password = 'R3g1xtr0s!';
$database = 'registros';

/*$server = "172.19.202.77";
$user = "registros";
$password = "R3g1xtr0s!";
//$password = "Pjcdmx@22!";
$dbName = "registros";*/
/*$server = '67.227.237.26';
$username = 'innovan2_AdmSist';
$password = 'SistAdm15102019#';
$database = 'innovan2_DataBase';*/
/*
$server = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'registros';
*/
try {
    $conn = new PDO("mysql:host=$server;dbname=$database;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Conexión fallida        :    ' . $e->getMessage());
}