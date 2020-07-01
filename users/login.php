<?php 

if(isset($_POST)){
    
    $user = $_POST['usuario'];

    $pass = $_POST['pass'];

    if($user == $_POST['usuario']="administrador"){

        header ('location: ../administrador/adindex.php');

    }elseif($user == $_POST['usuario']="empleado1"){

        header ('location: ../empleados/epindex');

    }else{
        header ('location: loginAd.php');
    }

}else {
    header ('location: loginAd.php');
}


?>