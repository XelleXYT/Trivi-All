

<div class="container" id="principal">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Página de Login</h1>

        </div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <br/><br/>
            <input id="cajanombre" class="form-control" name="usuario_nombre" type="text" placeholder="Usuario" required="required">
            <br/>                                                                                      <!--Podemos llamar a una variable php dentro de un tag html-->
            <input id="cajapassword" class="form-control" name="contraseña" type="password" placeholder="contraseña" required="required">
            <br/>
            <button type="submit" class="btn btn-primary btn-block" id="boton1">Login</button> 
            <br/>
        </div>
        <div class="col-2"></div>        
    </div>      
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
                <p>Nombre de usuario o contraseña incorrectos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>


    $('#boton1').click(function () {
        //Vamos a leer el contenido de la caja y guardarlo en una variable.
        var _cajanombre = $('#cajanombre').val();

        var _cajapassword = $('#cajapassword').val();


        //Cargamos el archivo que vamos a leer para hacer la comprobación.
        $('body').load("userlogin.php", {
            cajanombre: _cajanombre,
            cajapassword: _cajapassword,

        });

        // Asigna valora la variable declarada en index.php (Por Marta)
        sesion = true;

    });
    
    function muestraModal() {
        $('#myModal').modal('show');

    }
    ;


</script>


