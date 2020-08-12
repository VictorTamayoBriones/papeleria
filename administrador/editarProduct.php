<?php require_once "../assets/includes/nav2.php" ?>
<?php require_once "../conexion.php" ?>

<?php if(isset($_SESSION['user_name'])) : ?>

<a href="adindex.php">
<button class="btn-large center deep-blue hoverable" id="return">Regresar</button>
</a>
</br>
<div class="container center" border-radius="55px" >
    <form action="editarProduct.php" method="POST" >
           
    <div class="card-panel hoverable grey lighten-5">
                    <h3>Editar</h3>
                        <h6> Para editar coloque el ID o el codigo del producto y llene los demás campos con el nuevo llenado </h6>
                        <div className="input-field ">
                            <input  className="container validate" type="number" placeholder="ID" name="ID2" required minlength="1" maxlength="60" pattern="[0-9]+"/>
                            </div>
                            <br>
                            <?php
                            $a1=$_POST['ID2'];
                            
                            
        ?>  
        </div>                  
    </form> 
     </div> 
    <?php echo("<br>");?>  <?php if(isset($_GET['exito'])):?>
  <br>  <div class="alertaExito"><p>Registro Exitoso</p></div>
<?php endif; ?>
                           <div class="container center" border-radius="55px" >      
                            <form action="EdicionDeProductos.php" method="POST" >
                            <div class="card-panel hoverable grey lighten-5">
                            <?php
                            $consulta="SELECT * FROM catalogo_p where codigo=$a1 or ID=$a1";
                            $ejecutarconsulta= mysqli_query($conexion,$consulta);
                            $user = mysqli_fetch_assoc($ejecutarconsulta);
                           ?>
<h5>NOMBRE DEL ARTICULO:</h5>
<input className="container validate" type="text" name="nombre" value=" <?php echo $user['nombre_articulo']?>" required minlength="1" maxlength="60" >
                            
<h5>CODIGO DEL ARTICULO:</h5>               <p>No cambiar codigo</p>
<input className="container validate" type="text" name="codigos" value=" <?php echo $user['codigo']?>" required minlength="1" maxlength="60" >
   
<h5>PRECIO DEL ARTICULO:</h5>
<input className="container validate" type="number" name="precio" placeholder=" <?php echo $user['precio']?>" required minlength="1" maxlength="60" pattern="[0-9]+">
                        
<h5>CATEGORIA DEL ARTICULO:</h5>
<input className="container validate" type="text" name="categoria" value=" <?php echo $user['categoria']?>" required minlength="1" maxlength="60" ">
                       
<h5>STOCK DEL ARTICULO:</h5>
 <input className="container validate" type="number" name="stock" placeholder=" <?php echo $user['stock']?>" >
                       
<h5>IMAGEN:</5>               
<input className="container validate" type="text" name="imagen" placeholder="IMAGEN" required minlength="1" maxlength="60" ">

<input  type="text" name="codigo1" value="CODIGO DEL ARTICULO: <?php echo $user['codigo']?>"disabled >

<center>
 <input type="submit" class="btn-large center deep-blue hoverable"  name="actualizar" value="Actualizar datos">
 </center>
            </div>   
    </form>
    
</div>

<?php require_once "../assets/includes/footer2.php" ?>
<?php endif; ?>

<?php  if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>
