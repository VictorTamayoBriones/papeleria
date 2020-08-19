<?php 

require_once "../conexion.php";
//Registrar Producto ----es ese
/*
var_dump($_POST);
die;
*/
if(isset($_POST['registrar'])){
    
 
    if($_POST['nombre'] >=1 && $_POST['codigo'] >=1 && $_POST['categoria'] >=1 && $_POST['stock'] >=1 && $_POST['precio']>=1 )
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
            header ("location: regisProduct.php?error");
        }

    }
  
}
?>
