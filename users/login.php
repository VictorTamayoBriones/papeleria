<?php 
//Inicar la conexion a la Bd
require_once "../conexion.php";

//Recoger los datos del formulario
if(isset($_POST)){
    $user = $_POST['usuario'];
    $password = $_POST['pass'];
    $submit = $_POST['ingreso'];

    //consulta para conprobr las credenciales del usurio

    $sql = "SELECT * FROM usuario WHERE user_name = '$user'";
    $login = mysqli_query($conexion, $sql);

    if($login && mysqli_num_rows($login) ==1){
        $user = mysqli_fetch_assoc($login);
    
        if($user['Rango']=='administrador'){

            if($password == $user['password']){
        
                $_SESSION['user_name'] = $user;        
                if(isset($_SESSION['user_name'])){
                    //var_dump($_SESSION);
                }
            }
            header('location: ../administrador/adindex.php');

        }elseif($user['Rango']=='empleado'){

            if($password == $user['password']){
        
                $_SESSION['user_name_ep'] = $user;        
            

                if(isset($_SESSION['user_name_ep'])){
                }
            }
            header('location: ../empleados/epindex.php');
            
        }

    }else{

        header('location: loginAd.php?error');
    }

}

