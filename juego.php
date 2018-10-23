<?php
session_start(); // Inicia o continua la sesión del navegador en el servidor PHP

include ('funciones.php');

$vidas = $_POST['vidas'];
$correctas = $_POST['correctas'];
$tema = $_SESSION['tema'];
$dificultad = $_POST['dificultad'];

$mysqli = conectaBBDD();
$resultadoQuery = $mysqli->query("SELECT * FROM preguntas WHERE tema = '$tema' AND nivel = $dificultad ORDER BY numero");
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
    <p><a id="enunciado" class=""></a></p>
    <p><a id="respuesta" class="" style="display:none;"></a></p> <!--Vamos a guardar en una caja invisible el valor de la respuesta correcta-->
    <p><a id="r1" class="botonRespuesta btn btn-block btn-primary" value="1"></a></p> <!--Value le va a dar un valor que vamos a utilizar para saber cual es la respuesta correcta-->
    <p><a id="r2" class="botonRespuesta btn btn-block btn-primary" value="2"></a></p>
    <p><a id="r3" class="botonRespuesta btn btn-block btn-primary" value="3"></a></p>
    <p><a id="r4" class="botonRespuesta btn btn-block btn-primary" value="4"></a></p>

    
    
</div>
<div class="row">
  <div class="col-4">
      <p><a class="btn btn-primary disabled">Vidas <br/><span id="lives">3</span>/3</a></p>
  </div>
  <div class="col-4">
      <p><a id="respuestas" class="btn btn-primary disabled">Correctas <br/> <span id="correctas">0</span>/10</a></p>   
  </div>
  <div class="col-4">
      <p><a class="btn btn-warning" onclick="volver();">Volver <br/> al Menú</a></p>
  </div>
</div>

<script>
    function volver() {
        $('body').load("index.php");
    }

    var listaPreguntas = <?php echo json_encode($listaPreguntas); ?>;
    var numeroPregunta = Math.floor(Math.random() * listaPreguntas.length);
    var arrayAuxiliar=[numeroPregunta];
    
    var correctas=<?php echo $correctas?>; //tomamos los valores del PHP.
    var vidas=<?php echo $vidas?>;
    
    var contador = 0;
    sigue();
    // console.log(listaPreguntas[numeroPregunta]);

   //La función escribe los datos sobre los "labels".
    function rellenaDatos(){
         if (contador < 10 && vidas>0) {
            numeroPregunta = Math.floor(Math.random() * listaPreguntas.length);
            console.log(numeroPregunta);
            console.log(arrayAuxiliar.includes(numeroPregunta));

             if(!arrayAuxiliar.includes(numeroPregunta)){
               $('#enunciado').text(listaPreguntas[numeroPregunta][1]);
               $('#respuesta').text(listaPreguntas[numeroPregunta][6]);
               $('#r1').text(listaPreguntas[numeroPregunta][2])
             
               $('#r2').text(listaPreguntas[numeroPregunta][3])
             
               $('#r3').text(listaPreguntas[numeroPregunta][4])
            
               $('#r4').text(listaPreguntas[numeroPregunta][5])
             }else{
               numeroPregunta = Math.floor(Math.random() * listaPreguntas.length); 
             }
            
            contador++;
            arrayAuxiliar.push(numeroPregunta);
            console.log(arrayAuxiliar);

        }
    }
    
    //La función ejecuta rellenaDatos, estableciendo un único click para que no sea redundante.
    
    function sigue() {
       
        rellenaDatos();
        //Cuando se hace click sobre cualquiera de los botones;
        $( ".botonRespuesta" ).click(function() {
           //console.log($(this).attr("value"));
           
           var valorDelBoton = $(this).attr("value");  //This es el último evento de click. Lee el valor del atributo "value".
           var valorDeRespuesta = $('#respuesta').text(); //Leemos el párrafo respuesta y obtenemos su valor.
           if(contador<10 && vidas>0){
             if(valorDelBoton == valorDeRespuesta){ //En caso de que ambos valores sean iguales, suma uno a correctas y actualiza el texto.
               correctas=correctas+1;
                $('#correctas').text( correctas);
               rellenaDatos(); //Se ejecuta de nuevo la función "rellenaDatos" de manera limpia y efectiva.
             }else{
                vidas=vidas-1;
                $('#lives').text(vidas);
                rellenaDatos();
             }
       }
               
        });

    }
    
  
    

</script>