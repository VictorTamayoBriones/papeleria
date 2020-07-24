<?php
require_once "../conexion.php";

if(isset($_POST)){

    // operadores ternarios \\

    $codigoPro= isset($_POST['codigo']) ? mysqli_real_escape_string($conexion, $_POST['codigo']) : false;
    //si exite el post nombre es igual a true, si no entonces nombre  = false
    $nombrePro= isset($_POST['nombrePro']) ? mysqli_real_escape_string($conexion, $_POST['nombrePro']) : false;
    $precio= isset($_POST['precio']) ? mysqli_real_escape_string($conexion, $_POST['precio']) : false;
    $cantidad= isset($_POST['cantidad']) ? mysqli_real_escape_string($conexion, $_POST['cantidad']) : false;
    $folio= isset($_POST['folio']) ? mysqli_real_escape_string($conexion, $_POST['folio']) : false;
    $usuario = "empleado1";
    
    $errores = array();

    // Validar datos antes de guardarlos

    //validar el codigo del producto
    if(!empty($codigoPro) && is_numeric($codigoPro) && preg_match("/[0-9]/", $codigoPro)){
        $codigo_validado = true;
    }else{
        $codigo_validado = false;
        $errores['nombre']="El codigo del Producto no es valido";
    }

    //validar el nombre del producto
    if(!empty($nombrePro) && !is_numeric($nombrePro) && !preg_match("/[0-9]/", $nombrePro)){
        $nombrePro_validado = true;
    }else{
        $nombrePro_validado = false;
        $errores['nombre']="El nombre no es valido";
    }

    //validar el precio del producto
    if(!empty($precio) && is_numeric($precio) && preg_match("/[0-9]/", $precio)){
        $precio_validado = true;
    }else{
        $precio_validado = false;
        $errores['nombre']="El precio del Producto no es valido";
    }

    //validar la cantidad del producto
    if(!empty($cantidad) && is_numeric($cantidad) && preg_match("/[0-9]/", $cantidad)){
        $cantidad_validado = true;
    }else{
        $cantidad_validado = false;
        $errores['nombre']="La cantidad del Producto no es valida";
    }

    //validar el folio de la venta
/*
    if(!empty($folio) && !is_numeric($folio) && !preg_match("/[0-9]/", $folio)){
        $folio_validado = true;
    }else{
        $folio_validado = false;
        $errores['nombre']="El folio del Producto no es valido";
    }
*/

    //agregar mas productos a la venta
    $submit = $_POST['agregar'];

    if($submit == "Agregar Producto"){
        header("location: rVentas?rmore");
    }


    //guardar venta
    $guardar_venta = false;

    $total=$cantidad * $precio;

    if(count($errores) == 0){
        $guardar_usuario= TRUE;
        
        //insertar la venta en la base de datos
        $sql="INSERT INTO ventas VALUES(null, '$codigoPro', '$cantidad', '$nombrePro','$total', CURDATE(), '$usuario');";
        
        $guardar = mysqli_query($conexion, $sql);
        

    }else{
        var_dump($errores);
    }
}
header("location: rVentas?exito")

?>