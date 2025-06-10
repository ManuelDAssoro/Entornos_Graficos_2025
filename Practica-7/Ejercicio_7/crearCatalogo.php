<?php
if (!file_exists('Compras.db')) {
    $db = new SQLite3('Compras.db');

    $query = "CREATE TABLE IF NOT EXISTS catálogo (
        id INTEGER PRIMARY KEY AUTOINCREMENT, 
        producto TEXT NOT NULL,               
        precio REAL NOT NULL         
    )";
    $db->exec($query);

    $insertQuery = "INSERT INTO catálogo (producto, precio) VALUES
        ('Laptop', 1500.99),
        ('Smartphone', 799.49),
        ('Auriculares', 49.99)";
    $db->exec($insertQuery);

    $db->close();
} 
?>