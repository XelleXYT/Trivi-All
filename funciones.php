<?php

function conectaBBDD() {

    require('configuracion.php');

    $conecta = new mysqli($servidor, $usuario_mysql, $clave_mysql, $bbdd);

    $conecta->query("SET NAMES utf8");

    return $conecta;
}

?>
