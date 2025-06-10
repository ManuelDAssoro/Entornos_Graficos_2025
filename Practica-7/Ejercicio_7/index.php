<?php
require_once 'crearCatalogo.php';
session_start();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

if (isset($_POST['cerrar_sesion'])) {
    session_destroy();}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $idProducto = intval($_POST['id']);
    $db = new SQLite3('Compras.db');
    $query = $db->prepare('SELECT * FROM catalogo WHERE id = :id');
    $query->bindValue(':id', $idProducto, SQLITE3_INTEGER);
    $result = $query->execute();

    if ($producto = $result->fetchArray(SQLITE3_ASSOC)) {
        $_SESSION['carrito'][] = $producto;
        $mensaje = "Producto agregado al carrito: " . htmlspecialchars($producto['producto']);
    }

    $db->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Catalogo</h1>
    <?php
    $catalogo = obtenerCatalogo(); 

    if ($catalogo && count($catalogo) > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($catalogo as $item): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['id']); ?></td>
                        <td><?php echo htmlspecialchars($item['producto']); ?></td>
                        <td><?php echo htmlspecialchars(number_format($item['precio'], 2)); ?></td>
                        <td><form action="" method="POST">
                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($item['id']); ?>">
                                <button type="submit">Agregar al Carrito</button>
</form></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
    <form action="" method="POST">
        <button type="submit" name="cerrar_sesion">Vaciar Carrito</button>
    </form>

        
    <h2>Carrito</h2>
    <?php if (!empty($_SESSION['carrito'])): ?>
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['carrito'] as $item): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['id']); ?></td>
                        <td><?php echo htmlspecialchars($item['producto']); ?></td>
                        <td><?php echo htmlspecialchars(number_format($item['precio'], 2)); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>El carrito está vacío.</p>
    <?php endif; ?>
</body>
</html>
