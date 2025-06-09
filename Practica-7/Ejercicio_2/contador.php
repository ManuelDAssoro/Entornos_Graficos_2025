<?php
    if(!isset($_COOKIE['visitas'])){
        $contador = 1;
        setcookie("visitas", $contador, time()+(60*60*24*30));
    } else{
        $contador = $_COOKIE['visitas'] + 1;
        setcookie("visitas", $contador, time()+(60*60*24*30));
    }
?>