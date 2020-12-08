<?php 
    require_once "../conexion.php";

    $dato=$_GET['delete'];

        $delete= "DELETE FROM ventas where IDventa=$dato";
        $resultado= mysqli_query($conexion,$delete);

        $delete2= "DELETE FROM subventas where IDventa=$dato";
        $resultado2= mysqli_query($conexion,$delete2);
        if($resultado && $resultado2){
            header("location: mostrarVentas.php");
        }



 
?>