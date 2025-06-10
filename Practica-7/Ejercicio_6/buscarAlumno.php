<?php
    session_start();
    $email = trim($_POST["email"])      ;
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
    ##No funciona bien la busqueda, sale siempre por el else
?>
