<?php
require_once "../conexion.php";
//var_dump($_POST);die;
$query= "select idventa from ventas order by idventa desc limit 1";
$start= mysqli_query($conexion,$query); 
$verid= mysqli_num_rows($start);
$folioo= mysqli_fetch_array($start);
$folioFinal = $folioo[0] + 1;

//var_dump($_POST);
if(isset($_POST)){
    //var_dump($_POST);
    //die;
    // operadores ternarios \\

    /*      Venta principal     */
    $codigoPro= isset($_POST['codigo']) ? mysqli_real_escape_string($conexion, $_POST['codigo']) : false;
    //si exite el post nombre es igual a true, si no entonces nombre  = false
    $nombrePro= isset($_POST['nombrePro']) ? mysqli_real_escape_string($conexion, $_POST['nombrePro']) : false;
    $precio= isset($_POST['precio']) ? mysqli_real_escape_string($conexion, $_POST['precio']) : false;
    $cantidad= isset($_POST['cantidad']) ? mysqli_real_escape_string($conexion, $_POST['cantidad']) : false;
    $folio= isset($_POST['folio']) ? mysqli_real_escape_string($conexion, $_POST['folio']) : false;
    $usuario = $_SESSION['user_name_ep']['user_name'];
    
    $errores = array();
    //var_dump($errores);
    // Validar datos antes de guardarlos
    
    //venta principal

    //validar el codigo del producto
    if(!empty($codigoPro) && is_numeric($codigoPro) && preg_match("/[0-9]/", $codigoPro)){
        $codigo_validado = true;
    }else{
        $codigo_validado = false;
        $errores['codigo']="El codigo del Producto no es valido";
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
        $errores['precio']="El precio del Producto no es valido";
    }

    //validar la cantidad del producto
    if(!empty($cantidad) && is_numeric($cantidad) && preg_match("/[0-9]/", $cantidad)){
        $cantidad_validado = true;
    }else{
        $cantidad_validado = false;
        $errores['cantidad']="La cantidad del Producto no es valida";
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

    //guardar venta
    $guardar_venta = false;

    $total=$cantidad * $precio;

    if(count($errores) == 0){
        $guardar_venta= TRUE;
        
        //insertar la venta en la base de datos
        $sql="INSERT INTO ventas VALUES(null, '$codigoPro', '$cantidad', '$nombrePro','$total', CURDATE(), '$usuario');";
        //var_dump($sql);
        $guardar = mysqli_query($conexion, $sql);
        //var_dump($guardar);

    }else{
        var_dump($errores);
    }


}

if(isset($_POST['codigo2'])){
    $codigoPro= isset($_POST['codigo2']) ? mysqli_real_escape_string($conexion, $_POST['codigo2']) : false;
    //si exite el post nombre es igual a true, si no entonces nombre  = false
    $nombrePro= isset($_POST['nombre2']) ? mysqli_real_escape_string($conexion, $_POST['nombre2']) : false;
    $precio= isset($_POST['precio2']) ? mysqli_real_escape_string($conexion, $_POST['precio2']) : false;
    $cantidad= isset($_POST['cantidad2']) ? mysqli_real_escape_string($conexion, $_POST['cantidad2']) : false;
    
    $usuario = $_SESSION['user_name_ep']['user_name'];
    
    $errores = array();

    // Validar datos antes de guardarlos
    
    //venta principal

    //validar el codigo del producto
    if(!empty($codigoPro) && is_numeric($codigoPro) && preg_match("/[0-9]/", $codigoPro)){
        $codigo_validado = true;
    }else{
        $codigo_validado = false;
        $errores['codigo2']="El codigo del Producto no es valido";
    }

    //validar el nombre del producto
    if(!empty($nombrePro) && !is_numeric($nombrePro) && !preg_match("/[0-9]/", $nombrePro)){
        $nombrePro_validado = true;
    }else{
        $nombrePro_validado = false;
        $errores['nombre2']="El nombre no es valido";
    }

    //validar el precio del producto
    if(!empty($precio) && is_numeric($precio) && preg_match("/[0-9]/", $precio)){
        $precio_validado = true;
    }else{
        $precio_validado = false;
        $errores['precio2']="El precio del Producto no es valido";
    }

    //validar la cantidad del producto
    if(!empty($cantidad) && is_numeric($cantidad) && preg_match("/[0-9]/", $cantidad)){
        $cantidad_validado = true;
    }else{
        $cantidad_validado = false;
        $errores['cantidad2']="La cantidad del Producto no es valida";
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
    //var_dump($errores);die;
    //guardar venta

    $query= "select idventa from ventas order by idventa desc limit 1";
    $start= mysqli_query($conexion,$query); 
    $verid= mysqli_num_rows($start);
    $folio= mysqli_fetch_array($start);


    $guardar_venta = false;

    $total=$cantidad * $precio;

    if(count($errores) == 0){
        $guardar_venta= TRUE;
        
        $query= "select idventa from ventas order by idventa desc limit 1";
        $start= mysqli_query($conexion,$query); 
        $verid= mysqli_num_rows($start);
        $folioo= mysqli_fetch_array($start);
        $folioFinal = $folioo[0] + 1;

        //insertar la venta en la base de datos
        $sql="INSERT INTO subventas VALUES(null, '$folioFinal'-1, '$codigoPro', '$cantidad', '$nombrePro','$total', CURDATE(), '$usuario');";
        
        $guardar = mysqli_query($conexion, $sql);
        //var_dump($sql);
        //var_dump($guardar);die;
    }else{
        var_dump($errores);
    }
}

if(isset($_POST['codigo3'])){
    
    $codigoPro3= isset($_POST['codigo3']) ? mysqli_real_escape_string($conexion, $_POST['codigo3']) : false;
    //si exite el post nombre es igual a true, si no entonces nombre  = false
    $nombrePro3= isset($_POST['nombre3']) ? mysqli_real_escape_string($conexion, $_POST['nombre3']) : false;
    $precio3= isset($_POST['precio3']) ? mysqli_real_escape_string($conexion, $_POST['precio3']) : false;
    $cantidad3= isset($_POST['cantidad3']) ? mysqli_real_escape_string($conexion, $_POST['cantidad3']) : false;
    
    $usuario = $_SESSION['user_name_ep']['user_name'];
    
    $errores = array();

    // Validar datos antes de guardarlos
    
    //venta principal

    //validar el codigo del producto
    if(!empty($codigoPro3) && is_numeric($codigoPro3) && preg_match("/[0-9]/", $codigoPro3)){
        $codigo_validado = true;
    }else{
        $codigo_validado = false;
        $errores['codigo2']="El codigo del Producto no es valido";
    }

    //validar el nombre del producto
    if(!empty($nombrePro3) && !is_numeric($nombrePro3) && !preg_match("/[0-9]/", $nombrePro3)){
        $nombrePro_validado = true;
    }else{
        $nombrePro_validado = false;
        $errores['nombre3']="El nombre no es valido";
    }

    //validar el precio del producto
    if(!empty($precio3) && is_numeric($precio3) && preg_match("/[0-9]/", $precio3)){
        $precio_validado = true;
    }else{
        $precio_validado = false;
        $errores['precio2']="El precio del Producto no es valido";
    }

    //validar la cantidad del producto
    if(!empty($cantidad3) && is_numeric($cantidad3) && preg_match("/[0-9]/", $cantidad3)){
        $cantidad_validado = true;
    }else{
        $cantidad_validado = false;
        $errores['cantidad2']="La cantidad del Producto no es valida";
    }

    //guardar venta
    $guardar_venta = false;

    $total=$cantidad3 * $precio3;
    
    if(count($errores) == 0){
        $guardar_venta= TRUE;
        
        $query= "select idventa from ventas order by idventa desc limit 1";
        $start= mysqli_query($conexion,$query); 
        $verid= mysqli_num_rows($start);
        $folioo= mysqli_fetch_array($start);
        $folioFinal = $folioo[0] + 1;

        $codigoPro = $codigoPro3;
        $cantidad = $cantidad3;
        $nombrePro = $nombrePro3;
        $total = $cantidad3 * $precio3;
        $usuario = "cchuco";


        $prueba="INSERT INTO subventas VALUES(null, '$folioFinal'-1, '$codigoPro', '$cantidad', '$nombrePro','$total', CURDATE(), '$usuario');";
        $res = mysqli_query($conexion, $prueba);

        //var_dump($prueba);
        //var_dump($res);
    
        
    }else{
        var_dump($errores);
    }
    //var_dump($errores);
}

header("location: rVentas?exito");
?>