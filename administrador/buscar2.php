<?php require_once "../assets/includes/nav.php" ?>

</br>
<div class="container center verpro">
<?php
require_once "../conexion.php";
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
        if(isset($_POST['buscar']))
    {
      if(strlen($_POST['nombre'])>=1)
      {
        $nombre=$_POST['nombre'];
        $consulta= "SELECT * FROM usuario where nombre_articulo like "%$nombre%"";
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
    }
}
              

    
    ?>
        
      </table>
</center>
</div><?php require_once "../assets/includes/footer.php" ?>
</div>


