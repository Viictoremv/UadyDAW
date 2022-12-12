<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="/style/estiloAgregar.css" rel="stylesheet" type="text/css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Agregar un alimento</title>

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
                <a class="btn btn-primary" href="cerrarSesion.php">
                    <?php
                    echo $_SESSION["inputEmail"];
                    ?>
                </a>
                    <a class="btn btn-danger" href="cerrarSesion.php">Salir</a>
                </div>
            </div>
        </div>
    </nav>
    <div id="divBuscar">
        <div id="divResultados">
            <form action="" method="post">
                <h5 id="h5Elegir"></h5>
                <label class="labelAgregar" id="labelContiene"></label> <br>
                <label class="labelAgregar" id="labelCantidad"></label>
                <input type="text" name="campoCant" id="campoCant">
                <label class="labelAgregar">Selecciona de que tipo sera el alimento por agregar:</label>
                <select name="tipoAlimento" id="tipoAlimento">
                    <option value="desayuno">Desayuno</option>
                    <option value="almuerzo">Almuerzo</option>
                    <option value="cena">Cena</option>
                </select>
                <br>
                <input type="button" name="agregarContador" id="agregarContador" value="Agregar al contador">
            </form>

        </div>
        <form action="" method="post" autocomplete="off">
            <div>
                <h5 id="headerBuscar">Busque alimentos en nuestra base de datos:</h5>
                <input type="text" name="campo" id="campo">
                <p>¿No encuentras un alimento? <input type="button" name="agregarBd" id="agregarBd" value="Agrégalo" />
                </p>

                <ul id="lista"></ul>
            </div>
        </form>
        <script src="/app/peticionesAlimentos.js"></script>
    </div>
</body>

</html>