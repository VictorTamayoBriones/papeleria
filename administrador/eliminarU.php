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
        $resultado= mysqli_query($conexion,$delete);
        if($resultado)
        {
        echo("eliminacion exitosa de los datos cuyo codigo era: ".$codigo);
        }
        
    }
}

?>
</div>
