<?php require_once "../assets/includes/nav.php" ?>

</br>
<div class="container center verpro">
<?php

?>
<form method="post">
<input type="number" name="codigo" maxlength="50" size="80" placeholder="INGRESA EL CODIGO DEL PRODUCTO"> 
 <button input type="submit" name="buscar" id="buscardos"> BUSCAR </button>
 <button input type="submit" name="eliminar" id="eliminar"> ELIMINAR </button>
</form>
<?php
include("select.php");
include("eliminar.php")
?>
</div>
<?php require_once "../assets/includes/footer.php" ?>