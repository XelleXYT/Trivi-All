<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trivi-All</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row" style="border:1px solid black; background-color: blue; color: white; height: 15vw">
                <div class="col-12 text-center">
                    <h2 class="text-center">Encabezado y logo</h2>
                </div>
            </div>
            <div class="row" style="border:1px solid black;">
                <div class="col-10" style="border:1px solid black;"></div>
                <div class="col-2" style="border:1px solid black;">
                    <form action="login.php">
                        <br/>
                        <button id="button1" class="btn btn-primary btn-block" type="submit">Login</button><br/>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-3" style="border:1px solid black;"></div>
                <div class="col-6" style="border:1px solid black;">
                    <br/>
                    <form action="preguntas.php">
                         <!-- 
                            Colores:
                             Fondo:     #5592FF
                             Filosofia: #AE3ADB
                             Inglés:    #7DFF00
                             Economía:  #FF0000
                             Historia:  #EDE200
                             Lengua:    #FF8600
                          -->
                        <button id="buttonFilosofia" class="btn btn-primary btn-block" type="submit">Filosofia</button><br/>
                        <button id="buttonIngles" class="btn btn-primary btn-block" type="submit">Inglés</button><br/>
                        <button id="buttonEconomia" class="btn btn-primary btn-block" type="submit">Economía</button><br/>
                        <button id="buttonLengua" class="btn btn-primary btn-block" type="submit">Lengua</button><br/>
                        <button id="buttonHistoria" class="btn btn-primary btn-block" type="submit">Historia</button><br/>
                    </form>
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
</html>
