<?php

$cn = new mysqli("localhost", "root", "", "famebd");
$cn->query("SET NAMES 'utf8'");

if ($cn->connect_errno) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $cn->connect_errno . "\n";
    echo "Error: " . $cn->connect_error . "\n";
    exit;
}
