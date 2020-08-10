<?php require_once "../assets/includes/nav2.php" ?>
<?php require_once "../conexion.php" ?>

<?php if(isset($_SESSION['user_name'])) : ?>

<a href="adindex.php">
<button class="btn-large center deep-blue hoverable" id="return">Regresar</button>
</a>
</br>
<div class="container center" border-radius="55px" >
    <form action="EdicionDeProductos.php" method="POST" class="container">
            <div class="card-panel hoverable grey lighten-5">
                <div class="row">
                    <h3>Editar</h3>
                        <h6> Para editar coloque el ID del producto y llene los demás campos con el nuevo llenado </h6>
                    <div class="card-panel hoverable col s5">
                        <div className="input-field ">
                            <input className="container validate espacio" type="number" placeholder="ID" name="ID" required minlength="1" maxlength="60" pattern="[0-9]+"/>
                        </div>
                    </div>
                
                    <div class="card-panel hoverable  col s12">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="Nombre" name="nombre" required minlength="3" maxlength="60" pattern="[A-Za-z0-9]+"/>
                        </div>
                    </div>

               
                    <div class="card-panel hoverable  col s5">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="Código" name="codigo" required minlength="3" maxlength="60" pattern="[0-9]+"/>
                        </div>
                    </div>
                
                    <div class="conatiner col s2"></div>
                
                    <div class="card-panel hoverable col s5">
                        <div className="input-field ">
                            <input className="container validate espacio" type="number" placeholder="Precio $" name="precio" required minlength="3" maxlength="60" pattern="[0-9]+"/>
                        </div>
                    </div>
            
                    <div class="card-panel hoverable  col s5">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="categoria" name="categoria" required minlength="3" maxlength="60" pattern="[A-Za-z0-9]+"/>
                        </div>
                    </div>

                    <div class="conatiner col s2"></div>
                
                    <div class="card-panel hoverable  col s5">
                        <div className="input-field ">
                            <input className="container validate" type="number" placeholder="Stock" name="stock" required minlength="3" maxlength="60" pattern="[0-9]+"/>
                        </div>
                    </div>
                
                    <div class="conatiner col s3"></div>
                
                    <div class="card-panel hoverable col s5" id="imgProd">
                        <div className="input-field ">
                        <input  type="text" placeholder="imagen" name="imagen"/>

                        </div>
                    </div>

                </div>
                <input type="submit" class="btn-large center deep-blue hoverable"  name="actualizar" value="Actualizar datos">
                
            </div>
        
    </form>
</div>
<?php require_once "../assets/includes/footer2.php" ?>
<?php endif; ?>

<?php  if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>
