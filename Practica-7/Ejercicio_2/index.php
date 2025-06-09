<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<?php
    include("contador.php");
    if ($contador == 1){
        echo "Esta es tu primera visita, bienvenido!";
    } else{
        echo "<br> Esta es tu visita numero ";
        echo $contador;
    }
?>
<body>
    
</body>
</html>