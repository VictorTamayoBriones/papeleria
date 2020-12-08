<?php 
    require_once "../assets/includes/nav.php" ;
    require_once "../conexion.php";

    $consulta= "SELECT id from productos order by id desc limit 1";
    $ejecutarconsulta= mysqli_query($db,$consulta); 
    $verid= mysqli_num_rows($ejecutarconsulta);
    $id= mysqli_fetch_array($ejecutarconsulta);
?>
<?php   //if(isset($_SESSION['user_name'])):    ?>

    <div class="register">
        <div class="container">
            <form action="../scripts/php/registroProductos.php" method="POST" enctype="multipart/form-data">
                <div class="container">
                    <div class="titulo">
                        <h2>Registro de productos</h2>
                    </div>

                    <div class="datos">
                        <input type="text" placeholder="Nombre del producto" id="productName" name="productName">

                        <input type="text" id="productId" name="productId" value="ID: 00<?php echo $id[0] + 1 ; ?>" disabled>

                        <input type="number" placeholder="Precio del producto" id="productPrecio" name="productPrecio">

                        <input type="number" placeholder="Cantidad del producto" id="productCantidad" name="productCantidad">
                        
                        <label for="imageProduct">Imagen del producto</label>
                        <input type="file" name="archivo">

                        <input type="submit" value="Registrar producto">
                    </div>
                </div>
            </form>
        </div>
    </div>
    
<? //php endif; ?>
<?php // if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>    