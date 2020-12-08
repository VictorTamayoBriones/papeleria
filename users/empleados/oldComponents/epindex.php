<?php require_once "../assets/includes/nav2.php" ?>
<?php require_once "../conexion.php" ?>

<?php if(isset($_SESSION['user_name_ep'])): ?>
    <section id="empleados">
        
        <div class="perfil">    
            <img src="../assets/images/usuario.png" alt="usuario">

            <p id="bnu">Bienvenido usuario</p> 
            <p id="dateu">Martes 27 de abril</p>

            <form action="../logout.php">
            <button class="btn waves-effect waves-light logoutS" type="submit" name="action">Cerrar sesion</button>
            </form>
        </div>

        <div class="op">
       
            <a href="rVentas.php" id="verde">Registrar ventas</a>

            <a href="../empleados/mostrarVentas2.php" id="azul">Ver ventas</a> 
        
        </div>
    </section>

<br><br><br><br>

<?php require_once "../assets/includes/footer2.php" ?>

<?php endif; ?>
<?php  if(!isset($_SESSION['user_name_ep'])){ header("location: ../sessionError.php"); } ?>