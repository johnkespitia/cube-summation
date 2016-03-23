<html>
    <head>
        <title>Cube Summation</title>
        <script src="js/jquery.js" ></script>
        <script src="js/custom.js" ></script>
    </head>
    <body>
        <fieldset class="formulario">
            <legend>Parámetros</legend>
            <label>
                Casos de prueba (T): 
                <input type="number" name="t" id="t" onblur="validateT('alert')" />
            </label>
            <br/>
            <label>
                Dimensión de la matriz (N): 
                <input type="number" name="n" id="n" onblur="validateN('alert')" />
            </label>
            <br/>
            <label>
                Número de operaciones (M): 
                <input type="number" name="m" id="m" />
            </label>
            <br/>
            <input type="button" value="Enviar" onclick="setParams()" id ="but1" />
            <input type="button" value="Reiniciar Test" onclick="reiniciarTest()" id ="but2" />
        </fieldset>
        <fieldset id="logger" class="logger">
            <legend>Log de Procesos</legend>
            
        </fieldset>
    </body>
</html>