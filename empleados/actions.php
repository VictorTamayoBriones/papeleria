<?php 
    require_once "../conexion.php";

    var_dump($_POST);
    var_dump($_GET);
    die;

    if(isset($_POST['Eliminar'])){

        $dato=$_GET['delete'];
   
        $delete= "DELETE FROM ventas where IDventa=$dato";
        $resultado= mysqli_query($conexion,$delete);

        $delete2= "DELETE FROM subventas where IDventa=$dato";
        $resultado2= mysqli_query($conexion,$delete2);
        if($resultado && $resultado2){
            header("location: veVentas.php");
        }


    }

    if(isset($_POST['Detalles'])){
        
        $info=$_GET['info'];
   
        $query= "select * from subventas where idventa = $dato";
        $result= mysqli_query($conexion,$query);

    }
 
?>