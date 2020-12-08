<?php require_once "../assets/includes/nav.php" ?>
<?php //require_once "../conexion.php" ?>

<?php   //if(isset($_SESSION['user_name'])):    ?>

    <div class="register">
        <div class="container">
            <form action="../scripts/php/registroVentas.php" method="POST">
                <div class="container">
                    <div class="titulo">
                        <h2>Registro de ventas</h2>
                    </div>

                    <div class="datos">
                        <input type="number" placeholder="ID de venta" id="ventaId" name="ventaId">

                        <input type="text" placeholder="Nombre del producto" id="productVentaName" name="productVentaName">

                        <input type="number" placeholder="Precio del producto" id="productVentaPrecio" name="productVentaPrecio">

                        <input type="number" placeholder="Cantidad del producto" id="productVentaCantidad" name="productVentaCantidad">
                        
                        <button type="button" class="añadir">Añadir otro producto</button>
                        
                        <input type="submit" value="Registrar Venta">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="return">
        <a href="./index.php">Regresar</a>
    </div>
    
<? //php endif; ?>
<?php // if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>    