<?php require_once "../assets/includes/navlogin.php" ?>

<div>
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
              <th>ID</th>
              <th>USER_NAME</th>
              <th>Nombre</th>
              <th>Apellido Paterno</th>
              <th>Apellido Materno</th>
              <th>Telefono</th>
              <th>Rango</th>
          </tr>
        </thead>
    <?php
        $consulta= "SELECT ID, user_name, Nombre, Ape_pat, Ape_mat, telefono, Rango FROM usuario";
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
      <form method="get" action="direccion.php">
 <button margin-left="5%" type="submit">Dirección
</form>
<br>
</div>
</div>
<a href="adindex.php">
<img src="../assets/images/l.png" style="height:100px; width:100px">
    </a>
<?php require_once "../assets/includes/footerlogin.php" ?>