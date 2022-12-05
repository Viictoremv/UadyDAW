<?php

require 'databaseAlimentos.php';

$con = new Database();
$pdo = $con->conectar();

$campo = $_POST["campo"];

$sql = "SELECT NomAlimento, CantAlimento, UnidadAlimento, calAlimento FROM alimentos WHERE NomAlimento LIKE ? ORDER BY NomAlimento ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->execute([$campo . '%']);

$html = "";

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    
	$html .= "<li onclick=\"mostrar('" . $row["NomAlimento"] . "," . $row["CantAlimento"] . "," . $row["UnidadAlimento"] . "," . $row["calAlimento"] . "')\">" . $row["NomAlimento"] . " - " . $row["CantAlimento"] . $row["UnidadAlimento"] . " - " . $row["calAlimento"] . "Cal" . "</li>";
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);