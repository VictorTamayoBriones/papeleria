<?php require_once "../assets/includes/nav.php" ?>

</br>
<div class="container center verpro">
<?php

?>
<form method="post">
<input type="number" name="codigo" maxlength="50" size="80" placeholder="INGRESA EL CODIGO DEL PRODUCTO"> 
 <button input type="submit" name="buscar"> BUSCAR </button>
 <button input type="submit" name="eliminar"> ELIMINAR </button>
</form>
<?php
include("select.php");
include("eliminar.php")
?>
</div>
<a href="verProduct.php">
<img src="../assets/images/l.png" style="height:100px; width:100px">
    </a>
<?php require_once "../assets/includes/footer.php" ?>