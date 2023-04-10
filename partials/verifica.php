<?php
session_start();
error_reporting(0);
require 'base.php';
$n = $_POST['nam1'];
$e = $_POST['ema1'];
$_SESSION['myuser']=$n;
$_SESSION['cons']="SI";

//$e = "krenicgm@gmail.com";
//$m = "Prueba";
try {
    $stmt = $conn->prepare('UPDATE tcpi_nueve SET nombre = :nnom,verif = :v WHERE email = :email');
    $stmt->execute(array(':nnom' => $n,':v' => 'SI', ':email' => $e));
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