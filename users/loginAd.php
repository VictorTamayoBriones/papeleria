<?php require_once "../assets/includes/nav.php" ?>
<?php require_once "../assets/includes/intentos.php" ?>
    <div class="login">
        <form action="login.php" id="loginA" method="POST">

            <strong><p class="center">Inicia sesión</p></strong>
            <?php if(isset($_GET['error'])):?>
                <div class="alertaError" ><p>Datos no validos <br> te quedan 2 intentos</p></div>
            <?php endif ?>

            <?php if(isset($_GET['falloDos'])):?>
                <div class="alertaError" ><p>Datos no validos <br> te queda 1 intento</p></div>
            <?php endif ?>

            <?php if(isset($_GET['3rr0r'])):?>
                <div class="alertaError" ><p>Datos no validos <br> Se bloqueo la cuenta temporalmente</p></div>
            <?php endif ?>
            <?php mostrarIntentos(); ?>
            <img src="../assets/images/descarga.png" alt="login">
                
                <input type="text" name="usuario" id="usuario" placeholder="    ingresa tu usuario" required minlength="8" maxlength="30" pattern="[A-Za-z0-9]+" <?php if(isset($_GET['3rr0r'])):?> disabled <?php endif ?>>

                <input type="password" name="pass" id="pass" placeholder="  ingresa tu contraseña" required minlength="8" maxlength="30" pattern="[0-9]+" <?php if(isset($_GET['3rr0r'])):?> disabled <?php endif ?>>
                
                <input type="submit" name="ingreso" id="ingreso" <?php if(isset($_GET['error'])):?> value="Ingresar" <?php elseif(isset($_GET['falloDos'])):?> value="Ingresa"<?php endif ?> value="Entrar" <?php if(isset($_GET['3rr0r'])):?> disabled <?php endif ?>>
                    
                <!--
                <a href="../administrador/adindex.php" id="ingreso">Ingresar</a>     
                -->
                
            </form>
        
    </div>
<?php require_once "../assets/includes/footer.php" ?>