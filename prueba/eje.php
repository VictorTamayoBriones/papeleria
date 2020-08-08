<?php

$conexion= mysqli_connect("localhost","root","","ejemplo");
       
        
        

        if(isset($_POST['verificar']))
    {
        if(strlen($_POST['id'])>=1)
        {
            $id=$_POST['id'];
            
        $consulta= "SELECT * FROM usuarios where ID=$id";
    $ejecutarconsulta= mysqli_query($conexion,$consulta);
    $user = mysqli_fetch_assoc($ejecutarconsulta);
    
    
    ?>      <form action="eje.php" method="POST">
            <input type="text" name="nombre2" value="<?php echo $user['nombre']?>">
            <input type="text" name="apat2" value="<?php echo $user['apat']?>">
            <input type="text" name="amat2" value="<?php echo $user['amat']?>">
            <input type="number" name="edad2" value="<?php echo $user['edad']?>">
            <button input type="submit" name="aceptar">ACEPTAR</button>
            </form>
            
            
        <?php
        
        $nombre=$_POST['nombre2'];
        $apat=$_POST['apat2'];
        $amat=$_POST['amat2'];
        $edad=$_POST['edad2'];
        
    }
}
if(isset($_POST['aceptar']))
{
    
    
        var_dump($_POST);die;
        
        $consulta="INSERT INTO usuarios(nombre, apat, amat, edad) VALUES ('$nombre', '$apat', '$amat', '$edad')";
        $resultado= mysqli_query($conexion, $consulta);
        if($resultado)
        {
            ?>
            <a href="formulario.php">REGISTRO EXITOSO </a>
            <?php
        }
        else{
            ?>
            <a href="formulario.php">ERROR </a>
            <?php
            }
  
}



?>