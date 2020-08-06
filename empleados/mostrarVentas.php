<?php require_once "../assets/includes/navlogin.php" ?>
<?php require_once "../conexion.php" ?>
<?require_once "actions.php" ?>

<?php if(isset($_SESSION['user_name_ep'])): ?>
<a href="epindex.php">
<button class="btn-large center deep-blue hoverable" id="return">Regresar</button>
</a>

<?php
    //hacer la consulta de ventas
    $query= "SELECT * FROM ventas";
    $start= mysqli_query($conexion,$query);
    $rows= mysqli_num_rows($start);
    $mostrar= mysqli_fetch_array($start);

    

    $identi = -1;
    echo"<div class='row col s12'>";
    for($i = 0; $i<=$mostrar; $i++){
        $dato=$mostrar[0];
        $alerta= '"¿esta seguro de querer borrar la venta?"';
        

            //consultar subventas

        $consulta ="SELECT * FROM subventas where idventa = $mostrar[0]";
        $inicarConsulta= mysqli_query($conexion,$consulta);
        $filas= mysqli_num_rows($inicarConsulta);
        $ver= mysqli_fetch_array($inicarConsulta);


        //conteo de productos

        $queryCount= "select count(nombre) from ventas where idventa = $mostrar[0]";
        $start2= mysqli_query($conexion,$queryCount);
        $rows2= mysqli_num_rows($start2);
        $count= mysqli_fetch_array($start2);
        
        $queryCountSub= "select count(nombre) from subventas where idventa = $mostrar[0]";
        $start3= mysqli_query($conexion,$queryCountSub);
        $rows3= mysqli_num_rows($start3);
        $count2= mysqli_fetch_array($start3);

        //conteo para el precio total
        
        $queryCountPay= "select sum(total) from subventas where idventa = $mostrar[0]";
        $startPay= mysqli_query($conexion,$queryCountPay);
        $rowsPay= mysqli_num_rows($startPay);
        $countPay= mysqli_fetch_array($startPay);

        $pagoTotal = $mostrar[4] + $countPay[0];

        $cantidadProductos= $count[0] + $count2[0];

        $identi++;
        echo"
        
        
        <div class='col s4 m3'>
          <div class='card cyan darken-4'>
            <div class='card-content white-text'>
              <span class='card-title'>Venta no. $mostrar[0]</span>
                <ul class='card-ventas'>
                    <li></li>
                    <li>Numero de productos:  $cantidadProductos</li>
                    <li>Total: $pagoTotal</li>
                    <li>Fecha: $mostrar[5]</li>
                    <li>Realizo: $mostrar[6]</li>
                </ul>
            </div>
            <div class='card-action'>
            <button name='info' id='info' class='waves-effect waves-light btn' onclick='detalles($identi)'>Detalles</button>
            <form action='actions.php?delete=$dato' method='POST'>
            <input type='submit' name='eliminar' id='delete' value='Eliminar' onclick='alert($alerta)' class='waves-effect waves-light btn'>
            </form>
            </div>

            <div class='card-panel teal' id='detalles'>
            <span class='white-text'>
                <table class='table-detalles'>
                    <th>Fecha: $mostrar[5]</th>
                    <th>Realizo: $mostrar[6]</th>
                </table>
                    
                <table class='centered'>    
                <tr>
                    <th>C.producto</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Producto</th>
                </tr>    

                <tr>
                    <td>$mostrar[1]</td>
                    <td>$mostrar[2]</td>
                    <td>$mostrar[4]</td>
                    <td>$mostrar[3]</td>
                </tr>    

                <tr>    
                    <td>$ver[2]</td>
                    <td>$ver[3]</td>
                    <td>$ver[5]</td>
                    <td>$ver[4]</td>
                </tr>
                </table>
            </span>
        </div>
          </div>
        </div>
        
        ";
        
     $mostrar=mysqli_fetch_array($start);
     

    }
    echo"</div>";

?>
<script src="ventas.js"></script>
<script src="jquery.min.js"></script>
<?php  endif; ?>
<?php  if(!isset($_SESSION['user_name'])){ header("location: ../sessionError.php"); } ?>