<?php
require_once("init_db.php");
$hayResultados = false;
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

        <input type="text" id="palabra" name="palabra">
        <input type="submit" value="Buscar">
    </form>
</body>
</html>