<?php require_once "../assets/includes/nav.php" ?>
<?php  if(isset($_SESSION['user_name'])): ?>
<p>Fallo en el sistema, aunexiste una sesión iniciada</p>
<?php endif; ?>

    <div class="login">
        <div class="container">
            <div class="formulario">
                <form action="login.php" id="loginA" method="POST">

                    <h2 class="center">Inicia sesión</h2>
                    <?php if(isset($_GET['error'])):?>
                        <div class="alertaError" ><p>Datos no validos <br> te quedan 2 intentos</p></div>
                    <?php endif ?>
                    
                    <?php if(isset($_GET['falloDos'])):?>
                        <div class="alertaError" ><p>Datos no validos <br> te queda 1 intento</p></div>
                    <?php endif ?>
                    
                    <?php if(isset($_GET['3rr0r'])):?>
                        <div class="alertaError" ><p>Datos no validos <br> Se bloqueo la cuenta temporalmente</p></div>
                    <?php endif ?>
                    
                    <div class="datos">
                        <input type="text" name="usuario" id="usuario" placeholder="Usuario" required minlength="3" maxlength="30" pattern="[A-Za-z0-9]+" <?php if(isset($_GET['3rr0r'])):?> disabled <?php endif ?>>
                        <!--<input type="text" name="rango" id="usuario" placeholder="   Rango" required minlength="5" maxlength="30" pattern="[A-Za-z0-9]+" <?php if(isset($_GET['3rr0r'])):?> disabled <?php endif ?>>-->
                        <input type="password" name="pass" id="pass" placeholder="Contraseña" required minlength="1" maxlength="30" pattern="[A-Za-z0-9]+" <?php if(isset($_GET['3rr0r'])):?> disabled <?php endif ?>>
                        
                        <input type="submit" name="ingreso" id="ingreso" <?php if(isset($_GET['error'])):?> value="Ingresar" <?php elseif(isset($_GET['falloDos'])):?> value="Ingresa"<?php endif ?> value="Entrar" <?php if(isset($_GET['3rr0r'])):?> disabled <?php endif ?>>
                    </div>
                                    
                </form>
            </div>
        </div>        
    </div>