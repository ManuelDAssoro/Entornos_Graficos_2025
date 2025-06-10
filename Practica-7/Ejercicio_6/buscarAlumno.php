<?php
    session_start();
    $email=$_POST["email"];
    $db = new SQLite3('base2.db');
    $query = $db->prepare('SELECT nombre FROM alumnos WHERE mail = :email');
    $query->bindValue(':email', $email, SQLITE3_TEXT);
    $search = $query->execute();
    if ($row = $search->fetchArray(SQLITE3_ASSOC)) {
        $_SESSION['nombre'] = $row['nombre'];
        include('bienvenida.php');
    }else{
        echo "El email no es valido, acceso denegado.";
    }
    
?>
<!--
Confeccionar un formulario que solicite ingresar el mail de un alumno. Si el mail existe en la tabla
alumnos, rescatar su nombre y almacenarlo en una variable de sesión. Además disponer un
hipervínculo a una tercera página que verifique si existe la variable de sesión y de la bienvenida al alumno,
 en caso contrario mostrar un mensaje indicando que no puede visitar esta página (para
saber si una variable de sesión está definida llamamos a la función isset)
if (isset($_SESSION['nombre'])) ....
    Para la realización del ejercicio crear una base de datos con el nombre base2. La misma debe tener
    una tabla denominada alumnos con atributos: codigo, nombre, codigocurso, mail. 
-->