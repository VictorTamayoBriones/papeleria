<?php require_once "../assets/includes/nav.php" ?>
<?php require_once "../conexion.php" ?>
<?php require_once "../assets/includes/helpers.php" ?>
<?php 
    $id=$_GET['user'];

    $sql = "SELECT * FROM usuarios  WHERE id = $id;";
    $query = mysqli_query($db, $sql);
    $rows = mysqli_num_rows($query);
    $user = mysqli_fetch_assoc($query);
?>
<?php   //if(isset($_SESSION['user_name'])):    ?>
    
    <div class="register">
        <div class="container">
            <div class="detalles">
                <div class="texto">
                    <p>Actualize los datos que desee y despues oprima el boton actualizar usuario. <br>Recuerde llenar todos los campos </p>
                </div>
            </div>
            <form action="../scripts/php/actions.php?user=<?=$id?>" method="POST">
                <div class="container">
                    <div class="titulo">
                        <h2>Actualizar usuario</h2>
                    </div>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'tipo') : ''; ?>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido') : ''; ?>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nacimiento') : ''; ?>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'celular') : ''; ?>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'direccion') : ''; ?>

                    <?php if(isset($_SESSION['completado'])): ?>
                        <div class="alerta alerta-exito">
                            <?=$_SESSION['completado']?>
                        </div>
                    <?php elseif(isset($_SESSION['errores']['general'])): ?>
                        <div class="alerta alerta-error">
                            <?=$_SESSION['errores']['general']?>
                        </div>
                    <?php endif; ?>
                    <div class="datos">

        
                        
                        <!--<input type="text" placeholder="administrador / empleado" id="userType" name="userType">-->
                        <select name="userType" id="userType">

                            <option value="cargo">Cargo de usuario</option>
                            <option value="administrador">Administrador</option>
                            <option value="empleado">Empleado</option>
                        </select>
                        
                        <input type="text" placeholder="Nombre del usuario" id="userName" name="userName" value="<?=$user['nombre']?>">

                        
                        <input type="text" placeholder="Apellidos del usuario" id="userLsName" name="userLsName" value="<?=$user['apellido']?>">

                        
                        <input type="email" placeholder="Correo electronico" id="email" name="email" value="<?=$user['email']?>">

                        
                        <input type="password" placeholder="Contraseña" id="pass" name="pass" value="">

                        
                        <input type="text" placeholder="dd/mm/aaaa" id="userBrith" name="userBrith" value="<?=$user['brith']?>">

                        
                        <input type="text" placeholder="Celular" id="userPhone" name="userPhone" value="<?=$user['phone']?>">
                        
                        
                        <input type="text" placeholder="Dirección" id="userAdrees" name="userAdrees" value="<?=$user['adrees']?>">

                        <input type="submit" name="updateUser" value="Actualizar usuario">
                    </div>
                </div>
            </form>
            <?php borrarErrores(); ?>
        </div>
    </div>

<? //php endif; ?>
<?php // if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>    