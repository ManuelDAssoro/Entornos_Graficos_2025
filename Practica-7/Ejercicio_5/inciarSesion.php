<?php
    if(isset($_POST["usuario"]) && isset($_POST["clave"])){ 
        session_start();
        $_SESSION["usuario"] = $_POST["usuario"];
        $_SESSION["clave"] = $_POST["clave"];
        header("Location: mostrarSesion.php");
        exit();
    }
?>