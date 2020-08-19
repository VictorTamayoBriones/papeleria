<?php

require_once "../conexion.php";

if(isset($_POST['actualizar']))
{
    //if( strlen($_POST['nombre']) >=1 && strlen($_POST['codigo']) >=1 && strlen($_POST['categoria']) >=1 && strlen($_POST['stock']) >=1 && strlen($_POST['precio']))
    //{
        //$id= $_POST['ID'];
        
        //$aa=$_POST['codigo1'];
        $nombre= $_POST['nombre'];
        $codigo= $_POST['codigos'];
        $categoria= $_POST['categoria'];
        $stock= $_POST['stock'];
        $precio= $_POST['precio'];
        
        /*echo("nombre:".$nombre);
        echo("<br>codigo:".$codigo);
        echo("<br>categoria:".$categoria);
        echo("<br>stock".$stock);
        echo("<br>imagen:".$a);
        echo("<br>codigoP:".$aa);*/
      
        
        $modi= "UPDATE catalogo_p SET 
        nombre_articulo='$nombre',
        categoria='$categoria',
        stock='$stock',
        precio='$precio',
        imagen='$a'
        WHERE codigo='$codigo'";
        $resultado= mysqli_query($conexion, $modi);
        if($resultado)
        {
            header ("location: editarProduct.php?exito");
            }
        else
        {
            header ("location: editarProduct.php?Error");
            
        }


   // }
}

?>