<?php
include("conexion.php");
$result = $conn->query("SELECT * FROM Ciudades");

echo "<table border='1'>
<tr>
<th>id</th><th>ciudad</th><th>país</th><th>habitantes</th><th>superficie</th><th>tieneMetro</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['ciudad']}</td>
        <td>{$row['pais']}</td>
        <td>{$row['habitantes']}</td>
        <td>{$row['superficie']}</td>
        <td>{$row['tieneMetro']}</td>
    </tr>";
}
echo "</table>";
?>
