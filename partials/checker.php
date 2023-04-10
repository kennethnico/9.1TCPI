<?php
error_reporting(0);
session_start();
date_default_timezone_set("America/Monterrey");
$dd = $_POST['dia'];
#TEST
#$dd = primerdia;
$n = $_SESSION['ide'];
$e = $_SESSION['myemail'];
$u = date("d/m/Y H:i:s a");
#$sql = "INSERT INTO checklist_ocho(id,email,".$dd.") VALUES ('".$n."','".$e."','".$u."')";
$t1 = verifica($e);
if($t1 == 0){
    $t2 = pasaL1($dd,$n,$e,$u);
    if($t2 == 0 ){
        //Ocurrió un error en el INSERT
        echo json_encode(array('success' => false, 'why' => date("d/m/Y H:i:s a"), 'day' => $dd,'r' => 'Ocurrió un error en el INSERT, notifique al Administrador.'));
    }else{
        //Se registró asistencia
        echo json_encode(array('success' => true, 'why' => date("d/m/Y H:i:s a"), 'day' => $dd,'r' => 'Se registró su asistencia correctamente.'));
    }
}
else{
    if($t1[$dd] != null){
        echo json_encode(array('success' => true, 'why' => date("d/m/Y H:i:s a"), 'day' => $dd, 'r' => 'Ya se ha registrado su asistencia. Gracias.'));
    }else{
        #echo json_encode(array('success' => true, 'why' => date("d/m/Y H:i:s a"), 'day' => $dd, 'r' => 'No ha pasado lista'));
        $t3 = editT($dd,$n,$e,$u);
        if($t3 == 0 ){
            //Ocurrió un error en el INSERT
            echo json_encode(array('success' => false, 'why' => date("d/m/Y H:i:s a"), 'day' => $dd,'r' => 'Ocurrió un error al registrar la fecha, notifique al Administrador.'));
        }else{
            //Se registró asistencia
            echo json_encode(array('success' => true, 'why' => date("d/m/Y H:i:s a"), 'day' => $dd,'r' => 'Se registró su asistencia correctamente.'));
        }
    }
}
#echo json_encode(array('success' => true, 'why' => date("d/m/Y H:i:s a"), 'day' => $dd));
######################################################
# Comprueba la asistencia del usuario                #
# Retorna 0, sí el usuario no ha tomado asistencia   #
# Retorna un arreglo, sí el usuario tomó asistencia #
######################################################
function verifica($e){
    require 'base.php';
    $records = $conn->prepare('SELECT * FROM checklist_nueve WHERE email = :email LIMIT 1;');
    $records->execute(array(':email' => $e));
    $numeroDeFilas = $records->rowCount();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    if ($numeroDeFilas <= 0) {
        return false;
    } else {
        return $results;
    }
}
function pasaL1($dd,$n,$e,$u){
    require 'base.php';
    $query = 'INSERT INTO checklist_nueve(id,email,'.$dd.') VALUES (:ide,:email,:dia)';
    $sql = $conn->prepare($query);
    $sql ->bindParam(':ide',$n);
    $sql ->bindParam(':email',$e);
    $sql ->bindParam(':dia',$u);
    if($sql->execute()){
        return true;//Registro añadido exitosamente
    }else{
        return false;//Ocurrió algún error en el insert
    }
}
function editT($dd,$n,$e,$u){
    require 'base.php';
    $query = "UPDATE checklist_nueve SET ".$dd."=:dia WHERE id=:ide";
    $sql = $conn->prepare($query);
    $sql ->bindParam(':dia',$u,PDO::PARAM_STR,50);
    $sql ->bindParam(':ide',$n,PDO::PARAM_INT);
    if($sql->execute()){
        return true;//Registro añadido exitosamente
    }else{
        return false;//Ocurrió algún error en el insert
    }
}
?>
