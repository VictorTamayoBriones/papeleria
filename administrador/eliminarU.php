<div class="container center verpro">
<?php
require_once "../conexion.php";
?>
<?php
if(isset($_POST['eliminar']))
{
    if(strlen($_POST['usuario']) >=1)
    {
        $codigo=$_POST['usuario'];
        $delete= "DELETE FROM usuario WHERE ID=$codigo";
       $delete2=" DELETE FROM direccion where IDempleado=$codigo";
       $resultado2= mysqli_query($conexion, $delete2);
        $resultado= mysqli_query($conexion,$delete);
        if($resultado && $resultado2)
        {
        echo("eliminacion exitosa de los datos cuyo codigo era: ".$codigo);
        }
        
    }
}

?>
</div>
