<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<?php
include('usuario.php');
?>
<body>
    <form action="" method="post">
        Ingrese su nombre de usuario:
        <br>
        <input type='text' name="usuario" require>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if(isset($usuario)){
        echo "El ultimo usuario en el sitio fue: ";
        echo $usuario;
    }
    ?>
</body>
</html>