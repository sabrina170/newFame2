<?php

if ($_POST) {
    // nombre del comprador
    $nombre = "";
    // telefono del comprador
    $email = "";
    // 
    $email_title = "Nuevo Consulta";
    // ¡Deseo saber mas imformacion del producto .....?
    $asunto = "";
    // consulta del comprador
    $mensaje = "";


    if (isset($_POST['nombre'])) {
        $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    }

    if (isset($_POST['telefono'])) {
        $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);
    }
    if (isset($_POST['tipo'])) {
        $tipo = filter_var($_POST['tipo'], FILTER_SANITIZE_STRING);
    }
    if (isset($_POST['asunto'])) {
        $asunto = filter_var($_POST['asunto'], FILTER_SANITIZE_STRING);
    }

    if (isset($_POST['mensaje'])) {
        $mensaje = htmlspecialchars($_POST['mensaje']);
    }
    // echo  $tipo;

    $mensaje1 = "Nombre: " . $nombre;
    $mensaje1 .= "<br>";
    $mensaje1 .= "Telefono: " . $telefono;
    $mensaje1 .= "<br>";
    $mensaje1 .= "Asunto: ¿Deseo saber mas imformación sobre el  - " . $asunto;
    $mensaje1 .= "<br>";
    $mensaje1 .= "Mensaje: " . $mensaje;
    $mensaje1 .= "<br>";

    if ($asunto == "billing") {
        $recipient = "fameperu_kard@hotmail.com";
    } else if ($asunto == "marketing") {
        $recipient = "fameperu_kard@hotmail.com";
    } else if ($asunto == "technical support") {
        $recipient = "fameperu_kard@hotmail.com";
    } else {
        $recipient = "fameperu_kard@hotmail.com";
    }
    //Creamos cabecera.
    $headers  = 'MIME-Version: 1.0' . "\r\n"
        . 'Content-type: text/html; charset=utf-8' . "\r\n"
        . 'From: ' . $email . "\r\n";


    if (@mail($recipient, $email_title, $mensaje1, $headers)) {
        // echo "<p>Thank you for contacting us, $nombre. You will get a reply within 24 hours.</p>";
        // header('Location:productos.php?nt=1');
        if ($tipo == 1) {
            header('Location: productos.php?nt=1');
        } else if ($tipo == 2) {
            header('Location: servicios.php?nt=1');
        } else if ($tipo == 3) {
            header('Location: contacto.php?nt=1');
        }
    } else {
        if ($tipo == 1) {
            header('Location: productos.php?nt=2');
        } else if ($tipo == 2) {
            header('Location: servicios.php?nt=2');
        } else if ($tipo == 3) {
            header('Location: contacto.php?nt=2');
        }
    }
    if ($tipo == 1) {
        header('Location: productos.php?nt=1');
    } else if ($tipo == 2) {
        header('Location: servicios.php?nt=1');
    } else if ($tipo == 3) {
        header('Location: contacto.php?nt=1');
    }
} else {
    echo '<p>Something went wrong</p>';
}
