<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <form action="cambiarTitular.php" method="post"
        <p>Seleccione el tipo de titular:</p>
        <br>
        <input type="radio" name="titular" value="politica">
        <label for="politica">Noticia Politica</label>
        <br>
        <input type="radio" name="titular" value="economica">
        <label for="politica">Noticia Economica</label>
        <br>
        <input type="radio" name="titular" value="deportiva">
        <label for="politica">Noticia Deportiva</label>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>