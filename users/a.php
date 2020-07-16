<?php require_once "../assets/includes/nav.php" ?>
    
    <form action="login.php"  method="POST">
    <input  type="text" placeholder="user_name" name="usuario" required minlength="1" maxlength="60"/>
    <input  type="password" placeholder="contraseña" name="pass" />
    <input type="submit" name="ingreso"></input>
    </form>
    

<?php require_once "../assets/includes/footer.php" ?>