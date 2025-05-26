# Ejercicio 4:

**Si el archivo datos.php contiene el código que sigue:**
```
<?php
$color = 'blanco';
$flor = 'clavel';
?>
```

**Indicar las salidas que produce el siguiente código. Justificar.**
```
<?php
echo "El $flor $color \n";
include 'datos.php';
echo " El $flor $color";
?>
```

El código devolverá la siguiente salida en pantalla:
```
El   
 El clavel blanco
```
Esto se debe a que al momento de ejecutar la linea del primer **echo** aun no se ha declarado ni asignado valor alguno a las variables $color y $flor, pero luego de realizar el "include 'datos.php'" estamos incorporando al programa la asignacion de 'blanco' y 'clavel' por lo tanto al ejecutar el segundo **echo** el programa devuelve "El clavel blanco".