<?php
session_start();
#$key_id=$_POST['aidi'];
$key_id="krenicgm@.com";
error_reporting(0);
#if (isset($_SESSION['myuser'])) //Comprueba que no exista una sesión
#{
#    echo json_encode(array('success' => true, 'why' => 'Sesión ya iniciada'));
#}else{
    $define2 = get_hours($key_id);
    if($define2 == 0)
    {
        echo json_encode(array('success' => false, 'why' => 'No se encontró registro de Asistencia', 'id' => $key_id));
    }else
    {
        //echo $define['nombre'];
        if(empty($define2['mesa']))
        {
            $_SESSION['asig']= "SM";
        }
        else{
            $_SESSION['asig']= "CM";
        }
        $_SESSION['primerdia'] = $define2['primerdia'];
        $_SESSION['segundodia'] = $define2['segundodia'];
        #$_SESSION['start'] = time(); /*Guardamos el momento en el que la sesión es creada.*/
        #$_SESSION['expire'] = $_SESSION['start'] + (60*180); /*La sesión expira 60 minutos despues de ser creada*/
        echo json_encode(array('success' => true, 'why' => 'Registros obtenidos'));
    }
#}


######################################################
# Comprueba que el usuario y contraseña existan      #
# Retorna 0, sí el usuario no está registrado        #
# Retorna un arreglo, sí el usuario está registrado  #
######################################################
function get_hours($id){
    require 'base.php';
    $records = $conn->prepare('SELECT * FROM checklist_nueve where email = :email');
    $records->bindParam(':email', $id);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    if (count($results) > 0 )
    {
        return $results;
    }else{
        return 0;
    }
}
?>