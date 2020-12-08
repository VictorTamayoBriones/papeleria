<?php
require_once "../../conexion.php";

var_dump($_POST);

$name = $_POST['productName'];
$cost = $_POST['productPrecio'];
$cantidad = $_POST['productCantidad'];

$archivo = $_FILES['archivo'];
$nombre= $archivo['name'];
$tipo= $archivo['type']; 

if($tipo=='image/jpg' || $tipo=='image/gif' || $tipo=='image/JPG' || $tipo=='image/png' || $tipo =='image/jpeg'){
    
    if(!is_dir('images')){
        mkdir('images', 0777);
    }
    
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);

    $image = 'images/'.$nombre;
    /*
    header('Refresh: 5; URL=index.php');
    echo '<h1>'.'La imagen se subio correctamente'.'</h1>';
    */
    if(!isset($_POST['productUpdate'])){

        $sql = "INSERT INTO productos VALUES(null, '$name', '$cost', '$cantidad', '$image');";
        $guardar = mysqli_query($db, $sql);

        if($guardar){
            header('Location: ../../views/ProductRegister.php?exito');
        }else{
            var_dump(mysqli_error($db));
        }
    }else{
        
        $productId = $_GET['id'];
        
        $modi= "UPDATE productos SET nombre_producto='$name', precio='$cost', cantidad='$cantidad', productImage='$image' WHERE id='$productId';";
        $resultado= mysqli_query($db, $modi);
        if($resultado){
            header("Location: ../../views/productView.php");
        }else{
            echo"Error";
        }
    }
    
}
