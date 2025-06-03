<?php
session_start();
session_destroy();
echo "La sesión se ha cerrado. <a href='mail.php'>Volver al Inicio</a>";
?>
