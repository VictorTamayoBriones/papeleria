<?php require_once "../assets/includes/navlogin.php" ?>
    <section id="empleados">
        
        <div class="perfil">    
            <img src="../assets/images/usuario.png" alt="usuario">

            <p id="bnu">Bienvenido usuario</p> 
            <p id="dateu">Martes 27 de abril</p>

            <a href="../index.php" > <font color="Negro"> <h4> Cerrar Sesión </h4> </font> </a>
        </div>

        <div class="op">
            <details>
                <summary close>
                    Productos
                </summary>
                <ul>
                    <li>
                        <a href="regisProduct.php" id="verde">Registrar Productos</a>
                    </li>

                    <li>
                        <a href="verProduct.php" id="azul">Ver productos</a>
                    </li>
                    
                    <li>
                        <a href="editarProduct.php" id="amarillo">Editar Productos</a>
                    </li>                    


                </ul>
            </details>

            <details>
                <summary>
                    Usuarios
                </summary>
                <ul>
                    <li>
                        <a href="userRegis.php" id="azul">Registrar Usuarios </a>
                    </li>

                    <li>
                        <a href="verUsuarios.php" id="rojo">Usuarios</a>
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