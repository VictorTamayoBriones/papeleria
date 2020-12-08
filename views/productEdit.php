<?php 
    require_once "../assets/includes/nav.php" ;
    require_once "../conexion.php";

    $id=$_GET['producto'];

    $sql = "SELECT * FROM productos  WHERE id = $id;";
    $query = mysqli_query($db, $sql);
    $rows = mysqli_num_rows($query);
    $producto = mysqli_fetch_assoc($query);
?>
<?php   //if(isset($_SESSION['user_name'])):    ?>

    <div class="register">
        <div class="container">
        <div class="detalles">
                <div class="texto">
                    <p>Actualize los datos que desee y despues oprima el boton actualizar producto. <br>Recuerde llenar todos los campos </p>
                </div>
            </div>
            <form action='../scripts/php/registroProductos.php?id=<?=$id?>' method="POST" enctype="multipart/form-data">
                <div class="container">
                    <div class="titulo">
                        <h2>Registro de productos</h2>
                    </div>

                    <div class="datos">
                        <input type="text" placeholder="Nombre del producto" id="productName" name="productName" value="<?= $producto['nombre_producto'] ?>">

                        <input type="text" id="productId" name="productId" value="ID: 00<?php echo $id; ?>" disabled>

                        <input type="number" placeholder="Precio del producto" id="productPrecio" name="productPrecio" value="<?= $producto['precio'] ?>">

                        <input type="number" placeholder="Cantidad del producto" id="productCantidad" name="productCantidad" value="<?= $producto['cantidad'] ?>">
                        
                        <label for="imageProduct">Imagen del producto</label>
                        <input type="file" name="archivo">

                        <input type="submit" value="Actualizar producto" name="productUpdate">
                    </div>
                </div>
            </form>
        </div>
    </div>
    
<? //php endif; ?>
<?php // if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>  