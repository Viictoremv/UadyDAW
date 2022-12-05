
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar un alimento</title>

    <link href="/UadyDAW/Proyecto/style/estiloAgregar.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="header">
        <img class="logo" src="/UadyDAW/Proyecto/assets/images/logo1.jpg">
        <p>FAST</p>
    </div>
    <div id="navBar">
        <p>Agrega un alimento</p>
    </div>
    <div id = "divBuscar">
        <div id = "divResultados">
            
            <form action=""  method="post">
                <h5 id = "h5Elegir"></h5>
                <label class = "labelAgregar" id = "labelContiene"></label> <br>
                <label class = "labelAgregar" id = "labelCantidad"></label>
                <input type = "text"  name = "campoCant" id = "campoCant">
                <label class = "labelAgregar">Selecciona de que tipo sera el alimento por agregar:</label>
                <select name="tipoAlimento" id="tipoAlimento">
                    <option value="desayuno">Desayuno</option>
                    <option value="almuerzo">Almuerzo</option>
                    <option value="cena">Cena</option>
                </select>
                <br>
                <input type="button" name = "agregarContador" id = "agregarContador" value="Agregar al contador">
            </form>
            
        </div>
        <form action="" method="post" autocomplete="off">
		    <div>
                <h5 id="headerBuscar">Busque alimentos en nuestra base de datos:</h5>
			    <input type="text" name="campo" id="campo">
                <p>¿No encuentras un alimento? <input type="button" name="agregarBd" id="agregarBd" value="Agrégalo" /></p>

			    <ul id="lista"></ul>
		    </div>
	    </form>
        <script src="/uadyDAW/Proyecto/app/peticionesAlimentos.js"></script>
    </div>
</body>

</html>