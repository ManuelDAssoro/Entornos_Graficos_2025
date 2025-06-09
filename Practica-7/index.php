  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<?php
if(isset($_POST["estilo"])){
    $estilo = $_POST["estilo"];
    setcookie("estilo",$estilo,time()+(60*60*24*30));
} else{
    if(isset($_COOKIE["estilo"])){
        $estilo = $_COOKIE["estilo"];
    }
}
if(isset($estilo)){
echo '<link rel="STYLESHEET" type="text/css" href="' . $estilo . '.css">';
}
?>
<body>
    <form action="" method="POST">
        Elija el estilo del sitio web:
        <br>
        <select name="estilo">
            <option value="rojo">Rojo</option>
            <option value="azul">Azul</option>
        </select>
        <br>
        <input type="submit" value="Enviar"> 
    </form>
</body>
</html>