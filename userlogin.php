<?php

include('funciones.php');

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

$mysqli = conectaBBDD();

$cajanombre = limpiaPalabra($_POST['cajanombre']);
$cajapassword = limpiaPalabra($_POST['cajapassword']);

//query

$resultadoQuery = $mysqli->query("SELECT * FROM usuarios WHERE nombreUsuario='$cajanombre' AND userPass='$cajapassword'");

$numUsuarios = $resultadoQuery->num_rows; //Comprobamos el nº resultados que obtenemos.

if ($numUsuarios > 0) {
    require 'index.php';
} else {
    require 'error.php';
}
?>

