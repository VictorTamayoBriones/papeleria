<?php require_once "../assets/includes/nav.php" ?>
    <div class="login">
        <form action="login.php" id="loginE">
            <strong><p>Inicia sesión</p></strong>

            <img src="../assets/images/descarga.png" alt="login">
            
                <input type="text" name="usuario" id="usuario" placeholder="  ingresa tu usuario">

                <input type="password" name="pass" id="pass"   placeholder="  ingresa tu contraseña">

                <a href="../administrador/adindex.php" id="ingreso">Ingresar</a>
        </form>

    </div>
<?php require_once "../assets/includes/footer.php" ?>