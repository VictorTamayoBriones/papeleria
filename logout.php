<?php 
    require_once "conexion.php";

    if(isset($_SESSION['user_name'])){
        session_destroy();
    }

    if(isset($_SESSION['user_name_ep'])){
        session_destroy();
    }

    header("location: ./users/loginAd.php");
?>