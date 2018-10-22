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

<!--modal, obtenido de la pg de bootstrap.-->

  <div id="myModal" class="modal" tabindex="-1" role="dialog" style="color:darkgray;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>La contraseña es incorrecta. Asegúrate de haber escrito la misma contraseña en ambos apartados y de no haber escrito espacios, acentos u otro tipo de caracteres que no sean letras y números.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
    
      $('#boton1').click(function(){
          var _cajanombre=$('#cajanombre').val();
          var _cajapassword=$('#cajapassword').val();
          var _cajapassword2=$('#cajapassword2').val();

         if(_cajapassword == _cajapassword2){ //esto funciona, el modal no.
            $('body').load("userRegistro.php", {
                 cajanombre: _cajanombre,
                 cajapassword: _cajapassword,
             });
         }else{
           muestraModal();
         }
          
      });
      
      function muestraModal(){
          $('#myModal').modal('show');
          
      };


</script>
   