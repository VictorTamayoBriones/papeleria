<?php 

require_once "../conexion.php";
//Registrar Producto ----es ese
/*
var_dump($_POST);
die;
*/
if(isset($_POST['registrar'])){
    
 
    if(strlen($_POST['nombre']) >=1 && strlen($_POST['codigo']) >=1 && strlen($_POST['categoria']) >=1 && strlen($_POST['stock']) >=1 && strlen($_POST['precio'])>=1 && strlen($_POST['imagen'])>=1)
    {
        $nombre= $_POST['nombre'];
        $codigo= $_POST['codigo'];
        $categoria= $_POST['categoria'];
        $stock= $_POST['stock'];
        $precio= $_POST['precio'];
        $imagen= $_POST['imagen'];
        $a="<img src=img/$imagen>";
        $almacenar= "INSERT INTO catalogo_p(codigo, nombre_articulo, categoria, stock, precio,imagen) VALUES ('$codigo', '$nombre', '$categoria', '$stock', '$precio','$a')";
        $resultado= mysqli_query($conexion, $almacenar);
        if($resultado)
        {
            header ("location: regisProduct.php?exito");
        }
        else{
            ?>
            
            <?php
        }

    }
    ?>
    <h1><center>Error datos no almacenados <br> intentelo de nuevo</center></h1>
    <center>
    <a href="regisProduct.php">
<img src="../assets/images/l.png" style="height:100px; width:100px">
    </a>
    </center>
            <?php
}
?>
