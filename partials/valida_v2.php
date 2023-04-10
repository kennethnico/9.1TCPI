<?php
session_start();
$key_id=$_POST['aidi'];
$key_ps=$_POST['pass'];
error_reporting(0);
if (isset($_SESSION['myuser'])) //Comprueba que no exista una sesión
{
    echo json_encode(array('success' => true, 'why' => 'Sesión ya iniciada'));
}else{
    $define = get_ss($key_id,$key_ps);
    if($define == 0)
    {
        echo json_encode(array('success' => false, 'why' => 'ID o contraseña erróneas', 'id' => $key_id, 'pas' => $key_ps));
    }else
    {
        //echo $define['nombre'];
        if(empty($define['mesa']))
        {
            $_SESSION['asig']= "SM";
        }
        else{
            $_SESSION['asig']= "CM";
        }
        $_SESSION['ide'] = $define['id'];
        $_SESSION['myuser'] = $define['nombre'];
        $_SESSION['myemail'] = $define['email'];
        $_SESSION['myubica'] = $define['ubicacion'];
        $_SESSION['mesa'] = $define['mesa'];
        $_SESSION['cons'] = $define['verif'];
        $_SESSION['start'] = time(); /*Guardamos el momento en el que la sesión es creada.*/
        $_SESSION['expire'] = $_SESSION['start'] + (60*180); /*La sesión expira 60 minutos despues de ser creada*/
        echo json_encode(array('success' => true, 'why' => 'Credendiales válidas'));
    }
}


######################################################
# Comprueba que el usuario y contraseña existan      #
# Retorna 0, sí el usuario no está registrado        #
# Retorna un arreglo, sí el usuario está registrado  #
######################################################
function get_ss($id,$ps){
    require 'base.php';
    $records = $conn->prepare('SELECT * FROM tcpi_nueve WHERE email = :email AND passsword = :pass');
    $records->bindParam(':email', $id);
    $records->bindParam(':pass', $ps);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    if (count($results) > 0 )
    {
        return $results;
    }else{
        return 0;
    }
}
#######################################
# Comprueba que el email sea válido   #
#######################################
function is_valid_email($str)
{
    return (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
}
?>