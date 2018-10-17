<?php

include('funciones.php');

$mysqli=conectaBBDD();

$cajanombre=$_POST['cajanombre'];
$cajapassword=$_POST['cajapassword'];

echo $cajanombre;
echo $cajapassword;

$resultadoQuery = $mysqli->query("INSERT INTO usuarios(nombreUsuario,userPass) VALUES ('$cajanombre','$cajapassword')");

?>

