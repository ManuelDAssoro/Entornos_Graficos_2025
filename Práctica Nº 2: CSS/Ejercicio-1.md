# Ejercitación 1 -Responder

1. **¿ Qué es CSS y para qué se usa?**

Es un lenguaje de estilo utilizado para describir el aspecto y formato de un documento escrito en un lenguaje como HTML. Se utiliza para definir cómo se presentan los elementos HTML en una página web.

2. **CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan?**

Css utiliza reglas asignadas a elementos HTML. Las reglas están compuestas por 4 componentes, selector, declaraciones, propiedades y valores. El selector indica la parte del documento donde se aplica la regla. La declaración consta de un par de corchetes que le indican al navegador que estilo brindar al elemento. La propiedad de CSS le indica al navegador cual caracteristica de estilo del elemento debe cambiarse. Cada propiedad tiene su paquete de valores.

3. **¿ Cuáles son las tres formas de dar estilo a un documento?**

En linea, incrustado en la cabecera y mediante hojas de estilo externas.

4. **¿ Cuáles son los distintos tipos de selectores más utilizados?**
**Ejemplifique cada uno.**

    HTML:
            <p>¡Hola!</p>
            <p class="my-class">¡Chau!</p>
            <p id="my-id">Hola?</p>
    1-
    CSS:
            p{
                color: red;
                front-family: Avenir;
            }
    2-
    CSS:
            .my-class {
                color: red;
                font-family: Avenir;
            }

            #my-id {
                color: blue;
                font-family: Courier;
            }

5. **¿ Qué es una pseudo-clase? Cuáles son las más utilizadas aplicadas a vínculos?**

Una pseudo-clase es una palabra que se añade a un selector para especificar un estado especial del elemento. Las pseudo-clases permiten aplicar estilos a elementos en función de ciertas condiciones o estados que no están representados directamente en el HTML.

6. **¿ Qué es la herencia?**

Es un mecanismo mediante el cual un elemento hijo hereda los atributos de su padre.

7. **¿ En qué consiste el proceso denominado cascada?**

Es el proceso mediante el cual se determina qué estilos se aplicarán a un elemento en particular cuando múltiples reglas de estilo compiten entre sí. Consiste en 4 pasos, especificidad, importancia del origen, orden de aparición y herencia.
