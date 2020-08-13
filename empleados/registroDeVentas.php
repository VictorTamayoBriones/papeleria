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

    if(isset($_POST['codigo4'])){
        
        $codigoPro4= isset($_POST['codigo4']) ? mysqli_real_escape_string($conexion, $_POST['codigo4']) : false;
        //si exite el post nombre es igual a true, si no entonces nombre  = false
        $nombrePro4= isset($_POST['nombre4']) ? mysqli_real_escape_string($conexion, $_POST['nombre4']) : false;
        $precio4= isset($_POST['precio4']) ? mysqli_real_escape_string($conexion, $_POST['precio4']) : false;
        $cantidad4= isset($_POST['cantidad4']) ? mysqli_real_escape_string($conexion, $_POST['cantidad4']) : false;
        
        $usuario = $_SESSION['user_name_ep']['user_name'];
        
        $errores = array();
    
        // Validar datos antes de guardarlos
        
        //venta principal
    
        //validar el codigo del producto
        if(!empty($codigoPro4) && is_numeric($codigoPro4) && preg_match("/[0-9]/", $codigoPro4)){
            $codigo_validado = true;
        }else{
            $codigo_validado = false;
            $errores['codigo4']="El codigo del Producto no es valido";
        }
    
        //validar el nombre del producto
        if(!empty($nombrePro4) && !is_numeric($nombrePro4) && !preg_match("/[0-9]/", $nombrePro4)){
            $nombrePro_validado = true;
        }else{
            $nombrePro_validado = false;
            $errores['nombre4']="El nombre no es valido";
        }
    
        //validar el precio del producto
        if(!empty($precio4) && is_numeric($precio4) && preg_match("/[0-9]/", $precio4)){
            $precio_validado = true;
        }else{
            $precio_validado = false;
            $errores['precio4']="El precio del Producto no es valido";
        }
    
        //validar la cantidad del producto
        if(!empty($cantidad4) && is_numeric($cantidad4) && preg_match("/[0-9]/", $cantidad4)){
            $cantidad_validado = true;
        }else{
            $cantidad_validado = false;
            $errores['cantidad4']="La cantidad del Producto no es valida";
        }
    
        //guardar venta
        $guardar_venta = false;
    
        $total=$cantidad4 * $precio4;
        
        if(count($errores) == 0){
            $guardar_venta= TRUE;
            
            $query= "select idventa from ventas order by idventa desc limit 1";
            $start= mysqli_query($conexion,$query); 
            $verid= mysqli_num_rows($start);
            $folioo= mysqli_fetch_array($start);
            $folioFinal = $folioo[0] + 1;
    
            $codigoPro = $codigoPro4;
            $cantidad = $cantidad4;
            $nombrePro = $nombrePro4;
            $total = $cantidad4 * $precio4;
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

    if(isset($_POST['codigo5'])){
        
        $codigoPro5= isset($_POST['codigo5']) ? mysqli_real_escape_string($conexion, $_POST['codigo5']) : false;
        //si exite el post nombre es igual a true, si no entonces nombre  = false
        $nombrePro5= isset($_POST['nombre5']) ? mysqli_real_escape_string($conexion, $_POST['nombre5']) : false;
        $precio5= isset($_POST['precio5']) ? mysqli_real_escape_string($conexion, $_POST['precio5']) : false;
        $cantidad5= isset($_POST['cantidad5']) ? mysqli_real_escape_string($conexion, $_POST['cantidad5']) : false;
        
        $usuario = $_SESSION['user_name_ep']['user_name'];
        
        $errores = array();
    
        // Validar datos antes de guardarlos
        
        //venta principal
    
        //validar el codigo del producto
        if(!empty($codigoPro5) && is_numeric($codigoPro5) && preg_match("/[0-9]/", $codigoPro5)){
            $codigo_validado = true;
        }else{
            $codigo_validado = false;
            $errores['codigo5']="El codigo del Producto no es valido";
        }
    
        //validar el nombre del producto
        if(!empty($nombrePro5) && !is_numeric($nombrePro5) && !preg_match("/[0-9]/", $nombrePro5)){
            $nombrePro_validado = true;
        }else{
            $nombrePro_validado = false;
            $errores['nombre5']="El nombre no es valido";
        }
    
        //validar el precio del producto
        if(!empty($precio5) && is_numeric($precio5) && preg_match("/[0-9]/", $precio5)){
            $precio_validado = true;
        }else{
            $precio_validado = false;
            $errores['precio5']="El precio del Producto no es valido";
        }
    
        //validar la cantidad del producto
        if(!empty($cantidad5) && is_numeric($cantidad5) && preg_match("/[0-9]/", $cantidad5)){
            $cantidad_validado = true;
        }else{
            $cantidad_validado = false;
            $errores['cantidad5']="La cantidad del Producto no es valida";
        }
    
        //guardar venta
        $guardar_venta = false;
    
        $total=$cantidad5 * $precio5;
        
        if(count($errores) == 0){
            $guardar_venta= TRUE;
            
            $query= "select idventa from ventas order by idventa desc limit 1";
            $start= mysqli_query($conexion,$query); 
            $verid= mysqli_num_rows($start);
            $folioo= mysqli_fetch_array($start);
            $folioFinal = $folioo[0] + 1;
    
            $codigoPro = $codigoPro5;
            $cantidad = $cantidad5;
            $nombrePro = $nombrePro5;
            $total = $cantidad5 * $precio5;
    
    
            $prueba="INSERT INTO subventas VALUES(null, '$folioFinal'-1, '$codigoPro', '$cantidad', '$nombrePro','$total', CURDATE(), '$usuario');";
            $res = mysqli_query($conexion, $prueba);
    
            //var_dump($prueba);
            //var_dump($res);
        
            
        }else{
            var_dump($errores);
        }
        //var_dump($errores);
    }

    if(isset($_POST['codigo6'])){
        
        $codigoPro6= isset($_POST['codigo6']) ? mysqli_real_escape_string($conexion, $_POST['codigo6']) : false;
        //si exite el post nombre es igual a true, si no entonces nombre  = false
        $nombrePro6= isset($_POST['nombre6']) ? mysqli_real_escape_string($conexion, $_POST['nombre6']) : false;
        $precio6= isset($_POST['precio6']) ? mysqli_real_escape_string($conexion, $_POST['precio6']) : false;
        $cantidad6= isset($_POST['cantidad6']) ? mysqli_real_escape_string($conexion, $_POST['cantidad6']) : false;
        
        $usuario = $_SESSION['user_name_ep']['user_name'];
        
        $errores = array();
    
        // Validar datos antes de guardarlos
        
        //venta principal
    
        //validar el codigo del producto
        if(!empty($codigoPro6) && is_numeric($codigoPro6) && preg_match("/[0-9]/", $codigoPro6)){
            $codigo_validado = true;
        }else{
            $codigo_validado = false;
            $errores['codigo6']="El codigo del Producto no es valido";
        }
    
        //validar el nombre del producto
        if(!empty($nombrePro6) && !is_numeric($nombrePro6) && !preg_match("/[0-9]/", $nombrePro6)){
            $nombrePro_validado = true;
        }else{
            $nombrePro_validado = false;
            $errores['nombre6']="El nombre no es valido";
        }
    
        //validar el precio del producto
        if(!empty($precio6) && is_numeric($precio6) && preg_match("/[0-9]/", $precio6)){
            $precio_validado = true;
        }else{
            $precio_validado = false;
            $errores['precio6']="El precio del Producto no es valido";
        }
    
        //validar la cantidad del producto
        if(!empty($cantidad6) && is_numeric($cantidad6) && preg_match("/[0-9]/", $cantidad6)){
            $cantidad_validado = true;
        }else{
            $cantidad_validado = false;
            $errores['cantidad6']="La cantidad del Producto no es valida";
        }
    
        //guardar venta
        $guardar_venta = false;
    
        $total=$cantidad6 * $precio6;
        
        if(count($errores) == 0){
            $guardar_venta= TRUE;
            
            $query= "select idventa from ventas order by idventa desc limit 1";
            $start= mysqli_query($conexion,$query); 
            $verid= mysqli_num_rows($start);
            $folioo= mysqli_fetch_array($start);
            $folioFinal = $folioo[0] + 1;
    
            $codigoPro = $codigoPro6;
            $cantidad = $cantidad6;
            $nombrePro = $nombrePro6;
            $total = $cantidad6 * $precio6;
    
    
            $prueba="INSERT INTO subventas VALUES(null, '$folioFinal'-1, '$codigoPro', '$cantidad', '$nombrePro','$total', CURDATE(), '$usuario');";
            $res = mysqli_query($conexion, $prueba);
    
            //var_dump($prueba);
            //var_dump($res);
        
            
        }else{
            var_dump($errores);
        }
        //var_dump($errores);
    }

    if(isset($_POST['codigo7'])){
        
        $codigoPro7= isset($_POST['codigo7']) ? mysqli_real_escape_string($conexion, $_POST['codigo7']) : false;
        //si exite el post nombre es igual a true, si no entonces nombre  = false
        $nombrePro7= isset($_POST['nombre7']) ? mysqli_real_escape_string($conexion, $_POST['nombre7']) : false;
        $precio7= isset($_POST['precio7']) ? mysqli_real_escape_string($conexion, $_POST['precio7']) : false;
        $cantidad7= isset($_POST['cantidad7']) ? mysqli_real_escape_string($conexion, $_POST['cantidad7']) : false;
        
        $usuario = $_SESSION['user_name_ep']['user_name'];
        
        $errores = array();
    
        // Validar datos antes de guardarlos
        
        //venta principal
    
        //validar el codigo del producto
        if(!empty($codigoPro7) && is_numeric($codigoPro7) && preg_match("/[0-9]/", $codigoPro7)){
            $codigo_validado = true;
        }else{
            $codigo_validado = false;
            $errores['codigo7']="El codigo del Producto no es valido";
        }
    
        //validar el nombre del producto
        if(!empty($nombrePro7) && !is_numeric($nombrePro7) && !preg_match("/[0-9]/", $nombrePro7)){
            $nombrePro_validado = true;
        }else{
            $nombrePro_validado = false;
            $errores['nombre7']="El nombre no es valido";
        }
    
        //validar el precio del producto
        if(!empty($precio7) && is_numeric($precio7) && preg_match("/[0-9]/", $precio7)){
            $precio_validado = true;
        }else{
            $precio_validado = false;
            $errores['precio7']="El precio del Producto no es valido";
        }
    
        //validar la cantidad del producto
        if(!empty($cantidad7) && is_numeric($cantidad7) && preg_match("/[0-9]/", $cantidad7)){
            $cantidad_validado = true;
        }else{
            $cantidad_validado = false;
            $errores['cantidad7']="La cantidad del Producto no es valida";
        }
    
        //guardar venta
        $guardar_venta = false;
    
        $total=$cantidad7 * $precio7;
        
        if(count($errores) == 0){
            $guardar_venta= TRUE;
            
            $query= "select idventa from ventas order by idventa desc limit 1";
            $start= mysqli_query($conexion,$query); 
            $verid= mysqli_num_rows($start);
            $folioo= mysqli_fetch_array($start);
            $folioFinal = $folioo[0] + 1;
    
            $codigoPro = $codigoPro7;
            $cantidad = $cantidad7;
            $nombrePro = $nombrePro7;
            $total = $cantidad7 * $precio7;
    
    
            $prueba="INSERT INTO subventas VALUES(null, '$folioFinal'-1, '$codigoPro', '$cantidad', '$nombrePro','$total', CURDATE(), '$usuario');";
            $res = mysqli_query($conexion, $prueba);
    
            //var_dump($prueba);
            //var_dump($res);
        
            
        }else{
            var_dump($errores);
        }
        //var_dump($errores);
    }

    if(isset($_POST['codigo8'])){
        
        $codigoPro8= isset($_POST['codigo8']) ? mysqli_real_escape_string($conexion, $_POST['codigo8']) : false;
        //si exite el post nombre es igual a true, si no entonces nombre  = false
        $nombrePro8= isset($_POST['nombre8']) ? mysqli_real_escape_string($conexion, $_POST['nombre8']) : false;
        $precio8= isset($_POST['precio8']) ? mysqli_real_escape_string($conexion, $_POST['precio8']) : false;
        $cantidad8= isset($_POST['cantidad8']) ? mysqli_real_escape_string($conexion, $_POST['cantidad8']) : false;
        
        $usuario = $_SESSION['user_name_ep']['user_name'];
        
        $errores = array();
    
        // Validar datos antes de guardarlos
        
        //venta principal
    
        //validar el codigo del producto
        if(!empty($codigoPro8) && is_numeric($codigoPro8) && preg_match("/[0-9]/", $codigoPro8)){
            $codigo_validado = true;
        }else{
            $codigo_validado = false;
            $errores['codigo8']="El codigo del Producto no es valido";
        }
    
        //validar el nombre del producto
        if(!empty($nombrePro8) && !is_numeric($nombrePro8) && !preg_match("/[0-9]/", $nombrePro8)){
            $nombrePro_validado = true;
        }else{
            $nombrePro_validado = false;
            $errores['nombre8']="El nombre no es valido";
        }
    
        //validar el precio del producto
        if(!empty($precio8) && is_numeric($precio8) && preg_match("/[0-9]/", $precio8)){
            $precio_validado = true;
        }else{
            $precio_validado = false;
            $errores['precio8']="El precio del Producto no es valido";
        }
    
        //validar la cantidad del producto
        if(!empty($cantidad8) && is_numeric($cantidad8) && preg_match("/[0-9]/", $cantidad8)){
            $cantidad_validado = true;
        }else{
            $cantidad_validado = false;
            $errores['cantidad8']="La cantidad del Producto no es valida";
        }
    
        //guardar venta
        $guardar_venta = false;
    
        $total=$cantidad8 * $precio8;
        
        if(count($errores) == 0){
            $guardar_venta= TRUE;
            
            $query= "select idventa from ventas order by idventa desc limit 1";
            $start= mysqli_query($conexion,$query); 
            $verid= mysqli_num_rows($start);
            $folioo= mysqli_fetch_array($start);
            $folioFinal = $folioo[0] + 1;
    
            $codigoPro = $codigoPro8;
            $cantidad = $cantidad8;
            $nombrePro = $nombrePro8;
            $total = $cantidad7 * $precio8;
    
    
            $prueba="INSERT INTO subventas VALUES(null, '$folioFinal'-1, '$codigoPro', '$cantidad', '$nombrePro','$total', CURDATE(), '$usuario');";
            $res = mysqli_query($conexion, $prueba);
    
            //var_dump($prueba);
            //var_dump($res);
        
            
        }else{
            var_dump($errores);
        }
        //var_dump($errores);
    }
    
    if(isset($_POST['codigo9'])){
        
        $codigoPro9= isset($_POST['codigo9']) ? mysqli_real_escape_string($conexion, $_POST['codigo9']) : false;
        //si exite el post nombre es igual a true, si no entonces nombre  = false
        $nombrePro9= isset($_POST['nombre9']) ? mysqli_real_escape_string($conexion, $_POST['nombre9']) : false;
        $precio9= isset($_POST['precio9']) ? mysqli_real_escape_string($conexion, $_POST['precio9']) : false;
        $cantidad9= isset($_POST['cantidad9']) ? mysqli_real_escape_string($conexion, $_POST['cantidad9']) : false;
        
        $usuario = $_SESSION['user_name_ep']['user_name'];
        
        $errores = array();
    
        // Validar datos antes de guardarlos
        
        //venta principal
    
        //validar el codigo del producto
        if(!empty($codigoPro9) && is_numeric($codigoPro9) && preg_match("/[0-9]/", $codigoPro9)){
            $codigo_validado = true;
        }else{
            $codigo_validado = false;
            $errores['codigo9']="El codigo del Producto no es valido";
        }
    
        //validar el nombre del producto
        if(!empty($nombrePro9) && !is_numeric($nombrePro9) && !preg_match("/[0-9]/", $nombrePro9)){
            $nombrePro_validado = true;
        }else{
            $nombrePro_validado = false;
            $errores['nombre9']="El nombre no es valido";
        }
    
        //validar el precio del producto
        if(!empty($precio9) && is_numeric($precio9) && preg_match("/[0-9]/", $precio9)){
            $precio_validado = true;
        }else{
            $precio_validado = false;
            $errores['precio9']="El precio del Producto no es valido";
        }
    
        //validar la cantidad del producto
        if(!empty($cantidad9) && is_numeric($cantidad9) && preg_match("/[0-9]/", $cantidad9)){
            $cantidad_validado = true;
        }else{
            $cantidad_validado = false;
            $errores['cantidad9']="La cantidad del Producto no es valida";
        }
    
        //guardar venta
        $guardar_venta = false;
    
        $total=$cantidad9 * $precio9;
        
        if(count($errores) == 0){
            $guardar_venta= TRUE;
            
            $query= "select idventa from ventas order by idventa desc limit 1";
            $start= mysqli_query($conexion,$query); 
            $verid= mysqli_num_rows($start);
            $folioo= mysqli_fetch_array($start);
            $folioFinal = $folioo[0] + 1;
    
            $codigoPro = $codigoPro9;
            $cantidad = $cantidad9;
            $nombrePro = $nombrePro9;
            $total = $cantidad7 * $precio9;
    
    
            $prueba="INSERT INTO subventas VALUES(null, '$folioFinal'-1, '$codigoPro', '$cantidad', '$nombrePro','$total', CURDATE(), '$usuario');";
            $res = mysqli_query($conexion, $prueba);
    
            //var_dump($prueba);
            //var_dump($res);
        
            
        }else{
            var_dump($errores);
        }
        //var_dump($errores);
    }
    

}
header("location: rVentas.php?exito");
?>