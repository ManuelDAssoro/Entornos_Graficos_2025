<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<?php
    if (isset($_COOKIE['noticiaActual'])) {
        header("Location: cambiarTitular.php");
        exit();
}
?>
<body>
    <form action="cambiarTitular.php" method="post">
        <p>Seleccione el tipo de titular:</p>
        <br>
        <input type="radio" id="politica" name="titular" value="Politica">
        <label for="politica">Noticia Politica</label>
        <br>
        <input type="radio" id="economica" name="titular" value="Economica">
        <label for="economica">Noticia Economica</label>
        <br>
        <input type="radio" id="deportiva" name="titular" value="Deportiva">
        <label for="deportiva">Noticia Deportiva</label>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>