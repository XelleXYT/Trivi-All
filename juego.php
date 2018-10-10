<?php

session_start(); // Inicia o continua la sesión del navegador en el servidor PHP

include ('funciones.php');

$vidas = $_POST['vidas'];
$correctas = $_POST['correctas'];
$tema = $_POST['tema'];

$mysqli = conectaBBDD();
$resultadoQuery = $mysqli->query("SELECT * FROM preguntas WHERE tema = '$tema' ORDER BY numero");
$numPreguntas = $resultadoQuery->num_rows;


$listaPreguntas = array();

for ($i = 0; $i < $numPreguntas; $i++) {
    $rAux = $resultadoQuery->fetch_array();
    $listaPreguntas[$i][0] = $rAux['numero'];
    $listaPreguntas[$i][1] = $rAux['enunciado'];
    $listaPreguntas[$i][2] = $rAux['r1'];
    $listaPreguntas[$i][3] = $rAux['r2'];
    $listaPreguntas[$i][4] = $rAux['r3'];
    $listaPreguntas[$i][5] = $rAux['r4'];
    $listaPreguntas[$i][6] = $rAux['correcta'];
}

$preguntaActual = rand(0, $numPreguntas - 1);
?>

<div>
    <p><a class="btn btn-block btn-dark disabled"><b>TRIVI-ALL - <?php echo $tema; ?></b></a></p>
    <p><a id="enunciado" class=""></a></p>
    <p><a id="r1" class="btn btn-block btn-primary"></a></p>
    <p><a id="r2" class="btn btn-block btn-primary"></a></p>
    <p><a id="r3" class="btn btn-block btn-primary"></a></p>
    <p><a id="r4" class="btn btn-block btn-primary"></a></p>
    <p><a class="btn btn-block btn-warning" onclick="volver();">Volver al Menú</a></p>

</div>

<script>
    function volver() {
        $('#principal').load("app.php");
    }

    var listaPreguntas = <?php echo json_encode($listaPreguntas); ?>;
    var numeroPregunta = Math.floor(Math.random() * listaPreguntas.length);
    sigue();
    // console.log(listaPreguntas[numeroPregunta]);

    function sigue() {
        numeroPregunta = Math.floor(Math.random() * listaPreguntas.length);
        $('#enunciado').text(listaPreguntas[numeroPregunta][1]);
        $('#r1').text(listaPreguntas[numeroPregunta][2]).click(function () {
            sigue();
            stopImmediatePropagation();
        });
        $('#r2').text(listaPreguntas[numeroPregunta][3]).click(function () {
            sigue();
            stopImmediatePropagation();
        });
        $('#r3').text(listaPreguntas[numeroPregunta][4]).click(function () {
            sigue();
            stopImmediatePropagation();
        });
        $('#r4').text(listaPreguntas[numeroPregunta][5]).click(function () {
            sigue();
            stopImmediatePropagation();
        });
    }

</script>