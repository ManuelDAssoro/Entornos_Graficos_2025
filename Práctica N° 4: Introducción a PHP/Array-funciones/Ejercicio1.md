# Ejercicio 1

**Indicar si los siguientes codigos son equivalentes**

```
<?php
$a = array( 'color' => 'rojo',
 'sabor' => 'dulce',
 'forma' => 'redonda',
 'nombre' => 'manzana',
 4
 );
?>
```

```
<?php
$a['color'] = 'rojo';
$a['sabor'] = 'dulce';
$a['forma'] = 'redonda';
$a['nombre'] = 'manzana';
$a[] = 4;
?>
```

a. Los codigos son equivalentes, el primero utiliza la forma asociativa y el segundo la indexada.

___

