Ejercicio 3:

Explicar para qué se utiliza el siguiente código:
a:

<html>
<head><title>Documento 1</title></head>
<body>
<?php
    echo "<table width = 90% border = '1' >";
    $row = 5;
    $col = 2;
    for ($r = 1; $r <= $row; $r++) {
        echo "<tr>";
        for ($c = 1; $c <= $col;$c++) {
            echo "<td>&nbsp;</td>\n";
        }   echo "</tr>\n";
    }
    echo "</table>\n";
?>
</body></html>

Este código genera una tabla HTML con un tamaño 90% de ancho del contenedor y un borde de 1 pixel de grosor. Tiene 5 filas 2 columnas.
b:

<html>
<head><title>Documento 2</title></head>
<body>
<?php
if (!isset($_POST['submit'])) {
?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 Edad: <input name="age" size="2">
 <input type="submit" name="submit" value="Ir">
 </form>
<?php
 }
else {
 $age = $_POST['age'];
 if ($age >= 21) {
 echo 'Mayor de edad';
 }
 else {
 echo 'Menor de edad';
 }
}
?>
</body></html>

Este código me permite ingresar la edad de una persona para que me diga si es mayor o menor de 21 años.
