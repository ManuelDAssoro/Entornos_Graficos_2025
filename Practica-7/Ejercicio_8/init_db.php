<?php
if (!file_exists('prueba.db')) {
    $db = new SQLite3('prueba.db');
    $query = "CREATE TABLE IF NOT EXISTS buscador (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        canciones TEXT NOT NULL
    )";
    $db->exec($query);
    $insertQuery = "INSERT INTO buscador (canciones) VALUES
        ('Bohemian Rhapsody'),
        ('Stairway to Heaven'),
        ('Bajan'),
        ('Cinema Verite'),
        ('Smells Like Teen Spirit')";
    $db->exec($insertQuery);
}
?>