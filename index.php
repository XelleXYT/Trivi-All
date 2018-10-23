<!DOCTYPE html>
<!--
index de proyecto TRIVI-ALL
-->
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <title>Trivi-All</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color: #E4EDFF">
        <div class="container" id="principal" style="background-color: #5591FF">
            <div class="row" style="border:1px solid black; background-color: blue; color: white; height: 15vw">
                <div class="col-12 text-center">
                    <h2 class="text-center">Encabezado y logo</h2>
                </div>
            </div>
            <div class="row" style="border:1px solid black;">
                <div class="col-8" style="border:1px solid black;"></div>
                <div class="col-2" style="border:1px solid black;">
                    <br/>
                    <button id="buttonRegistro" class="btn btn-primary btn-block" type="submit">Registro</button>
                    <br/>
                </div>
                <div class="col-2" style="border:1px solid black;">
                    <br/>
                    <button id="buttonLogin" class="btn btn-primary btn-block" type="submit">Login</button>
                    <button id="buttonProfile" class="btn btn-primary btn-block" type="submit"><?php echo $_SESSION['nombreUsuario'] ?></button>
                    <br/>

                </div>
            </div>
            <div class="row">
                <div class="col-3" style="border:1px solid black;"></div>
                <div class="col-md-6" style="border:1px solid black; color: #000;" id="menu">
                    <br/>
                    <!-- 
                       Colores:
                        Fondo:     #5592FF
                        Filosofia: #AE3ADB
                        Inglés:    #7DFF00
                        Economía:  #FF0000
                        Historia:  #EDE200
                        Lengua:    #FF8600
                    -->
                    <p><a id="buttonFilosofia" class="btn btn-block" style="background-color: #B84EFF;"onclick="sigue('1')">Filosofía</a></p>
                    <p><a id="buttonIngles" class="btn btn-block" style="background-color: #43FF43" onclick="sigue('2')">Inglés</a></p>
                    <p><a id="buttonEconomia" class="btn btn-block" style="background-color: #FF4343" onclick="sigue('3')">Economía</a></p>
                    <p><a id="buttonLengua" class="btn btn-block" style="background-color: #FFFF43" onclick="sigue('4')">Lengua</a></p>
                    <p><a id="buttonHistoria" class="btn btn-block" style="background-color: #FF9843" onclick="sigue('5')">Historia</a></p>
                </div>
                <div class="col-3" style="border:1px solid black;"></div>
            </div>
            <div class="row" style="border:1px solid black; height: 70px;">
                <div class="col-12"></div>
            </div>
        </div>

        <?php
        // put your code here
        ?>
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="../InicioSesion/js/bootstrap.min.js" type="text/javascript"></script>

    <script>
                        $('#buttonProfile').hide();

                        $('#buttonLogin').click(function () {

                            $('#principal').load("VentanaLogin.php");

                        });
                        
                        $('#buttonRegistro').click(function(){
                           $('#principal').load("NewUser.php"); 
                        });

                        var sesion; // Declaracion de variable la cual recibirá un valor en VentanaLogin.php

                        if (sesion) {
                            $('#buttonLogin').remove();
                            $('#buttonRegistro').remove();
                            $('#buttonProfile').show();
                        }

    </script>
    <script>

        function sigue(_subtema) {
            switch (_subtema) {
                case '1':
                    $("#menu").load("niveles.php", {tema: "Filosofia"});
                    break;
                case '2':
                    $("#menu").load("niveles.php", {tema: "Ingles"});
                    break;
                case '3':
                    $("#menu").load("niveles.php", {tema: "Economia"});
                    break;
                case '4':
                    $("#menu").load("niveles.php", {tema: "Lengua"});
                    break;
                case '5':
                    $("#menu").load("niveles.php", {tema: "Historia"});
                    break;
            }
        }

    </script>
</html>
