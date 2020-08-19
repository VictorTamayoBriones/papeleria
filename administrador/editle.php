<?php require_once "../assets/includes/nav2.php" ?>
<?php require_once "../conexion.php" ?>
<?php if(isset($_SESSION['user_name'])) : ?>
<br>
<a href="editarProduct.php">
<button class="btn-large center deep-blue hoverable" id="return">Regresar</button>
</a>
<?php

    if(strlen('ID2')>=1)
    {
        $a1=$_POST['ID2'];
    ?>
      
<div class="container center" border-radius="55px" > 

 <form action="EdicionDeProductos.php" method="POST" enctype="multipart/form-data" >
 <div class="card-panel hoverable grey lighten-5">
    <?php
        $consulta="SELECT * FROM catalogo_p where codigo=$a1 or ID=$a1";
        $ejecutarconsulta= mysqli_query($conexion,$consulta);
        $user = mysqli_fetch_assoc($ejecutarconsulta);
    ?>

<h5>NOMBRE DEL ARTICULO:</h5>
<input className="container validate" type="text" name="nombre" value="<?php echo $user['nombre_articulo']?>" required minlength="1" maxlength="60" >
                            
<h5>CODIGO DEL ARTICULO:</h5>               <p><font color="red">No cambiar codigo</font></p>
<input className="container validate" type="text" name="codigos" value="<?php echo $user['codigo']?>" required minlength="1" maxlength="60" >
   
<h5>PRECIO DEL ARTICULO:</h5>               <p> <font color="red">Campo numerico obligatorio</font></p>
<input className="container validate" type="text" name="precio" value="<?php echo $user['precio']?>" required minlength="1" maxlength="60" pattern="[0-9]+">
                        
<h5>CATEGORIA DEL ARTICULO:</h5>
<input className="container validate" type="text" name="categoria" value="<?php echo $user['categoria']?>" required minlength="1" maxlength="60" >
                       
<h5>STOCK DEL ARTICULO:</h5>                <p> <font color="red">Campo numerico obligatorio</font></p>
 <input className="container validate" type="text" name="stock" value="<?php echo $user['stock']?>" required minlength="1" maxlength="60" pattern="[0-9]+"/>
                       

<input  type="text" name="codigo1" value="CODIGO DEL ARTICULO: <?php echo $user['codigo']?>"disabled >

<center>
 <input type="submit" class="btn-large center deep-blue hoverable"  name="actualizar" value="Actualizar datos">
 </center>
            </div>   
    </form>
    
</div>
<?php
}
?>

<?php require_once "../assets/includes/footer2.php" ?>
<?php endif; ?>

<?php  if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>