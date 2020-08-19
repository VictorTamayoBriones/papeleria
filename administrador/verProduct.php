<?php require_once "../assets/includes/nav2.php" ?>
<?php require_once "../conexion.php" ?>

<?php if(isset($_SESSION['user_name'])) : ?>

<div class="catalogo">

            </br>
<a href="adindex.php">
<button class="btn-large center deep-blue hoverable" id="return">Regresar</button>
</a>
<br>     
<a href="buscar.php"> 
 <button  class="btn-large center deep-blue hoverable"type="submit" id="return">Continuar</button></a>
 <p class="titulo">Catalogo de productos</p>

</br>
<div class="container center verpro">
<?php
require_once "../conexion.php";
?>
<div class="col s12">

<table class="striped center">
        <thead>
          <tr>
              
              <th>Código</th>
              <th>Nombre</th>
              <th>Categoría</th>
              <th>Stock</th>
              <th>Precio</th>
              
          </tr>
        </thead>
        
    <?php
    $consulta= "SELECT codigo, nombre_articulo, categoria, stock, precio FROM catalogo_p";
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
        
      
<br>

</table>

</div>

</div>
</div>

    <?php  endif; ?>       

    <?php  if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>
    

