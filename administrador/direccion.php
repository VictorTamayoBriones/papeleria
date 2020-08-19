<?php require_once "../assets/includes/nav2.php" ?>


<div class="catalogo">
<?php
require_once "../conexion.php";
?>
<br>
<a href="verUsuarios.php">
<button class="btn-large center deep-blue hoverable" id="return">regresar</button>
</a>
<form method="post">
</br>
<p class="titulo">Direccion-Usuario</p>
            </br>
<input type="number" name="id" maxlength="50" size="80" placeholder="INGRESA LA MATRICULA DEL USUARIO" required minlength="1" maxlength="60"> 
 <button input type="submit" id="buscardos" name="direc"> BUSCAR </button>
</form>
<table class="striped center">
        <thead>
          <tr>
              <th>Matricula</th>
              <th>USER_NAME</th>
              <th>Calle</th>
              <th>Numero Interior</th>
              <th>Número Exterior</th>
              <th>Colonia</th>
              <th>Codigo Postal</th>
              
          </tr>
        </thead>
    <?php
    if(isset($_POST['direc']))
    {
        if(strlen($_POST['id']) >=1)
        {
            $matricula=$_POST['id'];
        
        $consulta= "SELECT direccion.IDempleado, usuario.user_name, direccion.calle, direccion.No_interior, direccion.No_exterior, direccion.colonia, direccion.C_P from direccion inner join usuario on direccion.IDempleado = usuario.ID where IDempleado=$matricula ";
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

<?php require_once "../assets/includes/footer2.php" ?>