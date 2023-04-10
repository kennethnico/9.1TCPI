<?php
session_start();
//require 'expires.php';
//error_reporting(0);
//unset($_SESSION['myuser']);
if (isset($_SESSION['myuser']))
{
    echo json_encode(array('success' => true));
}
else
{
    echo json_encode(array('success' => false));
}
?>