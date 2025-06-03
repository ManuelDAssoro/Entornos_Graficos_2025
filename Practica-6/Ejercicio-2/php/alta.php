<?php include("conexion.php"); ?>
<form method="post">
    Ciudad: <input type="text" name="ciudad"><br>
    País: <input type="text" name="pais"><br>
    Habitantes: <input type="number" name="habitantes"><br>
    Superficie: <input type="text" name="superficie"><br>
    Tiene Metro: <input type="checkbox" name="tieneMetro" value="1"><br>
    <input type="submit" value="Agregar">
</form>

<?php
if ($_POST) {
    $tieneMetro = isset($_POST['tieneMetro']) ? 1 : 0;
    $sql = "INSERT INTO Ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
            VALUES ('$_POST[ciudad]', '$_POST[pais]', $_POST[habitantes], $_POST[superficie], $tieneMetro)";
    if ($conn->query($sql)) echo "Ciudad agregada.";
    else echo "Error: " . $conn->error;
}
?>
