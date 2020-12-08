<?php require_once "../assets/includes/nav2.php" ?>
<?php require_once "../conexion.php" ?>

<?php if(isset($_SESSION['user_name'])) : ?>

</br>
<div class="catalogo">
<form method="get" action="adindex.php">
 <button class="btn-large center deep-blue hoverable" type="submit" id="return">Regresar</button>
</form>
</a>
<?php

?>
<form  method="post">
<p>Para buscar o eliminar un usuario llene el siguiente campo:</p>
<input type="number" name="usuario" maxlength="50" size="80" placeholder="MATRICULA"> 
 <button input type="submit" name="buscar" id="buscardos"> BUSCAR </button>
 <button input type="submit" name="eliminar" id="eliminar" onclick="return ConfirmDelete()"> ELIMINAR </button>
</form>
<?php

?>
<script>
function ConfirmDelete()
{
    var $respuesta = confirm("Estas seguro de que deseas eliminar este usuario");

    if ($respuesta == true)
    {
        return true;
    }
    else 
    {
        return false;
    }

}
</script>
</form>
<?php
include("selectU.php");
include("eliminarU.php");
?>


<?php require_once "../assets/includes/footer2.php" ?>
</div>

<?php    endif;   ?>
<?php  if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>