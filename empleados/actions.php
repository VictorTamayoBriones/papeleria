<?php 
    require_once "../conexion.php";
    $dato=$_GET['delete'];
   
    $delete= "DELETE FROM ventas where IDventa=$dato";
    $resultado= mysqli_query($conexion,$delete);
    if($resultado){
        header("location: veVentas.php");
    }
    
?>