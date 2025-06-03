// conexion.php
<?php
$host = "db";
$user = "root";
$pass = "root";
$db = "Capitales";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
