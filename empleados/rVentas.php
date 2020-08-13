<?php require_once "../conexion.php" ?>
<?php
    

    $consulta= "SELECT idventa from ventas order by idventa desc limit 1";
    $ejecutarconsulta= mysqli_query($conexion,$consulta); 
    $verid= mysqli_num_rows($ejecutarconsulta);
    $id= mysqli_fetch_array($ejecutarconsulta);

    /*
    $sql="select count(idventa) from subventas where idventa = $id[0];";

    $startSql= mysqli_query($conexion,$sql);
    $show= mysqli_num_rows($startSql);
    $idC=mysqli_fetch_array($startSql);
    var_dump($idC); die;
    $idCampo = 2 + $idC[0];
    //var_dump($idCampo); die;
    */
?>
<?php if(isset($_SESSION['user_name_ep'])): ?><?php require_once "../conexion.php" ?>
<?php require_once "../assets/includes/nav2.php" ?>

<input type="submit" class="btn-large center deep-blue hoverable agregarPro" id="actualizar" name="agregar" value="Agregar Producto" onclick="plus()">


<a href="epindex.php">
<button class="btn-large center deep-blue hoverable" id="return">Regresar</button>
</a>

</br>
<?php if(isset($_GET['exito'])):?>
  <br>  <div class="alertaExito"><p>Registro Exitoso</p></div>
<?php endif; ?>    
<div class="container center" border-radius="55px" id="contenedor">
    <form action="registroDeVentas.php"  method="POST" class="container" id="formulario">
            <div class="card-panel hoverable grey lighten-5" id="divPostForm">
                <div class="row" id="row">
                    <h3>Registrar ventas</h3>   
                    <div class="card-panel hoverable  col s12 fm">
                        <div className="input-field ">
                            <input  type="text" name="codigo" placeholder="CODIGO"  >
                        </div>
                    </div>
                    <?php
                    /*$codigo=$_POST['codigo'];
                    
                    echo("Aqui debo de imprimir la variable <br>".'$codigo' .$codigo);*/

                    //var_dump($codigo); die;
                    
                   /* $consulta2= "SELECT * FROM catalogo_p where codigo=$codigo";
                    $ejecutarconsulta2= mysqli_query($conexion,$consulta2);
                    $user = mysqli_fetch_assoc($ejecutarconsulta2);*/?>

                    <div class="card-panel hoverable  col s12 fm">
                        
                            <input type="text" placeholder="Nombre del producto" name="nombrePro">
                        
                    </div>

                    <div class="card-panel hoverable  col s5 fm">
                        
                            <input  type="text" placeholder="precio" name="precio"/>
                        
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
    
    <script src="../main.js"></script>
</div>
<?php require_once "../assets/includes/footer2.php" ?>

<?php endif; ?>
<?php  if(!isset($_SESSION['user_name_ep'])){ header("location: ../sessionError.php"); } ?>