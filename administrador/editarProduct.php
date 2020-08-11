<?php require_once "../assets/includes/nav2.php" ?>
<?php require_once "../conexion.php" ?>

<?php if(isset($_SESSION['user_name'])) : ?>

<a href="adindex.php">
<button class="btn-large center deep-blue hoverable" id="return">Regresar</button>
</a>
</br>
<div class="container center" border-radius="55px" >
    <form action="editarProduct.php" method="POST" >
           
                
                    <h3>Editar</h3>
                        <h6> Para editar coloque el ID o el codigo del producto y llene los demás campos con el nuevo llenado </h6>
                            
                            <input  type="number" placeholder="ID" name="ID2" required minlength="1" maxlength="60" pattern="[0-9]+"/>
                            <br>
                            <?php
                            $a1=$_POST['ID2'];
                            
                            
        ?>                    
    </form>  </div> <?php echo("<br>");?>
                           <div class="container center" border-radius="55px" >      
                            <form action="EdicionDeProductos.php" method="POST" >
                            <?php
                            $consulta="SELECT * FROM catalogo_p where codigo=$a1 or ID=$a1";
                            $ejecutarconsulta= mysqli_query($conexion,$consulta);
                            $user = mysqli_fetch_assoc($ejecutarconsulta);
                           ?>
<h5>NOMBRE DEL ARTICULO:</h5>
<input type="text" name="nombre" value=" <?php echo $user['nombre_articulo']?>"  >
                            
<h5>CODIGO DEL ARTICULO:</h5>              
<input  type="text" name="codigos" value=" <?php echo $user['codigo']?>" >
   
<h5>PRECIO DEL ARTICULO:</h5>
<input type="number" name="precio" placeholder=" <?php echo $user['precio']?>">
                        
<h5>CATEGORIA DEL ARTICULO:</h5>
<input  type="text" name="categoria" value=" <?php echo $user['categoria']?>">
                       
<h5>STOCK DEL ARTICULO:</h5>
 <input  type="number" name="stock" placeholder=" <?php echo $user['stock']?>" >
                       
<h5>IMAGEN:</5>               
<input  type="text" name="imagen" placeholder="IMAGEN">

<input  type="text" name="codigo1" value="CODIGO DEL ARTICULO: <?php echo $user['codigo']?>"disabled >

<center>
 <input type="submit" class="btn-large center deep-blue hoverable"  name="actualizar" value="Actualizar datos">
 </center>
               
    </form>
    
</div>

<?php require_once "../assets/includes/footer2.php" ?>
<?php endif; ?>

<?php  if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>
