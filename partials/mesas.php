<?php
error_reporting(0);
session_start();
require 'base.php';
$n = $_POST['nam1'];
$e = $_POST['ema1'];
$m = $_POST['mess1'];
#$n = "Edwin Kenet Nicolas";
#$e = "krenicgm@gmail.com";
#$m = "Prueba";
$_SESSION['mesa']=$_POST['mess1'];
$_SESSION['asig']="CM";
try {
    $stmt = $conn->prepare('UPDATE tcpi_nueve SET mesa = :mesa WHERE email = :email');
    $stmt->execute(array(':email'   => $e,':mesa' => $m));

    if($stmt->rowCount()){
        echo json_encode(array('success' => 'true' , 'retorno' => $stmt->rowCount(), 'email' =>$e, 'name' =>$n, 'mesa' =>$m));
    }
    else{
        echo json_encode(array('success' =>'false' , 'retorno' => $e->getMessage() , 'email' =>$e, 'name' =>$n, 'mesa' =>$m));
    }
    //echo $stmt->rowCount(); // 1
} catch(PDOException $e) {
    //echo 'Error: ' . $e->getMessage();
    echo json_encode(array('success' =>'false' , 'retorno' => $e->getMessage() , 'email' =>$e, 'name' =>$n, 'mesa' =>$m));
}
?>