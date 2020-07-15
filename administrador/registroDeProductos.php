<?php 

require_once "../conexion.php";
//Registrar Producto ----es ese
/*
var_dump($_POST);
die;
*/
if(isset($_POST['registrar'])){
    

 
    if(strlen($_POST['nombre']) >=1 && strlen($_POST['codigo']) >=1 && strlen($_POST['categoria']) >=1 && strlen($_POST['stock']) >=1 && strlen($_POST['precio']))
    {
        $nombre= $_POST['nombre'];
        $codigo= $_POST['codigo'];
        $categoria= $_POST['categoria'];
        $stock= $_POST['stock'];
        $precio= $_POST['precio'];
        //$imagen= $_POST['Imagen'];
        $almacenar= "INSERT INTO catalogo_p(codigo, nombre_articulo, categoria, stock, precio) VALUES ('$codigo', '$nombre', '$categoria', '$stock', '$precio')";
        $resultado= mysqli_query($conexion, $almacenar);
        if($resultado)
        {
            header ("location: regisProduct.php?exito");
        }
        else{
            header ("location: regisProduct.php?Error");
        }

    }
}
?>
