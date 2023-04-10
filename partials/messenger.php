<?php
error_reporting(0);
session_start();
date_default_timezone_set("America/Monterrey");
$cc = $_POST['message'];
$nom=$_SESSION['myuser'];
$em=$_SESSION['myemail'];
$id=$_SESSION['ide'];

/*
$cc ="Lorem ipsum";
$nom="Edwin Kenet Nicolás Ruiz";
$em="krencgm@gmail.com";
$id=1;
*/
$fe = date("Y-m-d H:i:s");
$t2 = sendMsg($id,$fe,$nom,$em,$cc);
if($t2 == 0 ){
    //Ocurrió un error en el INSERT
    echo json_encode(array('success' => false, 'why' => date("d/m/Y H:i:s a"), 'day' => $em,'r' => 'Ocurrió un error en el INSERT, notifique al Administrador.'));
}else{
    //Se registró asistencia
    echo json_encode(array('success' => true, 'why' => date("d/m/Y H:i:s a"), 'day' => $em,'r' => 'Se registró su comentario correctamente.'));
}


function sendMsg($ii,$ff,$nn,$ee,$cc){
    require 'base.php';
    $query = 'INSERT INTO coment_nueve(id,fecha,nombre,email,coment) VALUES (:ide,:fecha,:nombre,:email,:coment)';
    $sql = $conn->prepare($query);
    $sql ->bindParam(':ide',$ii);
    $sql ->bindParam(':fecha',$ff);
    $sql ->bindParam(':nombre',$nn);
    $sql ->bindParam(':email',$ee);
    $sql ->bindParam(':coment',$cc);
    if($sql->execute()){
        return true;//Registro añadido exitosamente
    }else{
        return false;//Ocurrió algún error en el insert
    }
}
?>

