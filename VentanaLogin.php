

        <div class="container" id="principal">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Página de Login</h1>
                
                </div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <br><br>
                    <input id="cajanombre" class="form-control" name="usuario_nombre" type="text" placeholder="Usuario" required="required">
                    <br>                                                                                      <!--Podemos llamar a una variable php dentro de un tag html-->
                    <input id="cajapassword" class="form-control" name="contraseña" type="password" placeholder="contraseña" required="required">
                    <br>
                    <button type="submit" class="btn btn-primary btn-block" id="boton1">Primary</button> 
                    <br>
                </div>
                <div class="col-2"></div>        
            </div>      
        </div>
       
<script>
        
        
        $('#boton1').click(function(){
                //Vamos a leer el contenido de la caja y guardarlo en una variable.
                var _cajanombre=$('#cajanombre').val(); 

                var _cajapassword=$('#cajapassword').val(); 
                
                //Cargamos el archivo que vamos a leer para hacer la comprobación.
                $('#principal').load("userlogin.php",{
                    cajanombre : _cajanombre, 
                    cajapassword : _cajapassword
                });
                
            });


</script>

<?php


?>
