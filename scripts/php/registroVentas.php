<?php
require_once "../../conexion.php";
    if(isset($_POST)){
        //recoger los datos del formulario
        $name = $_POST['productVentaName'];
        $cantidad = $_POST['productVentaCantidad'];

        //recoger los datos del producto
        $sql = "SELECT * FROM productos WHERE nombre_producto = '$name';";
        $query = mysqli_query($db, $sql);
        $rows = mysqli_num_rows($query);
        $product = mysqli_fetch_assoc($query);

        //guardar los datos en una session
        $_SESSION['producto'] = $product;

        //verificar si la session activa es de admin o de empleado
        $user = isset($_SESSION['admin']) ? $_SESSION['admin']['id'] : $_SESSION['empleado'];

        //insertar datos de la tabla venta 
        $insertarV = "INSERT INTO ventas VALUES(null, '$user', CURDATE());";
        $guardar = mysqli_query($db, $insertarV);
        
        //sacar el folio de la venta principal actual
        $sqlVenta = "SELECT id FROM ventas;";
        $ejecutar = mysqli_query($db,$sqlVenta);
        $columnas = mysqli_num_rows($ejecutar);
        $folio = mysqli_fetch_assoc($ejecutar);
        var_dump($folio);
        //insertar datos en la subventa
        $id = $_SESSION['producto']['id'];

        $precio = $_SESSION['producto']['precio'];
        $total = $precio*$cantidad;
        
        $insertarS = "INSERT INTO subventas VALUES(null, '$folio', '$id', '$cantidad', $total);";
        $guardarVenta = mysqli_query($db, $insertarS);
        var_dump($insertarS);
        var_dump($guardarVenta);var_dump(mysqli_error($db));die();
        header('Location: ../../views/ventasRegister.php?status=true');
    }
?>