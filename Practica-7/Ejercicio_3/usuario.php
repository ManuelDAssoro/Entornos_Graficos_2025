<?php
    if(isset($_POST['usuario'])){
        $usuario = $_POST['usuario'];
        setcookie("ultimoUsuario",$usuario,time()+(60*60*24*30));
    }else{
        if(isset($_COOKIE['usuario'])){
            $usuario = $_COOKIE['usuario'];
        }
    }

?>