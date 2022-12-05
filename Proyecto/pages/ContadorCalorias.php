<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Fast</title>

        <link href="/UadyDAW/Proyecto/style/estiloContador.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script language="javascript" src="/UadyDAW/Proyecto/app/contadorCalorias.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
            <!-- Compiled and minified JavaScript -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
         <script src="/UadyDAW/Proyecto/contadorCalorias.js"></script>

    </head>
    <body>
        <div id = "header">
            <img class="logo" src="/UadyDAW/Proyecto/assets/images/logo1.jpg" >
            <p>FAST</p>
        </div>
        <div id = "navBar">
            <a href="/UadyDAW/Proyecto/index.html">Página principal</a>
            <a href="#">Planeador de dietas</a>
            <a href="#">Mis reportes</a>
            <a href="#">Metas</a>
            <a href="/UadyDAW/Proyecto/pages/loginAccount.php">Iniciar sesión</a>
        </div>
        <a href = "agregarAlimento.php" id = "anadirButton">
            <div id = "anadir">
                <div id = "imagenPlatos">
                    <img src = "/UadyDAW/Proyecto/assets/images/egg.webp"/>
                </div>
                <div id = "textoAlimento">
                    Añadir alimento
                </div>
            </div>
        </a>
        <br><br>
        <div id = "wrapper">
            <div id = "pantallaCalorias">
                <p id = "totalDesayuno">Desayuno: #kCal totales</p>
                <div class = "divCalorias">
                    <table class = "tablaCalorias">
                        <tr>
                            <td class = "nombreAlimento">Leche</td>
                            <td class = "cantidadAlimento">400mL</td>
                            <td class = "caloriasAlimento">0.24kCal</td>
                        </tr>
                        <tr>
                            <td class = "nombreAlimento">Cereal</td>
                            <td class = "cantidadAlimento">60g</td>
                            <td class = "caloriasAlimento">228kCal</td>
                        </tr>
                    </table>
                </div>
                <br>
                <p id = "totalAlmuerzo">Almuerzo: #kCal totales</p>
                <div class = "divCalorias">
                    <table class = "tablaCalorias">
                        <tr>
                            <td class = "nombreAlimento">Chuleta de cerdo</td>
                            <td class = "cantidadAlimento">2pzas</td>
                            <td class = "caloriasAlimento">0.236kCal</td>
                        </tr>
                        <tr>
                            <td class = "nombreAlimento">Frijol</td>
                            <td class = "cantidadAlimento">20g</td>
                            <td class = "caloriasAlimento">0.03kCal</td>
                        </tr>
                        <tr>
                            <td class = "nombreAlimento">Refresco</td>
                            <td class = "cantidadAlimento">600ml</td>
                            <td class = "caloriasAlimento">189kCal</td>
                        </tr>
                        <tr>
                            <td class = "nombreAlimento">prueba para ver que funcione lo de la scroll bar</td>
                            <td class = "cantidadAlimento">prueba</td>
                            <td class = "caloriasAlimento">prueba</td>
                        </tr>
                        <tr>
                            <td class = "nombreAlimento">prueba para ver que funcione lo de la scroll bar</td>
                            <td class = "cantidadAlimento">prueba</td>
                            <td class = "caloriasAlimento">prueba</td>
                        </tr>
                        <tr>
                            <td class = "nombreAlimento">prueba para ver que funcione lo de la scroll bar</td>
                            <td class = "cantidadAlimento">prueba</td>
                            <td class = "caloriasAlimento">prueba</td>
                        </tr>
                        <tr>
                            <td class = "nombreAlimento">prueba para ver que funcione lo de la scroll bar</td>
                            <td class = "cantidadAlimento">prueba</td>
                            <td class = "caloriasAlimento">prueba</td>
                        </tr>
                        <tr>
                            <td class = "nombreAlimento">prueba para ver que funcione lo de la scroll bar</td>
                            <td class = "cantidadAlimento">prueba</td>
                            <td class = "caloriasAlimento">prueba</td>
                        </tr>
                        <tr>
                            <td class = "nombreAlimento">prueba para ver que funcione lo de la scroll bar</td>
                            <td class = "cantidadAlimento">prueba</td>
                            <td class = "caloriasAlimento">prueba</td>
                        </tr>
                        <tr>
                            <td class = "nombreAlimento">prueba para ver que funcione lo de la scroll bar</td>
                            <td class = "cantidadAlimento">prueba</td>
                            <td class = "caloriasAlimento">prueba</td>
                        </tr>
                        <tr>
                            <td class = "nombreAlimento">prueba para ver que funcione lo de la scroll bar</td>
                            <td class = "cantidadAlimento">prueba</td>
                            <td class = "caloriasAlimento">prueba</td>
                        </tr>
                    </table>
                </div>
                <br>
                <p id = "totalCena">Cena: #kCal totales</p>
                <div class = "divCalorias">
                    <table class = "tablaCalorias">
                        <tr>
                            <td class = "nombreAlimento">Huevo</td>
                            <td class = "cantidadAlimento">2pzas</td>
                            <td class = "caloriasAlimento">0.36kCal</td>
                        </tr>
                        <tr>
                            <td class = "nombreAlimento">Agua</td>
                            <td class = "cantidadAlimento">500ml</td>
                            <td class = "caloriasAlimento">0kCal</td>
                        </tr>
                    </table>
                </div>
                <br>
            </div>
            
                <h3 id = "medidor">Total calorias: <span class="total-calorias">0</span></h3>
        
            </div>
        </div>
        <br>
        <div id = "footer"></div>
    </body>
</html>