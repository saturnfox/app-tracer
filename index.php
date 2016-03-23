<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2" />
    <title>CentralTrace</title>
    <meta charset="utf-8">
        <link rel="stylesheet" href="js/jQueryMobile/demos/css/themes/default/jquery.mobile-1.4.5.min.css" />
       	<link rel="stylesheet" href="js/jQueryMobile/demos/_assets/css/jqm-demos.css"> 
 	<script src="js/jQueryMobile/demos/js/jquery.js"></script>
	<script src="js/jQueryMobile/demos/_assets/js/index.js"></script>
	<script src="js/jQueryMobile/demos/js/jquery.mobile-1.4.5.min.js"></script>       

<script language=Javascript>
$(document).on("pagecreate", "#inicio", function(){
    $("#labelrecursivo1").hide();
    
    $("input[name='estado']").on("change", function() {
        if ($("input[name='estado']:checked").val() == 'abierto')
            $("#labelrecursivo1").show();
        else
            $("#labelrecursivo1").hide();
    });
});        
</script> 

<script language=Javascript>
$(document).on("pagecreate", "#inicio", function(){
    $("#labelrecursivo2").hide();
    
    $("input[name='mensaje']").on("change", function() {
        if ($("input[name='mensaje']:checked").val() == 'si')
            $("#labelrecursivo2").show();
        else
            $("#labelrecursivo2").hide();
    });
});        
</script> 

    </head>
<body>
    <div data-role="page" id="inicio" >
        <div data-role="header">
            <h1>Ilicitos</h1>
        </div>
        <a href="#pantalla2" data-role="button">JOSE MIGUEL CARRERA 4202 FRENTE</a>
    </div>
    <div data-role="page" id="pantalla2">
            <div data-role="header">
                <h1>JOSE MIGUEL CARRERA 4202 FRENTE</h1>
            </div>
            <a href="#" data-rel="back" data-role="button" > Regresar </a>
            
    


<div role="main" class="ui-content">
    
    <legend><h3>Local abierto o cerrado:</h3></legend>
    <fieldset id="NumTel" data-role="controlgroup">
        <input type="radio" name="estado" id="radio-choice-v-6c" value="abierto" />
        <label for="radio-choice-v-6c">Abierto</label>
        <input type="radio" name="estado" id="radio-choice-v-6a" value="cerrado"/>
        <label for="radio-choice-v-6a">Cerrado</label>
    </fieldset>
        
    	<div id="labelrecursivo1">
            <!--
            <input name="autrenumero" id="autrenumero" type="number" value="" placeholder="Numéro" data-mini="true" data-clear-btn="true" />
            -->
            
            <!-- ¿Posee Flange exterior? -->
            <legend><h3>¿Posee Flange exterior?</h3></legend>
            <fieldset id="NumTel2" data-role="controlgroup">
                <input type="radio" name="flange" id="flange-v-6c" value="si" />
                <label for="flange-v-6c">Si</label>
                <input type="radio" name="flange" id="flange-v-6a" value="no"/>
                <label for="flange-v-6a">No</label>
            </fieldset>
                
            
            <!-- ¿Tiene adhesivo en el mesón? -->
            <legend><h3>¿Tiene adhesivo en el mesón?</h3></legend>
            <fieldset id="NumTel3" data-role="controlgroup">
                <input type="radio" name="adhesivo" id="adhesivo-v-6c" value="si" />
                <label for="adhesivo-v-6c">Si</label>
                <input type="radio" name="adhesivo" id="adhesivo-v-6a" value="no"/>
                <label for="adhesivo-v-6a">No</label>
            </fieldset>
            
            <!-- ¿Tiene Apoya boletas? -->    
            <legend><h3>¿Tiene Apoya boletas?</h3></legend>
            <fieldset id="NumTel4" data-role="controlgroup">
                <input type="radio" name="apoya" id="apoya-v-6c" value="si" />
                <label for="apoya-v-6c">Si</label>
                <input type="radio" name="apoya" id="apoya-v-6a" value="no"/>
                <label for="apoya-v-6a">No</label>
            </fieldset>     
            
            <!-- ¿Tiene Apoya boletas? -->    
            <legend><h3>¿Contesto bien el mensaje?</h3></legend>
            <fieldset id="NumTel5" data-role="controlgroup">
                <input type="radio" name="mensaje" id="mensaje-v-6c" value="si" />
                <label for="mensaje-v-6c">Si</label>
                <input type="radio" name="mensaje" id="mensaje-v-6a" value="no"/>
                <label for="mensaje-v-6a">No</label>
            </fieldset>                      
            
            
            
                    
        
            <div id="labelrecursivo2">
            <legend><h3>Numero de Gift Card</h3></legend>
			<input name="autrenumero" id="autrenumero" type="number" value="" placeholder="Número" data-mini="true" data-clear-btn="true" /> 

            <legend><h3>Nombre Persona Ganadora</h3></legend>
			<input name="autrenumero" id="autrenumero" type="text" value="" placeholder="Nombre" data-mini="true" data-clear-btn="true" /> 

            <legend><h3>Rut Persona Ganadora</h3></legend>
			<input name="autrenumero" id="autrenumero" type="number" value="" placeholder="Rut" data-mini="true" data-clear-btn="true" /> 

        	</div>
    
    
    	</div>

</div>    
            
        <ul data-role="listview" >
            <li><a href="#inventario1"><h1>Ingreso Inventario</h1></a></li>
        </ul><br><br><br>
        <div data-role="footer">
            <div data-role="navbar">
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#pantalla2">Guardar</a></li>
                    <li><a href="#pantalla3">Otros</a></li>
                </ul>
            </div><!– /navbar –>
        </div>
    </div>
    
    
    <div data-role="page" id="inventario1">
        <h2> Lucky Strike Blue / Azul Formato 20</h2>
        <center><img src="LuckyBlue.png" alt="LuckyBlue" height="250" width="250"></center>
        <h3>¿Cuantos hay?</h3>
        <input name="autrenumero" id="autrenumero" type="number" value="" placeholder="Cantidad" data-mini="true" data-clear-btn="true" /> 
        <br>
        <ul data-role="listview" >
        <li><a href="#inventario2"><h1>Siguiente Producto</h1></a></li>
        </ul>    
        <br>
        <a href="#" data-rel="back" data-role="button" > Regresar </a>
        
                    <div data-role="navbar">
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#pantalla2">Guardar</a></li>
                    <li><a href="#pantalla3">Otros</a></li>
                </ul>
            </div><!– /navbar –>
    </div>
    
        <div data-role="page" id="inventario2">
        <h2> Lucky Strike Blue / Azul Formato 20</h2>
        <center><img src="LuckyBlue.png" alt="LuckyBlue" height="250" width="250"></center>
        <h3>¿Cuantos hay?</h3>
        <input name="autrenumero" id="autrenumero" type="number" value="" placeholder="Cantidad" data-mini="true" data-clear-btn="true" /> 
        <br>
        <ul data-role="listview" >
        <li><a href="#inventario3"><h1>Siguiente Producto</h1></a></li>
        </ul>
        <br>
        <a href="#" data-rel="back" data-role="button" > Regresar </a>
        
                    <div data-role="navbar">
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#pantalla2">Guardar</a></li>
                    <li><a href="#pantalla3">Otros</a></li>
                </ul>
            </div><!– /navbar –>
    </div>
    
 
</body>
</html>