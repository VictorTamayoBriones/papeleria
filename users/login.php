<?php 
//Inicar la conexion a la Bd
require_once "../conexion.php";

//Recoger los datos del formulario
if(isset($_POST)){
    $user = $_POST['usuario'];
    $rango = $_POST['rango'];
    $password = ($_POST['pass']);
    $submit = $_POST['ingreso'];

    if($rango == 'administrador'){
        //consulta para conprobr las credenciales del usurio
        $sql = "SELECT * FROM usuario WHERE user_name = '$user'";
        $login = mysqli_query($conexion, $sql);
        //var_dump($user);
        //var_dump($rango);
        //var_dump($password);
        if($login && mysqli_num_rows($login) >=1){
            $user = mysqli_fetch_assoc($login);

            if($password == $user['password']){
                $_SESSION['user_name'] = $user;        
                if(isset($_SESSION['user_name'])){
                    //var_dump($_SESSION);
                }
            }
            header('location: ../administrador/adindex.php');
        //die;
        }else{
            header('location: loginAd.php?error');
        }

    }elseif ($rango == 'empleado') {
        //consulta para conprobr las credenciales del usurio
        $sql = "SELECT * FROM usuario WHERE user_name = '$user'";
        $login = mysqli_query($conexion, $sql);
        //var_dump($user);
        //var_dump($rango);
        //var_dump($password);
        if($login && mysqli_num_rows($login) >=1){
            $user = mysqli_fetch_assoc($login);
            if($password == $user['password']) 
            //var_dump($password);
                $_SESSION['user_name_ep'] = $user;                           
                if(isset($_SESSION['user_name_ep'])){
                }
            }
            header('location: ../empleados/epindex.php');
        //die;
        }else{
            header('location: loginAd.php?error');
        }
}
