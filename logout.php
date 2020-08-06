<?php 
    require_once "conexion.php";

    if(isset($_SESSION['user_name'])){
        session_destroy();
    }

    header("location: ./users/loginAd.php");
?>