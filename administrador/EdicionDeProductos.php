<?php

require_once "../conexion.php";

if(isset($_POST['actualizar']))
{
    if(strlen($_POST['ID']) >=1 && strlen($_POST['nombre']) >=1 && strlen($_POST['codigo']) >=1 && strlen($_POST['categoria']) >=1 && strlen($_POST['stock']) >=1 && strlen($_POST['precio']))
    {
        $id= $_POST['ID'];
        $nombre= $_POST['nombre'];
        $codigo= $_POST['codigo'];
        $categoria= $_POST['categoria'];
        $stock= $_POST['stock'];
        $precio= $_POST['precio'];
        $imagen= $_POST['Imagen'];

        $modi= "UPDATE catalogo_p SET 
        nombre_articulo='$nombre',
        codigo='$codigo',
        categoria='$categoria',
        stock='$stock',
        precio='$precio',
        imagen='$imagen'
        WHERE ID='$id'";
        $resultado= mysqli_query($conexion, $modi);
        if($resultado)
        {
            header ("location: editarProduct.php?exito");
        }
        else
        {
            header ("location: editarProduct.php?Error");
        }


    }
}

?>