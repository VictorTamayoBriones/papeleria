<?php require_once "../assets/includes/nav.php" ?>
<?php require_once "../conexion.php" ?>

<?php   //if(isset($_SESSION['user_name'])):    ?>
<?php 
    $sql = "SELECT * FROM productos;";
    $query = mysqli_query($db, $sql);
    $rows = mysqli_num_rows($query);
    $product = mysqli_fetch_assoc($query);
?>
    <div class="objectView">

        <div class="container">
            <div class="search">
                <input type="text" placeholder="Buscar..." id='buscar'>
                <input type="submit" value="Buscar" id="btnBuscar">
            </div>
            <table class="tabla">

                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th class='image' >Imagen</th>
                    <th>Opciones</th>
                </thead>
                <?php
                    for($i=0; $i <= $product; $i++){
                        $id = $product['id'];
                        $name = $product['nombre_producto'];
                        $cost = $product['precio'];
                        $cantidad = $product['cantidad'];
                        $image = $product['productImage'];
                        $Fimage ="<img src='../scripts/php/$image' alt='$name'>";
                        echo"
                        <tbody>
                            <td>$id</td>
                            <td id='name' >$name</td>
                            <td>$cost</td>
                            <td>$cantidad</td>
                            <td class='image' >$Fimage</td>
                            <form action='../scripts/php/actions.php?producto=$id' method='POST'>
                                <td><button class='btn update' name='update' >Editar</button> <button class='btn delete' name='delete'>Eliminar</button></td>
                            </form>
                        </tbody>";
                        $product = mysqli_fetch_assoc($query);
                    }
                ?>
           
            </table>
        </div>
    </div>
    <script src="../scripts/js/buscador.js"></script>
<? //php endif; ?>
<?php // if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>    