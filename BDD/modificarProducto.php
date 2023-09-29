<?php
require('conexion.php');

$id = $_GET["id"] ?? '';
$nombre = $_GET["nombre"] ?? 'Undefined';
$precio = $_GET["precio"] ?? '0';

if ($id != '') {
    $resultado = $pdo->query("SELECT id, nombre, precio FROM producto WHERE id=$id");

    while ($registro = $resultado->fetch()) {
        echo "<h3>Preducto antes de modificar</h3>";
        echo "Nombre: " . $registro['nombre'] . "<br />";
        echo "Precio del producto: " . $registro['precio'] . "€<br>";
    }
} else {
    echo "Introduce el id del producto a buscar";
}

$pdoSt = $pdo->prepare("UPDATE producto SET nombre= ?, precio= ? WHERE id= ?;");
$pdoSt->bindValue(1, $nombre);
$pdoSt->bindValue(2, $precio);
$pdoSt->bindValue(3, $id);

echo "<hr>";

if ($id != '') {
    $pdoSt->execute();
    $resultado = $pdo->query("SELECT id, nombre, precio FROM producto WHERE id=$id");

    while ($registro = $resultado->fetch()) {
        echo "<h3>Preducto despues de modificar</h3>";
        echo "Nombre: " . $registro['nombre'] . "<br />";
        echo "Precio del producto: " . $registro['precio'] . "€";
    }
} else {
    echo "Introduce el id del producto a buscar";
}

$pdo = null;
