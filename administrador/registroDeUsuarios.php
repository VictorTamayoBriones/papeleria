<?php
require_once "../conexion.php";

if(isset($_POST['registrar']))
{

    if(strlen($_POST['user']) >=1 && strlen($_POST['contraseña']) >= 1 && strlen($_POST['contra']) >= 1 && strlen($_POST['nombre']) >=1 && 
    strlen($_POST['Ape_pat']) >=1 && strlen($_POST['Ape_mat']) >=1 && 
    strlen($_POST['telefono']) >=1 && strlen($_POST['Rango']) >=1 && strlen($_POST['Calle']) >=1 && strlen($_POST['No_interior']) >=1 && 
    strlen($_POST['Colonia']) >=1 && strlen($_POST['C_P']) >=1 && strlen($_POST['r1'])>=1 && strlen($_POST['r2'])>=1)
{
        
        $usuario= $_POST['user'];
        $contraseña=  $_POST['contraseña'];
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
        $r1=$_POST['r1'];
        $r2=$_POST['r2'];
        
      if($contraseña == $contra && $r1 == $r2)
     {
        if($rango== 'administrador' || $rango== 'empleado')
        {

        $almacenar= "INSERT INTO usuario(user_name, password, Nombre, Ape_pat, Ape_mat, telefono, Rango, recuperar_contraseña) VALUES ('$usuario', '$contra', '$nombre', '$apep', '$apem', '$tel', '$rango', '$r1')";
        $al= "INSERT INTO direccion(calle, No_interior, No_exterior, colonia, C_P) VALUES ('$calle', '$noi', '$noe', '$col', '$cp')";
        $resultado= mysqli_query($conexion, $almacenar);
        $res= mysqli_query($conexion, $al);
       /* echo("<br> user_name".$usuario);
        echo("<br> password".$contraseña);
        echo("<br> Nombre".$nombre);
        echo("<br> Ape_pat".$apep);
        echo("<br> Ape_mat".$apem);
        echo("<br> telefono".$tel);
        echo("<br> Rango".$rango);
        echo("<br> recuperar_contraseña".$r1);
        echo("<br>");*/
    //var_dump($resultado, $res);die;
        if($resultado && $res)
        {
            header ("location: userRegis.php?exito");
        }
        else{ ?>
            <a href="userRegis.php">
            <?php
            echo("<h1> <center> Error. Datos no almacenados </center> </h1>");
            ?>
            </a>
            <?php
             }
        }else{
            ?>
                <a href="userRegis.php">
                <?php
        echo("<h2> <center> Error, el campo Rango debe ser iguala administradro o a empleado, intentelo de nuevo </center> </h2>");
        ?>
                </a>
                <?php     
            }
         } else{
        ?>
            <a href="userRegis.php">
            <?php
    echo("<h2> <center> Error, los campos cotraseñas y/o los campos recuperar contraseñas deben ser iguales, intentelo de nuevo </center> </h2>");
    ?>
            </a>
            <?php     
         }
}

}
?>