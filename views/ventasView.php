<?php  
    require_once "../assets/includes/nav.php";
    require_once "../conexion.php";

    $sql = "SELECT * FROM ventas;";
    $query = mysqli_query($db, $sql);
    $rows = mysqli_num_rows($query);
    $venta = mysqli_fetch_assoc($query);

?>

<?php   //if(isset($_SESSION['user_name'])):    ?>
    <div class="objectView">
        <div class="container">
            <div class="search">
                <input type="text" placeholder="Buscar..." id='buscar'>
                <input type="submit" value="Buscar" id="btnBuscar">
            </div>
        </div>    
    </div>

    <div class="ventasView">
        <div class="container">

            <div class="ventas">
                <?php
                    for($i = 0; $i<$rows; $i++){
                        $id_venta = $venta['id'];
                        $fecha = $venta['fecha'];

                        $productos = "SELECT COUNT(id) AS id, SUM(total) AS total FROM subventas WHERE venta_id = $id_venta;";
                        $queryPro = mysqli_query($db, $productos);
                        $rowsPro = mysqli_num_rows($queryPro);
                        $Pro = mysqli_fetch_assoc($queryPro);
                        
                        $num = $Pro['id'];
                        $totalVenta =  $Pro['total'];
                        
                        echo"
                        <div class='cardVenta'>
                            <h2 id='name'>Venta No. $id_venta</h2>
                            <h3>Productos vendidos: $num</h3>
                            <h3>Total: $$totalVenta</h3>
                            <h3>$fecha</h3>
                        
                            <div class='tabla'>
                                <table>
                                    <thead>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Total</th>
                                    </thead>";

                                $consulta = "   select pro.nombre_producto as 'name', pro.precio as 'precio', sv.cantidad as 'cantidad', sv.total as 'total'
                                                from productos pro
                                                inner join subventas sv on sv.producto_id = pro.id where sv.venta_id=$id_venta;";
                                $ejecutar = mysqli_query($db, $consulta);
                                $columnas = mysqli_num_rows($ejecutar);
                                $productos = mysqli_fetch_assoc($ejecutar);
                                

                            for($j=0; $j<$num; $j++){
                                $name = $productos['name'];
                                $precio = $productos['precio'];
                                $cantidad = $productos['cantidad'];
                                $total = $productos['total'];
                                echo"
                                    <tbody>
                                        <td>$name</td>
                                        <td>$$precio</td>
                                        <td>$cantidad</td>
                                        <td>$total</td>
                                    </tbody>
                                ";
                                $productos = mysqli_fetch_assoc($ejecutar);
                            }
                        
                            echo"
                                </table>
                                
                            </div>
                            
                        </div>";
                        $venta = mysqli_fetch_assoc($query);
                    }

                ?>
                

            </div>

        </div>
    </div>

    <script src="../scripts/js/buscadorVentas.js"></script>
<? //php endif; ?>
<?php // if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>    