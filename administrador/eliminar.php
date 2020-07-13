<?php require_once "../assets/includes/nav.php" ?>

</br>
<div class="container center verpro">
<?php
require_once "../conexion.php";
?>
<?php
if(isset($_POST['eliminar']))
{
    if(strlen($_POST['codigo']) >=1)
    {
        $codigo=$_POST['codigo'];
        $delete= "DELETE FROM catalogo_p WHERE codigo=$codigo";
        $resultado= mysqli_query($conexion,$delete);
        if($resultado)
        {
        echo("eliminacion exitosa de los datos cuyo codigo era: ".$codigo);
        }
        
    }
}

?>
</div>
<?php require_once "../assets/includes/footer.php" ?>
