<?php require_once "../../conexion.php" ?>
<?php   if(isset($_SESSION['admin'])){$foto = $_SESSION['admin']['userImage'];}     ?>    
<?php   if(isset($_SESSION['admin'])):?>
<?php require_once "../../assets/includes/nav.php" ?>

    <section id="homeUser">
        <div class="container">
            <div class="cardPerfil">    

                <div class="foto">
                    <img src="../../<?= $foto ?>" alt="usuario">
                </div>
                
                <div class="texto">
                    <p id="bnu">Bienvenido <?=$_SESSION['admin']['nombre']?></p> 
                    <p id="dateu">Martes 27 de abril</p>
                </div>

                <form class="formulario" action="../logout.php">
                    <button class="btn waves-effect waves-light logoutS" type="submit" name="action">Cerrar sesion</button>
                </form>

            </div>

            <div class="opciones">
                <details>
                    <summary>
                        Productos
                    </summary>
                    <ul>
                        <li>
                            <a href="../../views/productRegister.php">Registrar Productos</a>
                        </li>

                        <li>
                            <a href="../../views/productView.php">Ver productos</a>
                        </li>                   
                    </ul>
                </details>

                <details>
                    <summary>
                        Usuarios
                    </summary>
                    <ul>
                        <li>
                            <a href="../../views/userRegister.php">Registrar Usuarios </a> 
                        </li>

                        <li>
                            <a href="../../views/usersView.php">Ver usuarios</a>
                        </li>

                    </ul>
                </details>

                <details>
                    <summary>
                        Ventas
                    </summary>
                    <ul>
                        <li>
                            <a href="../../views/ventasRegister.php">Registrar ventas</a> 
                        </li>
                        <li>
                            <a href="../../views/ventasView.php">Ver ventas</a> 
                        </li>
                    </ul>
                </details>
            </div>
            
            <div class="clearfix"></div>
        </div>     
    </section>
<?php endif; ?>
<?php  if(!isset($_SESSION['admin'])){ header("location: ../sessionError.html"); } ?>