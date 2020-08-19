<?php require_once "../assets/includes/nav2.php" ?>

<?php require_once "../conexion.php" ?>

<?php if(isset($_SESSION['user_name'])) : ?>

<div class="catalogo">
<br>
<a href="adindex.php">
<button class="btn-large center deep-blue hoverable" id="return">Regresar</button>
</a>



            <p class="titulo">USUARIOS</p>
            </br>
</br>
<div class="container center verpro">
<?php
require_once "../conexion.php";
?>

<table class="striped center">
        <thead>
          <tr>
              <th>Matricula</th>
              <th>USER_NAME</th>
              <th>Nombre</th>
              <th>Apellido Paterno</th>
              <th>Apellido Materno</th>
              <th>Telefono</th>
              <th>Rango</th>
          </tr>
        </thead>
    <?php
        $consulta= "SELECT ID, user_name, Nombre, Ape_pat, Ape_mat, telefono, Rango FROM usuario order by ID";
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
                            <td>'.$fila[5].'</td>
                            <td>'.$fila[6].'</td>
                            
                        </tr>';
                        $fila=mysqli_fetch_array($ejecutarconsulta);
                }
            }
        }

    ?>
        
      </table>
      <br>
      <br>
      
<br>
</div>
</div>
<?php require_once "../assets/includes/footer2.php" ?>

    <?php  endif; ?>
    <?php  if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>