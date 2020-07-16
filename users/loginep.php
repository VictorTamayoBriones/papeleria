<?php 


require_once "../conexion.php";

   
    if(isset($_POST['ingreso']))
    {
        $usuario = $_POST['usuario'];
        $pass = sha1($_POST['pass']);
        $reg= $_POST['rango'];
    
        $ver= "SELECT * FROM usuario WHERE user_name='$usuario' and contraseña='$pass' and Rango='$reg'";
    $resultado= mysqli_query($conexion, $ver);
    $verfilas= mysqli_num_rows($resultado);
    if($verfilas >=1)
    {
        if($reg == "administrador")
        {

        ?>
        <script>
        window.location="../administrador/adindex.php";
        </script>
        <?php
        }
        else if($reg == "empleado")
        {
            ?>
            <script>
            window.location="../empleados/epindex.php";
            </script>
            <?php   
        }
        else{
            echo("ERROR, coloque empleado o usuario");
        }
    }
    else{
        echo("USUARIO y/o CONTRASEÑA son incorrectos");
    }
}