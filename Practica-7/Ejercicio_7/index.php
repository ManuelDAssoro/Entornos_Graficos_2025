<?php
require_once 'crearCatalogo.php';
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
                </tr>
            </thead>
            <tbody>
                <?php foreach ($catalogo as $item): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['id']); ?></td>
                        <td><?php echo htmlspecialchars($item['producto']); ?></td>
                        <td><?php echo htmlspecialchars(number_format($item['precio'], 2)); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>
<!--
Ejercicio N° 7
Confeccionar un CARRITO DE COMPRAS simple, usando Base de Datos. Se debe crear una base de
datos con el nombre Compras. En dicha base crear una tabla llamada catálogo con los siguientes
atributos:
id
producto del tipo varchar de 100
precio del tipo numérico decimal de 9 entero y 2 decimales. 
-->