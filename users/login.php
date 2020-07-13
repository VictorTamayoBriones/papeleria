<?php 

if(isset($_POST)){
    
    $user = $_POST['usuario'];

    $pass = $_POST['pass'];
    
    $submit = $_POST['ingreso'];
    

    if($submit == "Entrar"){
        if($user == "administrador" && $pass == "4815162342"){

            header ('location: ../administrador/adindex.php');
    
        }elseif($user == "empleado1" && $pass == "1234567890"){
    
            header ('location: ../empleados/epindex.php');
    
        }else{
            header ('location: loginAd.php?error');
        }
    }

    if($submit == "Ingresar"){
        if($user == "administrador" && $pass == "4815162342"){

            header ('location: ../administrador/adindex.php');
    
        }elseif($user == "empleado1" && $pass == "1234567890"){
    
            header ('location: ../empleados/epindex.php');
    
        }else{
            header ('location: loginAd.php?falloDos');
        }
    }

    if($submit == "Ingresa"){
        if($user == "administrador" && $pass == "4815162342"){

            header ('location: ../administrador/adindex.php');
    
        }elseif($user == "empleado1" && $pass == "1234567890"){
    
            header ('location: ../empleados/epindex.php');
    
        }else{
            header ('location: loginAd.php?3rr0r');
        }
    }    
}else {
    header ('location: loginAd.php?rellenaLosCampos');
}
?>