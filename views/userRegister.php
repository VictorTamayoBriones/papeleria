<?php require_once "../assets/includes/nav.php" ?>
<?php require_once "../conexion.php" ?>
<?php require_once "../assets/includes/helpers.php" ?>

<?php   //if(isset($_SESSION['user_name'])):    ?>

    <div class="register">
        <div class="container">
            <form action="../scripts/php/registroUsuarios.php" method="POST">
                <div class="container">
                    <div class="titulo">
                        <h2>Registro de usuarios</h2>
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
                        
                        <input type="text" placeholder="Nombre del usuario" id="userName" name="userName">

                        
                        <input type="text" placeholder="Apellidos del usuario" id="userLsName" name="userLsName">

                        
                        <input type="email" placeholder="Correo electronico" id="email" name="email">

                        
                        <input type="password" placeholder="Contraseña" id="pass" name="pass">

                        
                        <input type="text" placeholder="dd/mm/aaaa" id="userBrith" name="userBrith">

                        
                        <input type="text" placeholder="Celular" id="userPhone" name="userPhone">
                        
                        
                        <input type="text" placeholder="Dirección" id="userAdrees" name="userAdrees">

                        <input type="submit" name="submit" value="Registrar usuario">
                    </div>
                </div>
            </form>
            <?php borrarErrores(); ?>
        </div>
    </div>
    
<? //php endif; ?>
<?php // if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>    