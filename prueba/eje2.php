<?php
if(isset($_POST['aceptar']))
{
    
    
        $nombre=$_POST['nombre'];
        $apat=$_POST['apat'];
        $amat=$_POST['amat'];
        $edad=$_POST['edad'];
        
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
