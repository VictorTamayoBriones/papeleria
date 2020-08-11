<?php require_once "../conexion.php" ?>

<div class="container center" border-radius="55px" >
<form action="EdicionDeProductos.php" method="POST" class="container">
<?php
$a=$_POST['ID'];
if(strlen($a)>=1)
                           {
                            
                            //echo("variable a= <br>" .$a);
                            /*var_dump($a);die;
                            echo("asasas <br>".$a);*/
                            $consulta="SELECT * FROM catalogo_p where ID=$a";
                            $ejecutarconsulta= mysqli_query($conexion,$consulta);
                            $user = mysqli_fetch_assoc($ejecutarconsulta);
                           ?>

<input type="text" name="nombre" placeholder="NOMBRE DEL ARTICULO: <?php echo $user['nombre_articulo']?>"  >
                            
               
<input  type="text" name="codigo" placeholder="CODIGO DEL ARTICULO: <?php echo $user['codigo']?>"  >
   

<input type="number" name="precio" placeholder="PRECIO DEL ARTICULO: <?php echo $user['precio']?>">
                        

<input  type="text" name="categoria" placeholder="CATEGORIA DEL ARTICULO: <?php echo $user['categoria']?>">
                       

 <input  type="number" name="stock" placeholder="STOCK DEL ARTICULO: <?php echo $user['stock']?>" >
                       
                
<input  type="text" name="imagen" placeholder="IMAGEN">

<center>
 <input type="submit" class="btn-large center deep-blue hoverable"  name="actualizar" value="Actualizar datos">
 </center>
 <?php
                           }
                           ?>
 
 </form>
</div>
