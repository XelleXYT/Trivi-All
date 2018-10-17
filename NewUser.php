<?php


?>

<div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <br/><br/>
            <p>Nombre de Usuario<input id="cajanombre" class="" name="usuario_nombre" type="text" placeholder="Usuario" required="required"></p>
            <br/>                                                                                      <!--Podemos llamar a una variable php dentro de un tag html-->
            <p>Contraseña<input id="cajapassword" class="" name="contraseña" type="password" placeholder="contraseña" required="required"></p>
            <br/>
            <p>Contraseña<input id="cajapassword2" class="" name="contraseña" type="password" placeholder="contraseña" required="required"></p>
            <br/>
            <button type="submit" class="btn btn-primary btn-block" id="boton1">Login</button> 
            <br/>
        </div>
        <div class="col-2"></div>        
    </div>   

<script>
    
      $('#boton1').click(function(){
          var _cajanombre=$('#cajanombre').val();
          var _cajapassword=$('#cajapassword').val();
          var _cajapassword2=$('#cajapassword2').val();
          
          console.log(_cajanombre);
          
         $('body').load("userRegistro.php", {
             cajanombre: _cajanombre,
             cajapassword: _cajapassword,
             cajapassword2: _cajapassword2
         });
          
      });


</script>
   