<?php
if (!file_exists('Compras.db')) {
    $db = new SQLite3('Compras.db');

    $query = "CREATE TABLE IF NOT EXISTS catalogo (
        id INTEGER PRIMARY KEY AUTOINCREMENT, 
        producto TEXT NOT NULL,               
        precio REAL NOT NULL         
    )";
    $db->exec($query);

    $insertQuery = "INSERT INTO catalogo (producto, precio) VALUES
        ('Laptop', 1500.99),
        ('Smartphone', 799.49),
        ('Auriculares', 49.99)";
    $db->exec($insertQuery);

    $db->close();
} 

function obtenerCatalogo() {
    $db = new SQLite3('Compras.db'); 
    $query = "SELECT * FROM catalogo";
    $result = $db->query($query);

    $catalogo = []; 
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $catalogo[] = $row;
    }

    $db->close(); 
    return $catalogo;
}

?>