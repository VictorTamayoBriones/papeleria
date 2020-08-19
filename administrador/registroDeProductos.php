<?php 

require_once "../conexion.php";
//Registrar Producto ----es ese
/*
var_dump($_POST);
die;
*/
if(isset($_POST['registrar'])){
    
 
    if(empty($_POST['nombre'])  && empty($_POST['codigo'])  && empty($_POST['categoria'])  && empty($_POST['stock'])  && empty($_POST['precio']) )
    {
        $nombre= $_POST['nombre'];
        $codigo= $_POST['codigo'];
        $categoria= $_POST['categoria'];
        $stock= $_POST['stock'];
        $precio= $_POST['precio'];
        $nombreImg=$_FILES['img']['name'];
        $destino="img/".$nombreImg;
        $a="<img src=../$destino>";
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
  
}
?>
