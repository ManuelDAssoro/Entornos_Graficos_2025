<?php
include("conexion.inc")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <h1>Buscador de Canciones</h1>
    <form action="buscador.php" method="post" name="formBuscador">
        <label for="palabra">Buscar: </label>
        <input type="text" id="palabra">
    </form>
</body>
</html>
<!--
Ejercicio N° 8
Confeccionar un BUSCADOR de canciones. Para ello deberá crear una base de datos llamada
prueba y una tabla denominada buscador con el atributo canciones
-->