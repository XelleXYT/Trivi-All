<?php

include('funciones.php');

$mysqli=conectaBBDD();

function limpiaPalabra($palabra) {
    $palabra = trim($palabra, "'");
    $palabra = trim($palabra, " ");
    $palabra = trim($palabra, "-");
    $palabra = trim($palabra, "`");
    $palabra = trim($palabra, "´");
    $palabra = trim($palabra, '"');
    $palabra = trim($palabra, "(");
    $palabra = trim($palabra, ")");
    $palabra = trim($palabra, "&");
    $palabra = trim($palabra, ";");
    $palabra = trim($palabra, "<");
    $palabra = trim($palabra, ">");

    return $palabra;
}

$cajanombre = limpiaPalabra($_POST['cajanombre']);
$cajapassword = limpiaPalabra($_POST['cajapassword']);

echo $cajanombre;
echo $cajapassword;

$resultadoQuery = $mysqli->query("INSERT INTO usuarios(nombreUsuario,userPass) VALUES ('$cajanombre','$cajapassword')");

?>

