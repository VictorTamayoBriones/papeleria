<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papeleria Tlaxcalteca</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="session-error">
        <p>Ops, error de sesión</p>
        <p>Parece que por el mento este contenido no esta disponible</p>
    </section>
    <script>
    (function(){

        function redir(){
            window.location="./users/loginAd.php";
        }

        function aviso(){
            alert("Error inicio de sesion necesario");
        }

        setTimeout(aviso,2000);
        setTimeout(redir,5000);

    }())
    </script>
</body>
</html>