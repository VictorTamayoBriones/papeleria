<?php require_once "../assets/includes/navlogin.php" ?>
    <section id="empleados">
        
        <div class="perfil">    
            <img src="../assets/images/usuario.png" alt="usuario">

            <p id="bnu">Bienvenido usuario</p> 
            <p id="dateu">Martes 27 de abril</p>

            <a href="../index.php" ><h5 class="logout"> Cerrar Sesión </h5></a>
        </div>

        <div class="op">
            <details>
                <summary id="dePro">
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
                    
                </ul>
            </details>

        </div>

<!--
        <div class="op">

            <a href="regisProduct.php" id="verde">Registrar Productos</a>

            <a href="verProduct.php" id="azul">Ver productos</a>
            
            <a href="editarProduct.php" id="amarillo">Editar Productos</a>

            <a href="userRegis.php" id="azul">Registrar Usuarios </a>
            
            <a href="verUsuarios.php" id="rojo">Usuarios</a>
            
        
        </div>
-->        
    </section>

<!--<script src="despliegue.js"></script>-->

<?php require_once "../assets/includes/footerlogin.php" ?>