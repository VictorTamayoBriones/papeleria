<?php 
    require_once "../conexion.php";

    if(isset($_SESSION['admin'])){
        session_destroy();
    }

    if(isset($_SESSION['empleado'])){
        session_destroy();
    }

    header("location: ./loginUs.php");
?>