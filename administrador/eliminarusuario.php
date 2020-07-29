<?php require_once "../assets/includes/navlogin.php" ?>

</br>
<div class="catalogo">
<form method="get" action="verUsuarios.php">
 <button class="btn-large center deep-blue hoverable" type="submit" id="return">Regresar</button>
</form>
</a>
<?php

?>
<form  method="post">
<input type="number" name="usuario" maxlength="50" size="80" placeholder="ID"> 
 <button input type="submit" name="buscar" id="buscardos"> BUSCAR </button>
 <button input type="submit" name="eliminar" id="eliminar" onclick="return ConfirmDelete()"> ELIMINAR </button>
</form>
<?php

?>
<script>
function ConfirmDelete()
{
    var $respuesta = confirm("Estas seguro de que deseas eliminar este producto");

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



</div>