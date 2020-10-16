<?php require_once "../assets/includes/nav.php" ?>
<?php //require_once "../conexion.php" ?>

<?php   //if(isset($_SESSION['user_name'])):    ?>

    <section id="homeUser">
        <div class="container">
            <div class="cardPerfil">    

                <div class="foto">
                    <img src="../assets/images/usuario.png" alt="usuario">
                </div>
                
                <div class="texto">
                    <p id="bnu">Bienvenido usuario</p> 
                    <p id="dateu">Martes 27 de abril</p>
                </div>

                <form class="formulario" action="../logout.php">
                    <button class="btn waves-effect waves-light logoutS" type="submit" name="action">Cerrar sesion</button>
                </form>

            </div>

            <div class="opciones">
                <details>
                    <summary id="deProduct">
                        Productos
                    </summary>
                    <ul>
                        <li>
                            <a href="regisProduct.php" id="azul">Registrar Productos</a>
                        </li>

                        <li>
                            <a href="verProduct.php" id="verde">Ver productos</a>
                        </li>

                        <li>
                            <a href="editarProduct.php" id="amarillo">Editar Productos</a>
                        </li>                    
                    </ul>
                </details>

                <details>
                    <summary id="deUser">
                        Usuarios
                    </summary>
                    <ul>
                        <li>
                            <a href="userRegis.php" id="azul">Registrar Usuarios </a> 
                        </li>

                        <li>
                            <a href="verUsuarios.php" id="amarillo">Ver usuarios</a>
                        </li>

                        <li>
                        <a href="contra.php" id="verde">Ver contraseñas</a> 
                        </li>
                        <li>
                            <a href="eliminarusuario.php" id="rojo"> Eliminar usuarios</a>
                        </li>
                    </ul>
                </details>

                <details>
                    <summary id="deventas">
                        Ventas
                    </summary>
                    <ul>
                        <li>
                        <a href="../empleados/mostrarVentas.php" id="azul">Ver ventas</a> 
                        </li>
                    </ul>
                </details>
            </div>
            <div class="clearfix"></div>
        </div>     
    </section>
<? //php endif; ?>
<?php // if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>