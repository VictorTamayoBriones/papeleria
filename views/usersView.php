<?php require_once "../assets/includes/nav.php" ?>
<?php require_once "../conexion.php" ?>

<?php   //if(isset($_SESSION['user_name'])):    ?>
<?php 
    $sql = "SELECT * FROM usuarios;";
    $query = mysqli_query($db, $sql);
    $rows = mysqli_num_rows($query);
    $user = mysqli_fetch_assoc($query);
?>
    <div class="objectView">

        <div class="container">
            <div class="search">
                <input type="text" placeholder="Buscar..." id='buscar'>
                <input type="submit" value="Buscar">
            </div>
            <table class="tabla">

                <thead>
                    <th>No</th>
                    <th>Nombre</th>
                    <th>Celular</th>
                    <th>Opciones</th>
                </thead>
                <?php
                    for($i=0; $i <= $user; $i++){
                        $id = $user['id'];$name = $user['nombre'];$phone = $user['phone'];
                        echo"
                        <tbody>
                            <td>$id</td>
                            <td id='name' >$name</td>
                            <td>$phone</td>
                            <form action='../scripts/php/actions.php?user=$id' method='POST'>
                                <td><button class='btn view' name='ver' >Ver</button> <button class='btn update' name='update' >Editar</button> <button class='btn delete' name='delete' >Eliminar</button></td>
                            </form>
                        </tbody>";
                        $user = mysqli_fetch_assoc($query);
                    }
                ?>
           
            </table>
        </div>
    </div>
    <script src="../scripts/js/buscador.js"></script>
<? //php endif; ?>
<?php // if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>    