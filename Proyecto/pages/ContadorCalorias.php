<!DOCTYPE html>
<html>
<<<<<<< HEAD:Proyecto/pages/ContadorCalorias.html

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Fast</title>

    <link href="/style/estiloContador.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script language="javascript" src="/UadyDAW/Proyecto/app/contadorCalorias.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="/contadorCalorias.js"></script>

</head>

<body>
    
    <nav class="navbar navbar-expand navbar-dark bg-dark mx-auto">
        <div class="navbar-brand mx-3 d-flex align-items-baseline" href="#">
            <img class="rounded float-start" style="width: 50px;" src="/assets/images/logo1.jpg">
            <h1 style="color:rgb(255, 94, 0);">Fast</h1>
        </div>
        <div class="container-fluid ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/pages/ContadorCalorias.html">Contador de
                            calorías</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mis reportes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Metas</a>
                    </li>

                </ul>
                <div>
                    <a class="btn btn-primary my-2" role="button" href="/pages/loginAccount.html">Iniciar Sesión</a>
                    <a class="btn btn-secondary" role="button" href="/pages/registrarAccount.html">Registrarse</a>
                </div>
            </div>
        </div>
    </nav>

    <div id="wrapper" class=" row">
        <div id="medidor" class="col-2">
            <div class="card">
                <a href = "/pages/sesionUsuarios/agregarAlimento.php" id = "anadirButton">
                    <div id = "anadir">
                        <div id = "imagenPlatos">
                            <img src = "/ /assets/images/egg.webp"/>
                        </div>
                        <div id = "textoAlimento">
                            Añadir alimento
                        </div>
                    </div>
                </a>
                
                <div class="card-content">
                    <span class="card-title">Add Meal / Food item</span>
                    <form class="col">
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" placeholder="Add Item" id="item-name">
                                <label for="item-name">Meal</label>

                            </div>
                            <div class="input-field col s6">
                                <input type="number" placeholder="Add Calories" id="item-calories">
                                <label for="item-calories">Calories</label>
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn add-btn bg-success lg mt-2"><i class="fa fa-plus"></i> Add Meal</button>
                        </div>
                    </form>
                </div>
            </div>
            <h3 class="center-align">Total calories: <span class="total-calories">0</span></h3>
            <ul id="item-list" class="collection">
            </ul>
        </div>
        <div id="pantallaCalorias col-2">
            <p id="totalDesayuno">Desayuno: #kCal totales</p>
            <div class="divCalorias">
                <table class="tablaCalorias">
                    <tr>
                        <td class="nombreAlimento">Leche</td>
                        <td class="cantidadAlimento">400mL</td>
                        <td class="caloriasAlimento">0.24kCal</td>
                         <td>
                            <button class="btn update-btn orange mt-2"><i class="fa fa-pencil-square-o"></i></button>
                        </td>
                        <td>
                            <button class="btn delete-btn red  mt-2"><i class="fa fa-remove"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreAlimento">Cereal</td>
                        <td class="cantidadAlimento">60g</td>
                        <td class="caloriasAlimento">228kCal</td>
                         <td>
                            <button class="btn update-btn orange mt-2"><i class="fa fa-pencil-square-o"></i></button>
                        </td>
                        <td>
                            <button class="btn delete-btn red  mt-2"><i class="fa fa-remove"></i></button>
                        </td>
                    </tr>
                </table>
            </div>
            <br>
            <p id="totalAlmuerzo">Almuerzo: #kCal totales</p>
            <div class="divCalorias">
                <table class="tablaCalorias">
                    <tr>
                        <td class="nombreAlimento">Chuleta de cerdo</td>
                        <td class="cantidadAlimento">2pzas</td>
                        <td class="caloriasAlimento">0.236kCal</td>
                         <td>
                            <button class="btn update-btn orange mt-2"><i class="fa fa-pencil-square-o"></i></button>
                        </td>
                        <td>
                            <button class="btn delete-btn red  mt-2"><i class="fa fa-remove"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreAlimento">Frijol</td>
                        <td class="cantidadAlimento">20g</td>
                        <td class="caloriasAlimento">0.03kCal</td>
                         <td>
                            <button class="btn update-btn orange mt-2"><i class="fa fa-pencil-square-o"></i></button>
                        </td>
                        <td>
                            <button class="btn delete-btn red  mt-2"><i class="fa fa-remove"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreAlimento">Refresco</td>
                        <td class="cantidadAlimento">600ml</td>
                        <td class="caloriasAlimento">189kCal</td>
                         <td>
                            <button class="btn update-btn orange mt-2"><i class="fa fa-pencil-square-o"></i></button>
                        </td>
                        <td>
                            <button class="btn delete-btn red  mt-2"><i class="fa fa-remove"></i></button>
                        </td>
                    </tr>
                    
                </table>
            </div>
            <br>
            <p id="totalCena">Cena: #kCal totales</p>
            <div class="divCalorias">
                <table class="tablaCalorias">
                    <tr>
                        <td class="nombreAlimento">Huevo</td>
                        <td class="cantidadAlimento">2pzas</td>
                        <td class="caloriasAlimento">0.36kCal</td>
                        <td>
                            <button class="btn update-btn orange mt-2"><i class="fa fa-pencil-square-o"></i></button>
                        </td>
                        <td>
                            <button class="btn delete-btn red  mt-2"><i class="fa fa-remove"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="nombreAlimento">Agua</td>
                        <td class="cantidadAlimento">500ml</td>
                        <td class="caloriasAlimento">0kCal</td>
                        <td>
                            <button class="btn update-btn orange mt-2"><i class="fa fa-pencil-square-o"></i></button>
                        </td>
                        <td>
                            <button class="btn delete-btn red  mt-2"><i class="fa fa-remove"></i></button>
                        </td>
                    </tr>
                </table>
            </div>
            <br>
        </div>

    </div>
    <br>
    <div id="footer"></div>
</body>

=======
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
>>>>>>> origin:Proyecto/pages/ContadorCalorias.php
</html>