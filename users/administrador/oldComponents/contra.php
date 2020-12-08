<?php require_once "../assets/includes/nav2.php" ?>

</br>
<div class="catalogo">
<a href="catalogo.php">
<form method="get" action="adindex.php">
 <button class="btn-large center deep-blue hoverable" type="submit" id="return">REGRESAR</button>
</form>
</a>
<br>

<form  action="contra.php" method="post">
<input type="password" name="nombre" maxlength="50" size="80" placeholder="INGRESA EL DATO CORRESPONDIENTE PARA RECUPERAR TU CONTRASEÑA"> 
 <button input type="submit" name="buscar" id="buscardos"> BUSCAR </button>

</form>

</form>
<?php
include("contraseña.php");

?>



</div>