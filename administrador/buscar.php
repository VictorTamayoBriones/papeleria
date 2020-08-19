<?php require_once "../assets/includes/nav2.php" ?>

</br>
<div>
<div class="catalogo">
<a href="verProduct.php">
<form method="get" action="verProduct.php">
 <button class="btn-large center deep-blue hoverable" type="submit" id="return">Regresar</button>
</form>
</a>
<?php

?>
<form  method="post">
<p>Para buscar o eliminar un producto llene el siguiente campo:</p>
<input type="number" name="codigo" maxlength="50" size="80" placeholder="INGRESA EL CODIGO DEL PRODUCTO"> 
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
include("select.php");
include("eliminar.php");
?>



</div>
</div>

