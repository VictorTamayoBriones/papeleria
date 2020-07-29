<?php require_once "../assets/includes/navlogin.php" ?>

</br>
<div class="catalogo">
<a href="verProduct.php">
<form method="get" action="verProduct.php">
 <button class="btn-large center deep-blue hoverable" type="submit" id="return">Regresar</button>
</form>
</a>
<?php

?>
<form  method="post">
<input type="number" name="codigo" maxlength="50" size="80" placeholder="INGRESA EL CODIGO DEL PRODUCTO"> 
 <button input type="submit" name="buscar" id="buscardos"> BUSCAR </button>
 <button input type="submit" name="eliminar" id="eliminar"> ELIMINAR </button>
</form>
<?php
include("select.php");
include("eliminar.php");
?>



</div>