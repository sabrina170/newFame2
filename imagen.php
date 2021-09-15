<?php
$accion = $_REQUEST['action'];
date_default_timezone_set("America/Lima");
switch ($accion) {
    case  'insert':
        if (isset($_POST["submit"])) {
            include('conexion.php');

            $ruta = 'imagenes/' . $_FILES['imagen']['name'];
            // $image = $_FILES['imagen']['tmp_name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);



            $insertar = $cn->query("INSERT INTO `productos` 
                (`id`, `nombre`, `foto`, `descripcion`, `foto2`, `foto3`, `categoria`) 
                VALUES (NULL,  NULL,'$ruta', NULL, NULL, NULL, NULL);");

            if ($insertar) {
                echo 1;
            } else {
                echo mysqli_error($cn);
            }
        }
        break;
}
