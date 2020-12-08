<?php 
//Inicar la conexion a la Bd
require_once "../conexion.php";

//Recoger los datos del formulario
if(isset($_POST)){
    $email = trim($_POST['usuario']);
    $password = $_POST['pass'];

    //consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);

        //Comprobar la contraseña
        $verify = password_verify($password, $usuario['password']);

        if($verify){
            //Utilizar una sesion para guardar los datos del usuario segun su rango
    
            if($usuario['tipo']=="administrador"){
                
                $_SESSION['admin'] = $usuario;
                header('Location: ./administrador/index.php');

            }elseif($usuario['tipo']=="empleado"){

                $_SESSION['empleado'] = $usuario;
                header('Location: ./empleados/index.php');

            }
            
            if(isset($_SESSION['error_login'])){
                session_destroy();
            }

        }else{
            //si algo falla guardar los errores en una sesion
            $_SESSION['error_login'] = "Login incorrecto";
        }

    }else{
        $_SESSION['error_login'] = "Login incorrecto!!!";
    }
    
}
//redirigir a la pagina del usuario
//header('Location: ./loginUs.php?error=algo-salio-mal');

?>