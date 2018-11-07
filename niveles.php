<?php
session_start(); // Inicia o continua la sesión del navegador en el servidor PHP

include ('funciones.php');
$_SESSION['tema'] = $_POST['tema'];
?>

<div>
    <p><a class="btn btn-block btn-dark disabled">Selecciona el nivel de dificultad</a></p>
    <p><a id="b1" class="btn btn-block" style="background-color: #43FF43;" onclick="eligeDiff('1')">Facil</a></p>
    <p><a id="b2" class="btn btn-block" style="background-color: #FFFF43" onclick="eligeDiff('2')">Intermedio</a></p>
    <p><a id="b3" class="btn btn-block" style="background-color: #FF4343" onclick="eligeDiff('3')">Dificil</a></p>



</div>
<div class="row">
    <div class="col-12">
        <p><a class="btn btn-warning" onclick="volver();">Volver al Menú</a></p>
    </div>
</div>

<script>
    function volver() {
        $('body').load("index.php");
    }
</script>
<script>
    var _vidas = 3;
    var _correctas = 0;
    function eligeDiff(_diff) {
        switch (_diff) {
            case '1':
                $("#menu").load("juego.php", {vidas: _vidas, correctas: _correctas, dificultad: "1"});
                break;
            case '2':
                $("#menu").load("juego.php", {vidas: _vidas, correctas: _correctas, dificultad: "2"});
                break;
            case '3':
                $("#menu").load("juego.php", {vidas: _vidas, correctas: _correctas, dificultad: "3"});
                break;
        }
    }

</script>