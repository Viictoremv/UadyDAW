<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contador de calorias";

// Create connection
$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conexion) {
die("Connection failed: " . mysqli_connect_error());
}

$nombre = $_POST["nombre"];
$cantidad = $_POST["cantidad"];
$unidad = $_POST["unidad"];
$calorias = $_POST["calorias"];

$consultaExistencia = "SELECT COUNT(*) as contar FROM alimentos WHERE NomAlimento = '$nombre'";

$query = mysqli_query($conexion, $consultaExistencia);
$array = mysqli_fetch_array($query);

if ($array['contar'] > 0) {
    echo json_encode(false, JSON_UNESCAPED_UNICODE);
} else {
    $consulta = "INSERT INTO alimentos VALUES ('$nombre','$cantidad','$unidad','$calorias')";
    if (mysqli_query($conexion, $consulta)) {
        echo json_encode(true, JSON_UNESCAPED_UNICODE);
    } else {
        echo json_encode(true, JSON_UNESCAPED_UNICODE);
    }
}

?>