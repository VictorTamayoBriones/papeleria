<?php require_once "../assets/includes/nav.php" ?>
    <div class="login">
        <form action="login.php" id="loginA" method="POS">

            <strong><p class="center">Inicia sesión</p></strong>
        
            <img src="../assets/images/descarga.png" alt="login">
            
                <input type="text" name="usuario" id="usuario" placeholder="    ingresa tu usuario" required minlength="8" maxlength="30" pattern="[A-Za-z0-9]+">

                <input type="password" name="pass" id="pass" placeholder="  ingresa tu contraseña" required minlength="8" maxlength="30" pattern="[0-9]+">
                
                <input type="submit" value="Entrar" id="ingreso">
                <!--
                <a href="../administrador/adindex.php" id="ingreso">Ingresar</a>
                -->
                
            </form>
        
    </div>
<?php require_once "../assets/includes/footer.php" ?>