<?php include("conexion.php"); ?>

<form method="post">
    ID de ciudad a eliminar: <input type="number" name="id"><br>
    <input type="submit" value="Eliminar">
</form>

<?php
if ($_POST) {
    $sql = "DELETE FROM Ciudades WHERE id=$_POST[id]";
    if ($conn->query($sql)) echo "Ciudad eliminada.";
    else echo "Error: " . $conn->error;
}
?>
