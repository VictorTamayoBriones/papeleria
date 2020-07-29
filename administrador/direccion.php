<?php require_once "../assets/includes/navlogin.php" ?>

</br>
<p class="titulo">Direccion-Usuario</p>
            </br>
<div class="catalogo">
<?php
require_once "../conexion.php";
?>
<br>
<a href="adindex.php">
<button class="btn-large center deep-blue hoverable" id="return">regresar</button>
</a>
<form method="post">
<input type="number" name="id" maxlength="50" size="80" placeholder="INGRESA EL ID del usuario" required minlength="1" maxlength="60"> 
 <button input type="submit" id="buscardos" name="direc"> BUSCAR </button>
</form>
<table class="striped center">
        <thead>
          <tr>
              <th>ID</th>
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
            $codigo=$_POST['id'];
        $consulta= "SELECT IDempleado,calle, No_interior, No_exterior, colonia, C_P FROM direccion where IDempleado=$codigo";
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

<?php require_once "../assets/includes/footerlogin.php" ?>