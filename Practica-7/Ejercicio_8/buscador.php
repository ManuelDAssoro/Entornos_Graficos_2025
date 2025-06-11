<?php
$db = new SQLite3('prueba.db');

if(isset($_POST["palabra"])){
    $palabra = trim($_POST["palabra"]);
    $query = $db->prepare("SELECT * FROM buscador WHERE canciones LIKE :palabra");
    $query->bindValue(':palabra', '%' . $palabra . '%', SQLITE3_TEXT);
    $result = $query->execute();
    $hayResultados = false;
    $canciones = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $hayResultados = true;
        $canciones[] = $row['canciones'];
    }
    $db->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <?php if (isset($hayResultados)): ?>
        <h1>Resultados:</h1>
        <ul>
            <?php foreach ($canciones as $cancion): ?>
                <li><?php echo htmlspecialchars($cancion, ENT_QUOTES, 'UTF-8'); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <h1>No se encontraron resultados.</h1>
    <?php endif; ?>
</body>
</html>