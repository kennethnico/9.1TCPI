<?php
session_start();
if(isset($_SESSION['myuser']))
{
    unset($_SESSION['myuser']);
    //echo json_encode(array('success' => true, 'why' => 'Sesión cerrada'));
    echo'<script>window.location.href="../index.html";</script>';
}
else
{
    //echo json_encode(array('success' => false, 'why' => 'La sesión no está activa'));
}
?>