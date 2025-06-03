<?php include("conexion.php"); ?>

<form method="post">
    ID de ciudad a modificar: <input type="number" name="id"><br>
    Nuevo nombre: <input type="text" name="ciudad"><br>
    País: <input type="text" name="pais"><br>
    Habitantes: <input type="number" name="habitantes"><br>
    Superficie: <input type="text" name="superficie"><br>
    Tiene Metro: <input type="checkbox" name="tieneMetro" value="1"><br>
    <input type="submit" value="Modificar">
</form>

<?php
if ($_POST) {
    $tieneMetro = isset($_POST['tieneMetro']) ? 1 : 0;
    $sql = "UPDATE Ciudades SET 
                ciudad='$_POST[ciudad]', 
                pais='$_POST[pais]', 
                habitantes=$_POST[habitantes], 
                superficie=$_POST[superficie], 
                tieneMetro=$tieneMetro 
            WHERE id=$_POST[id]";
    if ($conn->query($sql)) echo "Ciudad modificada.";
    else echo "Error: " . $conn->error;
}
?>
