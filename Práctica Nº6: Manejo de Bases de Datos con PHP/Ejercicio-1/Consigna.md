## Ejercicio 1: Completar

Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es
necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función: **mysqli_connect()**

Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios: **Nombre del servidor, nombre de usuario y  contraseña.**

Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función: **mysqli_select_db()**

Esta función debe pasar como parámetro: **Un identificador de la conexión y el nombre de la base de datos.**

La función mysqli_query () se utiliza para: **Para realizar una consulta SQL en la base de datos**

y requiere como parámetros: **Un identificador de la conexión y la consulta SQL.**

La cláusula or die() se utiliza para: **Para detener la ejecución del script.**

y la función mysqli_error () se puede usar para: **Para obtener una descripción del último error.**

Si la función mysqli_query() es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo
$vResult, y a continuación se puede ejecutar el siguiente código (explicarlo):
```
<?php
while ($fila = mysqli_fetch_array($vResultado))
{
?>
<tr>
 <td><?php echo ($fila[0]); ?></td>
 <td><?php echo ($fila[1]); ?></td>
 <td><?php echo ($fila[2']); ?></td>
</tr>
<tr>
 <td colspan="5">
<?php
}
mysqli_free_result($vResultado);
mysqli_close($link);
?>
```

Luego de ejecutarse la funcion `mysqli_query()` y guardar el resultado en $vResultado, se recorre a esta variable dentro del while mediante `mysqli_fetch_array()`.
Para cada fila, se genera un elemento `<td>` dentro de sus 3 columnas.
Luego libera la memoria con `mysqly_free_result` y se cierra la conexion con `mysqly_close()`.


