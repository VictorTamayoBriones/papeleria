<?php require_once "../assets/includes/nav2.php" ?>
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
    if($rows<=0){
        echo"<h2>No hay ventas registradas</h2>"; die;
    }

    

    $identi = -1;
    echo"<div class='row col s12'>";
    for($i = 0; $i<=$mostrar; $i++){
        $dato=$mostrar[0];
        $alerta= '"¿esta seguro de querer borrar la venta?"';
        

            //consultar subventas

        $consulta ="SELECT * FROM subventas where idventa = $mostrar[0]";
        $ejecutarconsulta= mysqli_query($conexion,$consulta);
        $verfilas= mysqli_num_rows($ejecutarconsulta);
        $fila= mysqli_fetch_array($ejecutarconsulta);

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
            <button name='print' id='print' class='waves-effect waves-light btn' onclick='create($dato)'>PDF</button>
            
          
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
                </tr>";
             
              for($x=0; $x<=$fila; $x++){
                    
                   echo"
                   <table class='centered'>    
                       <tr class='sub-ventas'>
                        <th>    </th>
                        <th>    </th>
                        <th>    </th>
                        <th>    </th>
                       </tr>

                       <tr>    
                           <td>$fila[2]</td>
                           <td>$fila[3]</td>
                           <td>$fila[5]</td>
                           <td>$fila[4]</td>
                       </tr>
                    </table>   
                </table>";
                $fila=mysqli_fetch_array($ejecutarconsulta);



             }
        echo"                
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
<?php  if(!isset($_SESSION['user_name_ep'])){ header("location: ../sessionError.php"); } ?>