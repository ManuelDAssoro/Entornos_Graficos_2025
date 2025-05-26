# Ejercicio 5:

**Analizar el siguiente ejemplo: Contador de visitas a una página web**

**contador.php**
```
<?
// Archivo para acumular el numero de visitas
$archivo = "contador.dat";
// Abrir el archivo para lectura
$abrir = fopen($archivo, "r");
// Leer el contenido del archivo
$cont = fread($abrir, filesize($archivo));
// Cerrar el archivo
fclose($abrir);
// Abrir nuevamente el archivo para escritura
$abrir = fopen($archivo, "w");
// Agregar 1 visita
$cont = $cont + 1;
// Guardar la modificación
$guardar = fwrite($abrir, $cont);
// Cerrar el archivo
fclose($abrir);
// Mostrar el total de visitas
echo "<font face='arial' size='3'>Cantidad de visitas:".$cont."</font>";
```

**visitas.php**
```<!-- Página que va a contener al contador de visitas -->
<html>
<head></head>
<body>
<? include("contador.php")?>
</body>
</html>
```

**En la misma carpeta, crear el archivo de texto contador.dat, con el valor inicial del contador y con
permisos de lectura y escritura.**




---

Asignamos el valor inicial del contador en 0 dentro del archivo "contador.dat" y hosteamos un servidor local con XAMPP, luego de correr la pagina con estos 3 archivos observamos que cada vez que se accede a la pagina el contador incrementa en 1 gracias al ejecturse el codigo en "contador.php" y luego es mostrado en la pagina ya que en "visitar.php" se toma el valor del contador con un llamado de la funcion include.