<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papeleria Tlaxcalteca</title>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style.css">
<!--    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style.css">
-->
    <link rel="stylesheet" href="../materialize/css/materialize.css">

</head>
<body>
    <header>
        <div class="barra">
            <ul>
            <?= $direccion=""; $url="http://localhost/master-php/Proyecto/"?>
            
            <?php
                if($url == "/index.php"){
                    $direccion = "#";
                }
                else{
                    $direccion = "../index.php";
                }
            ?>
            
                <li>
                    <a href=<?=$direccion?>>Inicio</a>
                </li>

                <li>
                    <a href="catalogo.php">Catalogo</a>
                </li>

                <li>
                    <a href="#sobreNosotros">Sobre nosotros</a>
                </li>

                <li>
                    <a href="#contacto">Contacto</a>
                </li>
            </ul>
        </div>