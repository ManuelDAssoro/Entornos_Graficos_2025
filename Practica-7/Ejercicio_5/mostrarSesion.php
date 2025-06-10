<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Datos del Cliente:</h1>
    <p>Usuario: 
    <?php
        session_start();
        echo $_SESSION["usuario"];
    ?>
    </p>
    <p>Clave: 
    <?php
        echo $_SESSION["clave"];
    ?>
    </p>
</body>
</html>
