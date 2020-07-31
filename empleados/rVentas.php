<?php require_once "../assets/includes/navlogin.php" ?>
<?php require_once "../conexion.php" ?>
<?php               
    $consulta= "select idventa from ventas order by idventa desc limit 1";
    $ejecutarconsulta= mysqli_query($conexion,$consulta); 
    $verid= mysqli_num_rows($ejecutarconsulta);
    $id= mysqli_fetch_array($ejecutarconsulta);
?>
<input type="submit" class="btn-large center deep-blue hoverable agregarPro" id="actualizar" name="agregar" value="Agregar Producto" onclick="agregar()">


<a href="epindex.php">
<button class="btn-large center deep-blue hoverable" id="return">Regresar</button>
</a>

</br>
     
<div class="container center" border-radius="55px" id="contenedor">
    <form action="registroDeVentas.php"  method="POST" class="container" id="formulario">
            <div class="card-panel hoverable grey lighten-5" id="divPostForm">
                <div class="row" id="row">
                    <h3>Registrar ventas</h3>   
                    <div class="card-panel hoverable  col s12 fm">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="Coidgo de producto" name="codigo" required minlength="3" maxlength="60" pattern="[a-zA-Z0-9]+"/>
                        </div>
                    </div>


                    <div class="card-panel hoverable  col s12 fm">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="Nombre de producto" name="nombrePro" required minlength="3" maxlength="60" pattern="[a-z]+"/>
                        </div>
                    </div>

                    <div class="card-panel hoverable  col s5 fm">
                        <div className="input-field ">
                            <input className="container validate" type="text" placeholder="Precio" name="precio"/>
                        </div>
                    </div>

                    <div class="conatiner col s2 fm"></div>

                    <div class="card-panel hoverable col s5 fm">
                        <div className="input-field ">
                            <input className="container validate espacio" type="text" placeholder="Cantidad" name="cantidad" required  maxlength="4"/>
                        </div>
                    </div>
 
                    <div class="conatiner col s4 fm"></div>
                

                </div>

                <!--    Folio de ventas     -->
                <div class="row">
                    <div class="conatiner col s4 fm"></div>
                        <div class="card-panel hoverable  col s4">
                            <div className="input-field ">
                            <input className="container validate" type="text"  value="folio: 00<?php echo $id[0] + 1 ; ?>" name="folio" id="folioVenta" disabled/>
                        </div>
                    </div>
                </div> 

                <input type="submit" class="btn-large center deep-blue hoverable fm" id="registrar" name="registrar" value="Registrar venta">

                 
            </div>
        
    </form>
    
    <script src="main.js"></script>
</div>
<?php require_once "../assets/includes/footerlogin.php" ?>