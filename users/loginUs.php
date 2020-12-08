<?php require_once "../assets/includes/nav.php" ?>  
    <div class="login">
        <div class="container">
            <div class="formulario">
                <form action="login.php" id="loginA" method="POST">

                    <h2 class="center">Inicia sesión</h2>
                    
                    <div class="datos">
                        <input type="email" name="usuario" id="usuario" placeholder="Usuario" required>

                        <input type="password" name="pass" id="pass" placeholder="Contraseña" required>
            
                        <input type="submit" name="ingreso" id="ingreso">
                    </div>
                                    
                </form>
            </div>
        </div>        
    </div>