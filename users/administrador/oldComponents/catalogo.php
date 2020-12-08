<?php require_once "../assets/includes/navlogin.php" ?>
<?php
 require_once "../conexion.php"  
?>

            <p class="titulo">Catalogo de productos</p>
            </br>
            

<div class="container center verpro">

<br>
</br>

<table class="striped center">
        <thead>
          <tr>
              
              <th>Código</th>
              <th>Nombre</th>
              <th>Categoría</th>
              <th>Stock</th>
              
              
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
                            
                            
                            
                        </tr>';
                        $fila=mysqli_fetch_array($ejecutarconsulta);
                }
            }
        }
    
    ?>
      
      </table>

<br>

</div>
</div>


