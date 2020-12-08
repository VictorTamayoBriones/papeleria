<?php
require_once "../../conexion.php";
    if(isset($_POST)){

        $id = $_POST['ventaId'];
        $productName = $_POST['productVentaName'];
        $productPrecio = $_POST['productPrecio'];
        $productCantidad = $_POST['productVentaCantidad'];

        $sql= "INSERT INTO usuarios VALUES(null, '$tipo', '$nombre', '$apellido', '$email', '$password_segura', '$nacimiento' , $celular, '$direccion', '$image', CURDATE());";

        $guardar = mysqli_query($db, $sql);
    }
?>