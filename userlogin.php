<?php

session_start(); // Inicia o continua la sesión del navegador en el servidor PHP

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

$resultadoQuery = $mysqli->query("SELECT * FROM usuarios WHERE nombreUsuario='$cajanombre'");

$numUsuarios = $resultadoQuery->num_rows; //Comprobamos el nº resultados que obtenemos.

if ($numUsuarios > 0) {

    $r = $resultadoQuery->fetch_array();

    if (password_verify($cajapassword, $r['userPass'])) {
        // Guarda el nombre de usuario en la variable de sesión nombreUsuario.
        $_SESSION['nombreUsuario'] = $cajanombre;

        // Guarda el idUsuario de la base de datos en la variable de sesión idUsuario.
        $_SESSION['idUsuario'] = $r['idUsuario'];

        require 'index.php';
    } else {
        require 'VentanaLogin.php';
        echo '<script type="text/javascript">',
        'muestraModal();',
        '</script>'
        ;
 
    }
} else {
    require 'VentanaLogin.php';
     echo '<script type="text/javascript">',
     'muestraModal();',
     '</script>'
     ;
        
}
?>

