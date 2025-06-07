# Ejercicio 2:

**Indicar si los siguientes códigos son equivalentes.**

```<?php
$i = 1;
while ($i <= 10) {
 print $i++;
}
?>
```

```
<?php
$i = 1;
while ($i <= 10):
 print $i;
 $i++;
endwhile;
?>
```

````
<?php
$i = 0;
do {
 print ++$i;
} while ($i<10);
?> ```
````

a. Los codigos son equivalentes porque los 3 devuelven el mismo resultado: `12345678910`, sin embargo iteran de maneras distintas. Los 2 primeros iteran utilizando una estructura while, ambos comienzan en uno. Asignar el valor 1 a una variable i, luego printean dicha variable. El primero utiliza el operador `++` para printear `$i` y luego sumar 1, el segundo printea `$i` y en otra linea utiliza el operador `++`. Ademas el primero define el final del while utilizando llaves `{}`, y el segundo `endwhile;`. El tercer codigo a diferencia de los 2 primeros asigna el valor 0 a una variable i luego utiliza una estructura `do while` para iterar mientras se cumpla la condicion de que `$i<10`. Para mostrar el valor de `$i` utiliza el operador `++`, sin embargo al colocarlo adelante printea el valor posterior a `$i` (en el primer caso haria ++0 => print (1)). Finalmente al llegar al ultimo valor, es decir el 10, primero printea el valor y luego finaliza el while porque la condicion esta despues.

---

```
<?php
for ($i = 1; $i <= 10; $i++) {
print $i;
}
?>
```

```
<?php
for ($i = 1; ;$i++) {
 if ($i > 10) {
 break;
 }
 print $i;
}
?>
```

```
<?php
$i = 1;
for (;;) {
 if ($i > 10) {
 break;
 }
 print $i;
 $i++;
}
?>
```

```
<?php
for ($i = 1; $i <= 10; print $i, $i++) ;
?>
```

b. Los cuatro ejemplos utilizan un bucle for para mostrar los diferentes valores de $i en esos bucles. El primero tiene todas las condiciones asignadas dnetro de los parametros de for, la segunda tiene la condicion de salida del bucle (`break`) dentro del mismo for, la tercera no tiene ninguna condicion dentro de los parametros y estan todos metidos adentro del for y la ultima tiene los parametros junto con la ejecucion (`print` e i++) dentro del for

---

```
<?php
…
…
if ($i == 0) {
 print "i equals 0";
} elseif ($i == 1) {
 print "i equals 1";
} elseif ($i == 2) {
 print "i equals 2";
}
?>
```

```
<?php
…
…
switch ($i) {
 case 0:
 print "i equals 0";
 break;
 case 1:
 print "i equals 1";
 break;
 case 2:
 print "i equals 2";
 break;
}
?>
```

c. Los dos ejemplos imprimen un mensaje con el valor de $i aunque utilizan estructuras diferentes. La diferencia es que el primer ejemplo utiliza `if` y `elseif` mientras que el segundo utiliza un `switch`
