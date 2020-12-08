<?php
require_once "../../conexion.php";
if(isset($_POST)){
    //var_dump($_POST);
    
    //Recoger los valores del formulario de registro
    $tipo = isset($_POST['userType']) ? mysqli_real_escape_string($db, $_POST['userType']) : false;
    $nombre = isset($_POST['userName']) ? mysqli_real_escape_string($db, $_POST['userName']) : false;
    $apellido = isset($_POST['userLsName']) ? mysqli_real_escape_string($db, $_POST['userLsName']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['pass']) ? mysqli_real_escape_string($db, $_POST['pass']) : false;
    $nacimiento = isset($_POST['userBrith']) ? mysqli_real_escape_string($db, $_POST['userBrith']) : false;
    $celular = isset($_POST['userPhone']) ? mysqli_real_escape_string($db, $_POST['userPhone'] ): false;
    $direccion = isset($_POST['userAdrees']) ? mysqli_real_escape_string($db, $_POST['userAdrees']) : false;
    $image = "assets/images/usuario.png";
    //Crear un array para almacenar los errores
    $errores = array();

    //validar los datos antes de ingresarlos en la BD

    //Validar el tipo de usuario
    if(!empty($tipo) && !is_numeric($tipo) && !preg_match("/[0-9]/", $tipo) && $tipo != "cargo"){
        $tipo_validate = true;
        echo "El tipo es valido";
    }else{
        $tipo_validate = false;
        $errores['tipo'] =  "El tipo de usuario no es valido";
    }

    //Validar el nombre de usuario
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validate = true;
        echo "El nombre es valido";
    }else{
        $nombre_validate = false;
        $errores['nombre'] =  "El nombre de usuario no es valido";
    }

    //Validar el apellido de usuario
    if(!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido)){
        $apellido_validate = true;
        echo "El apellido es valido";
    }else{
        $apellido_validate = false;
        $errores['apellido'] =  "El apellido de usuario no es valido";
    }

    //Validar el email de usuario
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validate = true;
        echo "El email es valido";
    }else{
        $email_validate = false;
        $errores['email'] =  "El email de usuario no es valido";
    }
    
    //Validar la contraseña de usuario
    if(!empty($password)){
        $password_validate = true;
        echo "El password es valido";
    }else{
        $password_validate = false;
        $errores['password'] =  "La contraseña esta vacia";
    }
    
    //Validar el nacimiento de usuario
    if(!empty($nacimiento) && !is_numeric($nacimiento) && preg_match("/[0-9]/", $nacimiento)){
        $nacimiento_validate = true;
        echo "El nacimiento es valido";
    }else{
        $nacimiento_validate = false;
        $errores['nacimiento'] =  "El nacimiento de usuario no es valido";
    }
    
    //Validar el celular de usuario
    if(!empty($celular) && is_numeric($celular) && preg_match("/[0-9]/", $celular)){
        $celular_validate = true;
        echo "El celular es valido";
    }else{
        $celular_validate = false;
        $errores['celular'] =  "El celular de usuario no es valido";
    }
    
    //Validar el direccion de usuario
    if(!empty($direccion)){
        $direccion_validate = true;
        echo "El direccion es valido";
    }else{
        $direccion_validate = false;
        $errores['direccion'] =  "La direccion de usuario no es valida";
    }

    //Verificar no existan errores
    $guardar_usuario = false;

    if(count($errores) == 0){
        $guardar_usuario = true;

        //cifrar la contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

        var_dump($password);
        var_dump($password_segura);

        var_dump(password_verify($password, $password_segura));
        
        //Insertar al usuario en la BD
        $sql= "INSERT INTO usuarios VALUES(null, '$tipo', '$nombre', '$apellido', '$email', '$password_segura', '$nacimiento' , $celular, '$direccion', '$image', CURDATE());";

        $guardar = mysqli_query($db, $sql);

        var_dump(mysqli_error($db));
        

        if($guardar){
            $_SESSION['completado'] = "El registro se a completado con exito";
        }else{
            $_SESSION['errores']['general'] = "Fallo al guardar el usuario";
        }
    }else{
        $_SESSION['errores'] = $errores;
        header('Location: ../../views/userRegister.php');
    }
}
header('Location: ../../views/userRegister.php');
?>