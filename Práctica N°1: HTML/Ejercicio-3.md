# Ejercitación 3 - Cuestionario

a.

```
<a href="http://www.google.com.ar">Click aquí para ir a Google</a>
<a href="http://www.google.com.ar" target="_blank">Click aquí para ir a Google</a>
<a href="http://www. google.com.ar" type="text/html" hreflang="es" charset="utf-8" rel="help">
<a href="#">Click aquí para ir a Google</a>
<a href="#arriba">Click aquí para volver arriba</a>
<a name="arriba" id="arriba"></a>
```

El primer hipervinculo abre google en la misma pestaña y muestra el stexto\
El segundo hipervinculo abre google en una pestaña nueva y muestra el texto\
El tercer hipervinculo no funciona porque tiene un espacio luego del www., ademas de que no se visualiza\
El cuarto hipervinculo te lleva a la misma web en la que estas y muestra el texto\
El quinto vinculo te lleva a la seccion #arriba en caso de que exista alguna y muestra el texto Click aquí para volver arriba\
El sexto es la declaracion de un sector en la pagina web no se visualiza nada

b.

```
<p><img src="im1.jpg" alt="imagen1" /><a href="http://www.google.com.ar">Click aquí</a></p>
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> Click aquí</p>
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="ima
gen1" />Click aquí</a></p>
<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> <a
href="http://www.google.com.ar">Click aquí</a></p>
```

El primer caso la imagen y el hipervinculo son elementos separados, se ven la imagen y el texto por separado\
El segundo caso la imagen esta dentro del hipervinculo, y separado del hipervinculo se ve el texto\
El tercer caso la imagen esta dentro del hipervinculo y el texto tambien, ambos son clickeables y llevan a la misma url\
El cuarto caso la imagen y el texto estan en dos hipervinculos separados, se visualizan los dos separados y llevan al mismo destino con distintos enlaces\

c.

```
<ul>
<li>xxx</li>
<li>yyy</li>
<li>zzz</li>
</ul>
```

```
<ol>
<li>xxx</li>
<li>yyy</li>
<li>zzz</li>
</ol>
```

```
<ol>
<li>xxx</li>
</ol>
<ol>
<li value="2">yyy</li>
</ol>
<ol>
<li
value="3">zzz</li>
</ol>
```

```
<blockquote>
<p>1. xxx<br />
2. yyy<br />
3. zzz</p>
</blockquote>
```

En el primer caso se visualiaza una lista desordenada que contiene

- xxx
- yyy
- zzz

En el segundo caso se visualiza una lista ordenada que contiene:

1. xxx
2. yyy
3. zzz

En el tercer caso se visualiza a cada elemento de la lista en en su propia lista ordenada. El atributo value en las etiquetas li establece el número de inicio de cada elemento

<ol><li>xxx</li></ol>
<ol><li value="2">yyy</li></ol>
<ol><li value="3">zzz</li></ol>

En el cuarto caso se visualiza una cita con una lista de los elementos ordenados, se utiliza `<br/>`para el salto de linea.

<blockquote>
<p>1. xxx<br />
2. yyy<br />
3. zzz</p>
</blockquote>

d.

```
<table border="1" width="300">
<tr>
<th>Columna 1</th>
<th>Columna 2</th>
</tr>
<tr>
<td>Celda 1</td>
<td>Celda 2</td>
</tr>
<tr>
<td>Celda 3</td>
<td>Celda 4</td>
</tr>
</table>
```

```
<table border="1" width="300">
<tr>
<td><div align="center"><strong>Colum
na1</strong></div></td>
<td><div align="center"><strong>Columna
2</strong></div></td>
</tr>
<tr>
<td>Celda 1</td>
<td>Celda 2</td>
</tr>
<tr>
<td>Celda 3</td>
<td>Celda 4</td>
</tr>
</table>
```

En el primer caso se visualiza una tabla, los encabezados estan marcados con la tag td que se utiliza para las celdas con los datos, los encabezados estan en negrita y centrados por el atributo align del div y por la tag strong

En el segundo caso los encabezados estan marcados con la tag th que tiene la funcionalidad de marcar los encabezados especificamente. El texto se muestra en negrita y centrado gracias a dicha tag.

e.

```
<table width="200">
<caption>
Título
</caption>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">
&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
</table>
```

```
<table width="200">
<tr>
<td colspan="3"><div
align="center">Título</div></td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
</table>
```

En el primer caso se visualiza una etiqueta de tabla que tiene una caption, que muestra el titulo encima de la tabla
En el segundo caso se crea una tabla y se agrega una fila con tr con el titulo dentro de la tabla y centrado por la propiedad align del div

