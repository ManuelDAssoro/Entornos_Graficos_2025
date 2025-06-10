<?php
if (!file_exists('base2.db')) {
    $db = new SQLite3('base2.db');
    $query = "CREATE TABLE IF NOT EXISTS alumnos (
        codigo INTEGER PRIMARY KEY AUTOINCREMENT,
        nombre TEXT NOT NULL,
        codigocurso INTEGER NOT NULL,
        mail TEXT NOT NULL
    )";
    $db->exec($query);
    $insertQuery = "INSERT INTO alumnos (nombre, codigocurso, mail) VALUES 
        ('Juan', 101, 'juan.perez@example.com'),
        ('María', 102, 'maria.lopez@example.com')";
    $db->exec($insertQuery);
    $db->close();
}
?>