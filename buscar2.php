<?php require_once "./assets/includes/nav.php" ?>

</br>
<div class="container center verpro">
<?php
require_once "./conexion.php";
?>
<div class="catalogo">
<p class="titulo"> <a href="catalogo.php"> <font color="black"> Catalogo de productos</font></a></p>
            </br>
           
            <center>
<table class="striped center">
        <thead>
          <tr>
              
              <th>Código</th>
              <th>Nombre</th>
              <th>Categoría</th>
              <th>Stock</th>
              
              <th>Imagen</th>
          </tr>
        </thead>
    <?php
    echo("Right");
    ?>
        
      </table>
</center>
</div>
</div>
