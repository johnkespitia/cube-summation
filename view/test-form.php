<h2>Caso de prueba #<?php echo $_GET['tryNo'];?></h2>
    <label>
        <h5>Update</h5>
        X: <input type="number" name="ux" id="ux"  />
        Y: <input type="number" name="uy" id="uy"  />
        Z: <input type="number" name="uz" id="uz"  />
        W: <input type="number" name="uw" id="uw"  />
    </label>
    <br/>
    <label>
        <h5>Query</h5>
        X1: <input type="number" name="x1" id="x1" />
        Y1: <input type="number" name="y1" id="y1" />
        Z1: <input type="number" name="z1" id="z1" />
        <br/>
        X2: <input type="number" name="x2" id="x2" />
        Y2: <input type="number" name="y2" id="y2" />
        Z2: <input type="number" name="z2" id="z2" />
    </label>
    <br/>
    <input type="button" value="Enviar" onclick="operate()" id ="but2" />
    <div id="result_case_<?php echo $_GET['tryNo'];?>"></div>
