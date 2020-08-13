<!DOCTYPE html>
<html lang="es">
<head>
    <?php  require_once "methodPdf.php"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create pdf</title>
    <link rel="stylesheet" href="../materialize/css/materialize.css">
    <style>
    body{padding:10px;
    }
    .tabla{    
        width:60%;    
        margin:0px auto;
        font-size: 15px;
        text-align:center;
    }


    .cabecera img{
        width:20%;
        margin-right: 20%;
        margin-left: 3%;
        margin-top: 10px;
    }
    .cabecera {width:100%;
        display:flex;
        flex-wrap:wrap;align-items: center;
        flex-direction: row;
    }
    p{
        text-align: center;
        font-size:16px;
    }
    h2{
        text-align: center;
    }

    th{
        padding:16px;
        max-width: 50px;
    }
    
    td{
        max-width: 50px;
    }
    </style>
</head>
<body>
    <div class="cabecera">
        <img src="../assets/images/l.png" alt="papeleria Tlaxcalteca">
        <h2>Reporte de ventas</h2>
    </div>
    <br>
    <p>
        Este reporte de ventas funciona como comprobante de ingresos, En la siguiente tabla se incluyen <br> 
        Los datos principales de una venta especifica, La cual tiene el proposito de <br> 
        resolver dudas y dar aclaraciones  a quien lo solicite Con el respectivo consentimiento de <br> 
        la autoridad correspendiente y competente en turno.
    </p>
    <br>
    <br>
    <div class="tabla">
    <table class="striped">
        <tr>
            <th id="th">No.venta</th>
            <th id="th">Codigo de producto</th>
            <th id="th">Producto</th>
            <th id="th">Cantidad</th>
            <th id="th">Total</th>
            <th id="th">Fecha</th>
            <th id="th">Realizo</th>
        </tr>

        <tr>
            <td><?=$mostrar[0]?></td>
            <td><?=$mostrar[1]?></td>
            <td><?=$mostrar[3]?></td>
            <td><?=$mostrar[2]?></td>
            <td><?=$mostrar[4]?></td>
            <td><?=$mostrar[5]?></td>
            <td><?=$mostrar[6]?></td>
        </tr>

        
        <?php  for($x=0; $x<=$fila; $x++): ?>
        <tr>
            <td>    </td>
            <td><?=$fila[2]?></td>
            <td><?=$fila[4]?></td>
            <td><?=$fila[3]?></td>
            <td><?=$fila[5]?></td>
            <td><?=$fila[6]?></td>
            <td>    </td>
        </tr>
        <?php $fila=mysqli_fetch_array($ejecutarconsulta);?>
        <?php endfor; ?>
        
    </table>
    </div>
</body>
</html>