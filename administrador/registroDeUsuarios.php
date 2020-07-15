<?php
require_once "../conexion.php";

if(isset($_POST['registrar']))
{

    if(strlen($_POST['user']) >=1 && strlen($_POST['contraseña']) >= 1 && strlen($_POST['contra']) >= 1 && strlen($_POST['nombre']) >=1 && 
    strlen($_POST['Ape_pat']) >=1 && strlen($_POST['Ape_mat']) >=1 && 
    strlen($_POST['telefono']) >=1 && strlen($_POST['Rango']) >=1 && strlen($_POST['Calle']) >=1 && strlen($_POST['No_interior']) >=1 && 
    strlen($_POST['Colonia']) >=1 && strlen($_POST['C_P']) >=1)
{
        
        $usuario= $_POST['user'];
        $contraseña= $_POST['contraseña'];
        $contra= $_POST['contra'];
        $nombre= $_POST['nombre'];
        $apep= $_POST['Ape_pat'];
        $apem= $_POST['Ape_mat'];
        $tel= $_POST['telefono'];
        $rango= $_POST['Rango'];
        $calle= $_POST['Calle'];
        $noi= $_POST['No_interior'];
        $noe= $_POST['No_exterior'];
        $col= $_POST['Colonia'];
        $cp= $_POST['C_P'];

        if($contraseña == $contra)
     {

        $almacenar= "INSERT INTO usuarios( user_name, contraseña, Nombre, Ape_pat, Ape_mat, telefono, Rango) VALUES ('$usuario', '$contraseña', '$nombre', '$apep', '$apem', '$tel', '$rango')";
        $almacena= "INSERT INTO direccion(calle, No_interior, No_exterior, colonia, C_P) VALUES ('$calle', '$noi', '$noe', '$col', '$cp')";
        $resultado= mysqli_query($conexion, $almacenar);
        $res= mysqli_query($conexion, $almacena);
        if($resultado && $res)
        {
            ?>
           <center> <a href="userRegis.php"> <bg color="black"> REGISTRO EXITOSO </bg> <a> </center>
           <?php

        }
        else{
            echo("<h1> <center> Error. Datos no almacenados </center> </h1>");
             }
    }
    else{
    echo("<h2> <center> Error, las cotraseñas deben ser iguales, intentelo de nuevo </center> </h2>");
         }
}

}
?>