f.

```
<table width="200">
<tr>
<td colspan="3"><div
align="center">Título</div></td>
</tr>
<tr>
<td rowspan="2" bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
</table>
```

```
<table width="200">
<tr>
<td colspan="3"><div
align="center">Título</div></td>
</tr>
<tr>
<td colspan="2"
bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
</table>
```

En el primer caso la primera celda de la segunda fila ocupa dos filas por el atributo rowspan=2
En el segundo caso la primer celda de la segunda filda ocupa dos columnas por el atributo colspan

g.

```
<table width="200" border="1">
<tr>
<td colspan="3"><div
align="center">Título</div></td>
</tr>
<tr>
<td colspan="2"rowspan="2">&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width="50%">&nbsp;</td>
</tr>
</table>
```

```
<table width="200" border="1" cellpadding="0"
cellspacing="0">
<tr>
<td colspan="2"><div
align="center">Título</div></td>
</tr>
<tr>
<td rowspan="2">&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width="50%">&nbsp;</td>
</tr>
</table>
```

En el primer caso la primera celda de la segunda fila se extiende a través de dos columnas y dos filas gracias a los atributos colspan="2" y rowspan="2"
En el segundo caso la primera celda de la segunda fila se extiende a través de dos filas gracias al atributo rowspan="2". Esto significa que la celda ocupará el espacio de la primera celda en la segunda y tercera fila tambien contiene los atributos que eliminan el espacio entre las celdas y el espacio entre el contenido de la celda y sus bordes cellpadding="0" y cellspacing="0"

h.

```
<form id="form1" name="form1" action="procesar.php" method="post" target="_blank">
<fieldset>
<legend>LOGIN</legend>
Usuario: <input type="text" id="usu1" name="usu1" value="xxx" /><br />
Clave: <input type="password" id="clave1" name="clave1" value="xxx" />
</fieldset>
<input type="submit" id="boton1" name="boton1" value="Enviar" />
</form>
```

```
<form id="form2" name="form2" action="" method="get" target="_blank">
LOGIN<br />
<label>Usuario: <input type="text" id="usu2" name="usu2" /></label><br />
<label>Clave: <input type="text" id="clave2" name="clave2" /></label><br />
<input type="submit" id="boton2" name="boton2" value="Enviar" />
</form>
```

```
<form id="form3" name="form3" action="mailto:xx@xx.com” enctype=text/plain method="p
ost" target="_blank">
<fieldset>
<legend>LOGIN</legend>
Usuario: <input type="text" id="usu3" name="usu3" /><br />
Clave: <input type="password" id="clave3" name="clave3" />
</fieldset>
<input type="reset" id="boton3" name="boton3" value=
"Enviar" />
</form>
```

El primer caso ya tiene valores por defecto en los campos mientras que los otros dos no y abre una nueva pestaña al hacer submit
El segundo caso la clave es de tipo "text" y se visualizan los datos enviados por el metodo y abre una nueva pestaña al hacer submit
El tercer caso no abre una ventana nueva porque el input tiene el type="reset"

i.

```
<label>Botón 1
<button type="button" name="boton1" id="boton1">
<img src="logo.jpg" alt="Botón con imagen " width="30" height="20" /><br />
<b>CLICK AQUÍ</b></button></label>
```

```
<label>Botón 2
<input type="button" name="boton2" id="boton2" value="CLICK AQUÍ" />
</label>
```

El primer caso muestra un boton con una imagen y un texto. Donde se utiliza el atributo button
El segundo caso muestra solamente el texto. Donde se utilizxa el metodo input de tipo boton

j.

```
<p><label><input type="radio" name="opcion" id="X" value="X" />X</label><br />
<label><input type="radio" name="opcion" id="Y" value="Y" />Y</label></p>
```

```
<p><label><input type="radio" name="opcion1" id="X" value="X" />X</label><br />
<label><input type="radio" name="opcion2" id="Y" value="Y" />Y</label></p>
```

El primer código genera 2 radio buttons en los cuales solo se puede marcar una opción, mientras que el segundo código genera 2 radio buttons en los cuales se pueden seleccionar
ambas opciones. Esto es debido a los valores del atributo name.

k.

```
<select name="lista">
<optgroup label="Caso 1">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
<optgroup label="Caso 2">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
</select>
```

```
<select name="lista[]" multiple="multiple">
<optgroup label=" Caso 1">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
<optgroup label=" Caso 2">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
</select>
```

El primer caso es un menu desplegable simple que permite seleccionar una sola opcion a la vez
El segundo caso es un menu desplegable que permite seleccionar varias opciones a la vez