<?php
error_reporting(0);
if(isset($_SESSION['myuser']))
{
    $now = time();
    if($now > $_SESSION['expire']){
        unset($_SESSION['myuser']);
        unset($_SESSION['email']);
        unset($_SESSION['start']);
        unset($_SESSION['expire']);
        session_destroy();
        //echo json_encode(array('success' => true, 'why' => 'Sesión cerrada'));
        echo'<script>window.location.href="c2VsZWN0.php";</script>';
    }
}
?>