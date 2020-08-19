<?php
$conexion= mysqli_connect("localhost","root","","papeleria");

if(isset($_POST['buscar']))
{
    if(strlen($_POST['nombre'])>=1)
    {
        $id=$_POST['nombre'];
        ?>
    

<table>
        <thead>
          <tr>
              <th>USER_NAME</th>
              <th>CONTRASEÑA</th>
              
          </tr>
        </thead>

        <?php
        $consulta= "SELECT user_name, password from usuario where recuperar_contraseña='$id'";
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
                                
                            
                        </tr>';
                        
                        $fila=mysqli_fetch_array($ejecutarconsulta);
                }
            }
        }

    ?>
        
      
<br>

</table>


        <?php
        }
    
   
}
?>