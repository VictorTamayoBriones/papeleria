<?php require_once "../assets/includes/nav2.php" ?>
<?php require_once "../conexion.php" ?>

<?php if(isset($_SESSION['user_name'])) : ?>
<a href="adindex.php">
<button class="btn-large center deep-blue hoverable" id="return">Regresar</button>
</a>
</br>
<div class="container center" border-radius="55px" >
    <form action="registroDeUsuarios.php"  method="POST" class="container">
            <div class="card-panel hoverable grey lighten-5">
                <div class="row">
                    <h3>Registro de Usuarios</h3>
                
                    <div class="card-panel hoverable  col s12">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="user_name" name="user" required minlength="3" maxlength="60"/>
                        </div>
                    </div>
                    <div class="card-panel hoverable  col s5">
                        <div className="input-field ">
                            <input className="container validate" type="password" placeholder="contraseña" name="contra" required minlength="6" maxlength="60" pattern="[a-zA-Z0-9]+"/>
                        </div>
                    </div>

                    <div class="conatiner col s2"></div>

                    <div class="card-panel hoverable  col s5">
                        <div className="input-field ">
                            <input className="container validate" type="password" placeholder="Ingresa de nuevo la contraseña" name="contraseña" required minlength="6" maxlength="60" pattern="[a-zA-Z0-9]+"/>
                        </div>
                    </div>

                    <div class="card-panel hoverable  col s12">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="Nombre" name="nombre" required minlength="3" maxlength="60"/>
                        </div>
                    </div>

                    
                    <div class="card-panel hoverable  col s5">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="apellido paterno" name="Ape_pat" required minlength="3" maxlength="60"/>
                        </div>
                    </div>
                    
                    <div class="conatiner col s2"></div>

                    <div class="card-panel hoverable  col s5">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="apellido materno" name="Ape_mat" required minlength="3" maxlength="60"/>
                        </div>
                    </div>

                    <div class="card-panel hoverable  col s5">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="Telefono" name="telefono" required minlength="10" maxlength="60"/>
                        </div>
                    </div>

                    <div class="conatiner col s2"></div>

                    <div class="card-panel hoverable  col s5">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="Rango (administrador / empleado)" name="Rango" required minlength="3" maxlength="60"/>
                        </div>
                    </div>
                    
                
                    <div class="card-panel hoverable col s5">
                        <div className="input-field ">
                            <input className="container validate espacio" type="text" placeholder="Calle" name="Calle" required minlength="3" maxlength="60"/>
                        </div>
                    </div>
                
                    <div class="conatiner col s2"></div>
                
                    <div class="card-panel hoverable  col s5">
                        <div className="input-field ">
                            <input className="container validate" type="number" placeholder="No_interior" name="No_interior" required minlength="3" maxlength="60"/>
                        </div>
                    </div>
                
                    <div class="card-panel hoverable  col s5">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="No_exterior" name="No_exterior"/>
                        </div>
                    </div>

                    <div class="conatiner col s2"></div>

                    <div class="card-panel hoverable col s5">
                        <div className="input-field ">
                            <input className="container validate espacio" type="text" placeholder="Colonia" name="Colonia" required minlength="3" maxlength="60"/>
                        </div>
                    </div>

                    <div class="conatiner col s4"></div>

                    <div class="card-panel hoverable  col s4">
                        <div className="input-field ">
                            <input className="container validate" type="number" placeholder="C_P" name="C_P" required minlength="3" maxlength="60"/>
                        </div>
                    </div>
                    <div class="conatiner col s3"></div>
                
                    

                </div>
            
                <input type="submit" class="btn-large center deep-blue hoverable" name="registrar" value="Registrar usuario">
            </div>
        
    </form>
</div>
<?php require_once "../assets/includes/footer2.php" ?>
<?php  endif; ?>
<?php  if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>