# Ejercitación 1 - Cuestionario

1. **Qué es HTML, cuando fue creado, cuáles fueron las distintas versiones y cuál es la última?**

HTML (HyperText Markup Language) es el lenguaje de marcado que se utiliza para estructurar y crear páginas web. Este lenguaje funciona en base a etiquetas que definen cómo se presentará el contenido en un navegador web.

HTML fue creado en 1991 por Tim Berners-Lee.

1. HTML 1.0: Fue la primera versión del lenguaje HTML lanzada en 1993.
2. HTML 2.0: Lanzada en 1995, añadió nuevas características como soporte para formularios y scripts.
3. HTML 3.2: Lanzada en 1997, agregó soporte para tablas, frames y hojas de estilo en línea.
4. HTML 4.0 y 4.01: HTML 4.0 fue lanzado en 1997 y agregó soporte para hojas de estilo externas, capas y marcos en línea. La versión 4.01 se lanzó en 1999 y corrigió errores en la versión anterior.
5. XHTML: XHTML (Extensible Hypertext Markup Language) se lanzó en 2000 y se basó en la sintaxis de XML. XHTML fue una importante evolución de HTML y proporcionó una mayor modularidad y estructura al lenguaje.
6. HTML5: Es la última versión del lenguaje HTML, lanzada en 2014. HTML5 introduce muchas nuevas características, como etiquetas semánticas, soporte multimedia, formularios mejorados, API de arrastrar y soltar, almacenamiento local y mucho más.

---

2. **Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos
   con HTML?**

- Compatibilidad para contenido preexistente.
- No reinventar la rueda, es decir si ya existe una tecnologia usada para un caso de uso en especifico, utilizarla antes que inventar algo nuevo con el mismo fin.
- Si ya existe una practica comun, adoptarla y no evitarla ó crear una nueva.
- Evolucion no revolucion, por lo general es mejor evolucionar y mejorar un diseño que existe antes que desecharlo y empezar de cero.
- Utilidad, procurar un diseño que permita utilizar HTML de manera efectiva en distintos propositos.
- Resolver problemas reales, soluciones pragmaticas a un problema/necesidad son priorizadas.
- "Priority of Constituencies: En caso de conflicto, considere a los usuarios antes que a los autores, antes que a los implementadores, antes que a los especificadores, antes que a la pureza teórica.", es decir priorizar costos o dificultades del usuario sobre las de los autores, los implementadores y por simples razones teoricas.
- Seguro por diseño, trabajar con el modelo de seguridad de la web.
- Separar contenido y presentacion, por lo que diseñar con estructura es preferido a diseñar de manera enfocada puramente en la presentacion.
- Evitar complejidad innecesaria.
- Acceso universal.
- Soporte multilenguaje.
- Accesibilidad.

---

3. **En las Especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado? ¿y
   obsoleto?**

Un elemento o atributo de HTML se considera desaprobado cuando ha quedado anticuado por la presencia de estructuras nuevas. Aunque los elementos desaprobados pueden seguir funcionando en algunos navegadores por razones de compatibilidad, su uso no se recomienda y se aconseja utilizar las nuevas estructuras que los han reemplazado.

Por otro lado, un elemento o atributo se considera obsoleto cuando ha sido desaconsejado o incluso eliminado de las especificaciones oficiales de HTML.

---

4. **Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01?**

DTD (DOCTYPE, Definición de Tipo de Documento) es una especificación utilizada en la programación web para definir la estructura y las reglas de validación de un documento XML o SGML. Su función básica es la descripción de la estructura de datos, para usar una estructura común y mantener la consistencia entre todos los documentos que utilicen la misma DTD2. La DTD también declara cuáles juegos de caracteres podemos utilizar.

En la especificación de HTML 4.01, se contemplan tres posibles DTDs:

- Strict: Este DTD hace énfasis en la separación del contenido de la presentación y el comportamiento. Excluye los elementos y atributos de presentación que el W3C espera que dejen de utilizarse a medida que madure el soporte de las hojas de estilo.
- Transitional: Este DTD permite el uso de elementos y atributos de presentación. Los autores pueden usar el DTD Transicional si es necesario el soporte de elementos y atributos de presentación.
- Frameset: Este DTD se utiliza para documentos que incluyen marcos.

---

5. **Qué son los metadatos y cómo se especifican en HTML?**

- Los metadatos son información adicional que dan mas contexto sobre el HTML tal como: la version que se esta utilizando, el titulo de la pagina web.
- Estos metadatos se especifican utilizando el elemento META dentro de html como por ejemplo:

```
  <head>
  <meta charset="UTF-8">
  <meta name="description" content="example">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="John Doe">
  <meta http-equiv="refresh" content="30">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
```

---