<?php require_once "../assets/includes/nav2.php" ?>
<?php require_once "../conexion.php" ?>

<?php if(isset($_SESSION['user_name'])) : ?>


<?php if(isset($_GET['exito'])):?>
  <br>  <div class="alertaExito"><p>Registro Exitoso</p></div>
<?php endif; ?> 
<a href="adindex.php">
<button class="btn-large center deep-blue hoverable" id="return">Regresar</button>
</a>
</br>
               
<div class="container center" border-radius="55px" >
    <form action="registroDeProductos.php"  method="POST" class="container" enctype="multipart/form-data">
            <div class="card-panel hoverable grey lighten-5">
                <div class="row">
                    <h3>Registrar</h3>   
                    <div class="card-panel hoverable  col s12">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="Nombre sin espacios" name="nombre" required />
                        </div>
                    </div>

                    <div class="conatiner col s10"></div>

                    <div class="card-panel hoverable  col s5" id="codigoPr">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="Código campo numerico" name="codigo" required minlength="3" maxlength="60" pattern="[0-9]+"/>
                        </div>
                    </div>

                    <div class="card-panel hoverable col s5">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="categoria" name="categoria" required minlength="3" maxlength="60" pattern="[a-zA-Z0-9]+"/>
                        </div>
                    </div>
                    
                    <div class="conatiner col s10"></div>
                
                    <div class="card-panel hoverable col s5" id="precio">
                        <div className="input-field ">
                            <input className="container validate espacio" type="number" placeholder="Precio campo numerico" name="precio" required minlength="3" maxlength="60" pattern="[0-9]+"/>
                        </div>
                    </div>
                

                
                    <div class="card-panel hoverable  col s5">
                        <div className="input-field ">
                            <input className="container validate" type="number" placeholder="Stock" name="stock" required minlength="3" maxlength="60" pattern="[0-9]+"/>
                        </div>
                    </div>
                
                    <div class="conatiner col s3"></div>
                

                </div>
             
                <input type="submit" class="btn-large center deep-blue hoverable" id="actualizar" name="registrar" value="Registrar Producto">
            </div>
        
    </form>
</div>

<?php require_once "../assets/includes/footer2.php" ?>
<?php  endif; ?>

<?php  if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>
