<?php
require('conexion.php');

$nombre = $_GET["nombre"] ?? '';
$precio = $_GET["precio"] ?? '';

$pdoSt = $pdo->prepare('INSERT INTO producto (nombre, precio) VALUES (?, ?)');
$pdoSt->bindValue(1, $nombre);
$pdoSt->bindValue(2, $precio);

if ($nombre != '' || $precio != '') {
    $pdoSt->execute();
} else {
    echo "Los parametros de entrada estan vacíos";
}

$pdo = null;
