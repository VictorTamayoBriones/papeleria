<?php require_once "../assets/includes/navlogin.php" ?>
<?php require_once "../conexion.php" ?>
<?php               
    $consulta= "select idventa from ventas order by idventa desc limit 1";
    $ejecutarconsulta= mysqli_query($conexion,$consulta); 
    $verid= mysqli_num_rows($ejecutarconsulta);
    $id= mysqli_fetch_array($ejecutarconsulta);
?>
<a href="epindex.php">
<button class="btn-large center deep-blue hoverable" id="return">Regresar</button>
</a>
</br>
     
<div class="container center" border-radius="55px" >
    <form action="registroDeVentas.php"  method="POST" class="container">
            <div class="card-panel hoverable grey lighten-5">
                <div class="row">
                    <h3>Registrar ventas</h3>   
                    <div class="card-panel hoverable  col s12">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="Coidgo de producto" name="codigo" required minlength="3" maxlength="60" pattern="[a-zA-Z0-9]+"/>
                        </div>
                    </div>


                    <div class="card-panel hoverable  col s12">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="Nombre de producto" name="nombrePro" required minlength="3" maxlength="60" pattern="[a-z]+"/>
                        </div>
                    </div>

                    <div class="card-panel hoverable  col s5">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="Precio" name="precio"/>
                        </div>
                    </div>

                    <div class="conatiner col s2"></div>

                    <div class="card-panel hoverable col s5">
                        <div className="input-field ">
                            <input className="container validate espacio" type="text" placeholder="Cantidad" name="cantidad" required minlength="3" maxlength="60"/>
                        </div>
                    </div>
 
                    <div class="conatiner col s4"></div>
                
                    <div class="card-panel hoverable  col s4">
                        <div className="input-field ">
                            <input className="container validate" type="text"  value="folio: 00<?php echo $id[0] + 1 ; ?>" name="folio" id="folioVenta" disabled/>
                        </div>
                    </div>  
                </div>
                
                <input type="submit" class="btn-large center deep-blue hoverable" id="actualizar" name="agregar" value="Agregar Producto">

    

                <input type="submit" class="btn-large center deep-blue hoverable" id="actualizar" name="registrar" value="Registrar venta">
            </div>
        
    </form>
</div>
<?php require_once "../assets/includes/footerlogin.php" ?>