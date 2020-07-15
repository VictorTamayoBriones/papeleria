<?php require_once "./assets/includes/nav.php" ?>
<?php
require_once "./conexion.php";
?>
<div class="catalogo">
            <p class="titulo">Catalogo de productos</p>
            </br>
            

<div class="container center verpro">
<form  action="buscar2.php" method="POST">
<input type="text" name="nombre" id="buscar" placeholder="Buscar..." required minlength="3" maxlength="60" pattern="[a-zA-Z0-9]+">
            <input type="submit"  value="Buscar" id="categorias">
</form>

<br>
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
        
     $consulta= "SELECT codigo, nombre_articulo, categoria, stock, imagen FROM catalogo_p";
    $ejecutarconsulta= mysqli_query($conexion,$consulta);
    $verfilas= mysqli_num_rows($ejecutarconsulta);
    $fila= mysqli_fetch_array($ejecutarconsulta);

    if(!$ejecutarconsulta)
    {
        echo("ERROR en la consulta");
    }
    else
        {
            if($verfilas<1)
            {
                echo("<tr><td>Sin registros</td></tr>");
            }
            else
            {
                for($x=0; $x<=$fila; $x++)
                {
                    echo'
                        <tr>
                            <td>'.$fila[0].'</td>
                            <td>'.$fila[1].'</td>
                            <td>'.$fila[2].'</td>
                            <td>'.$fila[3].'</td>
                            <td>'.$fila[4].'</td>
                            
                            
                        </tr>';
                        $fila=mysqli_fetch_array($ejecutarconsulta);
                }
            }
        }
    
    ?>
        
      </table>
</center>
<br>
</div>
</div>
<?php require_once "./assets/includes/footer.php" ?>