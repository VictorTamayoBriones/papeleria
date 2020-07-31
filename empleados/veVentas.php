<?php require_once "../assets/includes/navlogin.php" ?>
<?php require_once "../conexion.php" ?>
<?require_once "actions.php" ?>
<a href="epindex.php">
<button class="btn-large center deep-blue hoverable" id="return">Regresar</button>
</a>

<div class="tabla">
    <table class="striped">
        <thead>
            <tr>
                <th>Folio</th>
                <th>C.producto</th>
                <th>N.producto</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Fecha</th>
                <th>Realizo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php 
           $consulta= "SELECT * FROM ventas";
           $ejecutarconsulta= mysqli_query($conexion,$consulta);
           $verfilas= mysqli_num_rows($ejecutarconsulta);
           $fila= mysqli_fetch_array($ejecutarconsulta);
           /*    subventas    */
           $consulta2= "SELECT idventa, codigo, nombre, cantidad, total, fecha, nombre_usuario from subventas";
           $ejecutarconsulta2= mysqli_query($conexion,$consulta2);
           $verfilas2= mysqli_num_rows($ejecutarconsulta2);
           $fila2= mysqli_fetch_array($ejecutarconsulta2); 
               
                   if(!$ejecutarconsulta && !$ejecutarconsulta2){
                       echo("ERROR en la consulta");
                   }else{

                        if($verfilas<1 or $verfilas2<1){

                               echo("<tr><td>Sin registros</td></tr>");

                        }elseif ($verfilas>=1 or $verfilas2>=1) {
                            
                            if($fila[0] == $fila2[0]){
                                for($x=0; $x<=$fila; $x++){
                                    $dato=$fila[0];
                                    $alerta= '"¿esta seguro de querer borrar la venta?"';
                                    echo"
                                    
                                        <tr>
                                            <td>$fila[0]</td>
                                            <td>$fila[1]</td>
                                            <td>$fila[3]</td>
                                            <td>$fila[2]</td>
                                            <td>$fila[4]</td>
                                            <td>$fila[5]</td>
                                            <td>$fila[6]</td>
                                            <form action='actions.php?delete=$dato' method='POST'>
                                            <td><input type='submit' name='eliminar' id='delete' value='Eliminar' onclick='alert($alerta)'>
                                            </form>
                                        </tr>";
                                        
                                         $fila=mysqli_fetch_array($ejecutarconsulta);
                                }
    

                                for($x=0; $x<=$fila2; $x++) {
                                    $alerta= '"¿esta seguro de querer borrar la venta?"';
                                    echo"
                                    
                                        <tr>
                                            <td>$fila2[0]</td>
                                            <td>$fila2[1]</td>
                                            <td>$fila2[2]</td>
                                            <td>$fila2[3]</td>
                                            <td>$fila2[4]</td>
                                            <td>$fila2[5]</td>
                                            <td>$fila2[6]</td>
                                        </tr>";
                                       
                                        $fila2=mysqli_fetch_array($ejecutarconsulta2);
                                    }
      

      
                            }else{
                                echo"chale";
                            }
                        }
                       }

        
                       

            
            



        ?>
    </table>
</div>

<?php require_once "../assets/includes/footerlogin.php" ?>