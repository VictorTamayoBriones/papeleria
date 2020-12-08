
</br>
<div class="container center verpro">
<?php
require_once "../conexion.php";
?>
<table class="striped center">
        <thead>
          <tr>
              <th>Matricula</th>
              <th>User_Name</th>
              <th>Nombre</th>
              <th>Apellido Paterno</th>
              <th>Apellido Materno</th>
              <th>Telefono</th>
              <th>Rango</th>
              
          </tr>
        </thead>
    <?php
    if(isset($_POST['buscar']))
    {
        if(strlen($_POST['usuario']) >=1)
        {
            $user=$_POST['usuario'];
        $consulta= "SELECT ID, user_name, Nombre, Ape_pat, Ape_mat, telefono, Rango FROM usuario where ID=$user";
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
    }
}
    ?>
        
      </table>
      
</div>
