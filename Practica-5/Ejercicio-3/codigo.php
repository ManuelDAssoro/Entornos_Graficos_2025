<?php
    $nombre = $_POST['nombre'];
    $amigo = $_POST['amigo'];
    $email_amigo = $_POST['email_amigo'];

    $asunto = "Recomendación de sitio web";
    $mensaje = "Hola, " . $amigo . "\n\n" . $nombre . " te ha recomendado que visites este sitio web. Aquí está el enlace: https://www.frro.utn.edu.ar/";

    mail($email_amigo, $asunto, $mensaje);

