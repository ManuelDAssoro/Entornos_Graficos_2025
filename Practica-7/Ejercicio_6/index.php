<?php
require_once 'init_db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Hub de Alumnos</h1>
    <form action="buscarAlumno.php" method="post">
        <input type="email" name="email" required>
        <input type="submit" value="Ingresar">
    </form>
</body>

</html>

