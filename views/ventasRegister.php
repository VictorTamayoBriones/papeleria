<?php  
    require_once "../assets/includes/nav.php";
    require_once "../conexion.php";

    $sql = "SELECT id FROM ventas ORDER BY id DESC LIMIT 1;";
    $ejecutarconsulta= mysqli_query($db,$sql); 
    $verid= mysqli_num_rows($ejecutarconsulta);
    $id= mysqli_fetch_array($ejecutarconsulta);
    $id = $id[0] + 1;
    $sql_1 = "SELECT * FROM productos;";
    $query = mysqli_query($db, $sql_1);
    $rows = mysqli_num_rows($query);
    $product = mysqli_fetch_assoc($query);
?>    
<?php   //if(isset($_SESSION['user_name'])):    ?>
    <div class="register">
        <div class="container">
            <form action="../scripts/php/registroVentas.php" method="POST">
                <div class="container">
                    <div class="titulo">
                        <h2>Registro de ventas</h2>
                    </div>

                    <div class="datos">

                        <select id="productVentaName" name="productVentaName">
                            <option value="name">Nombre del producto</option>
                            <?php
                                for($i=0; $i <= $product; $i++){
                                    $name = $product['nombre_producto'];
                                    echo"
                                        <option value=$name>$name</option>                                  
                                    ";
                                    $product = mysqli_fetch_assoc($query);
                                }

                            ?>
                        </select>

                        <input type="number" placeholder="Cantidad del producto" id="productVentaCantidad" name="productVentaCantidad">
                        <div class="datos otro"></div>
                        <input type="text" placeholder="ID de venta" id="ventaId" name="ventaId" value="Folio: 00<?= $id ?>" disabled>

                        <button type="button" class="añadir" id="otroProducto" >Añadir otro producto</button>
                        
                        <input type="submit" value="Registrar Venta">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../scripts/js/otroProducto.js"></script>
<? //php endif; ?>
<?php // if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>    