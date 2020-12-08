<?php 
require_once "../conexion.php";
    //recoger el id de la eventa

    $id = $_GET['id'];

    //hacer la consulta de ventas
    $query= "SELECT * FROM ventas WHERE idventa = $id";
    $start= mysqli_query($conexion,$query);
    $rows= mysqli_num_rows($start);
    $mostrar= mysqli_fetch_array($start);

    //hacer la consulta de subventas
    $consulta ="SELECT * FROM subventas where idventa = $id";
    $ejecutarconsulta= mysqli_query($conexion,$consulta);
    $verfilas= mysqli_num_rows($ejecutarconsulta);
    $fila= mysqli_fetch_array($ejecutarconsulta);

?>