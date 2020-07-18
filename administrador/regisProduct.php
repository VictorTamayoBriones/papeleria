<?php require_once "../assets/includes/navlogin.php" ?>

<?php if(isset($_GET['exito'])):?>
  <br>  <div class="alertaExito"><p>Registro Exitoso</p></div>
<?php endif; ?> 

</br>
               
<div class="container center" border-radius="55px" >
    <form action="registroDeProductos.php"  method="POST" class="container">
            <div class="card-panel hoverable grey lighten-5">
                <div class="row">
                    <h3>Registrar</h3>   
                    <div class="card-panel hoverable  col s12">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="Nombre" name="nombre" required minlength="3" maxlength="60" pattern="[a-zA-Z0-9]+"/>
                        </div>
                    </div>

                    <div class="conatiner col s10"></div>

                    <div class="card-panel hoverable  col s5" id="codigoPr">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="Código" name="codigo" required minlength="3" maxlength="60" pattern="[0-9]+"/>
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
                            <input className="container validate espacio" type="number" placeholder="Precio $" name="precio" required minlength="3" maxlength="60" pattern="[0-9]+"/>
                        </div>
                    </div>
                

                
                    <div class="card-panel hoverable  col s5">
                        <div className="input-field ">
                            <input className="container validate" type="number" placeholder="Stock" name="stock" required minlength="3" maxlength="60" pattern="[0-9]+"/>
                        </div>
                    </div>
                
                    <div class="conatiner col s3"></div>
                
                    <div class="card-panel hoverable col s5" id="imgProd">
                        <div className="input-field ">
                            <label for="Imagen" id="la">Imagen</label>

                            <input className="container validate" type="file" placeholder="Imagen" name="imagen"/>

                        </div>
                    </div>

                </div>
            
                <input type="submit" class="btn-large center deep-blue hoverable" name="registrar" value="Registrar Producto">
            </div>
        
    </form>
</div>

<a href="adindex.php">
<img src="../assets/images/l.png" style="height:100px; width:100px">
    </a>
<?php require_once "../assets/includes/footerlogin.php" ?>