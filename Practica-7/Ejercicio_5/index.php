<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <form action="iniciarSesion.php" method="post">
        <h3>Inicar Sesion</h3>
        <br>
        <label for="usuario">Usuario: </label>
        <input type="text" id="usuario" required>
        <br>
        <label for="clave">Clave: </label>
        <input type="text" id="clave" required>
        <br>
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>