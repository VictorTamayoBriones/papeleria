<?php require_once "../assets/includes/navlogin.php" ?>

</br>
<div class="catalogo">
<a href="catalogo.php">
<form method="get" action="catalogo.php">
 <button class="btn-large center deep-blue hoverable" type="submit" id="return">REGRESAR</button>
</form>
</a>
<br>

<form  method="post">
<input type="number" name="nombre" maxlength="50" size="80" placeholder="......."> 
 <button input type="submit" name="buscar" id="buscardos"> BUSCAR </button>

</form>

</form>
<?php
include("busqueda_catalogo.php");

?>



</div>