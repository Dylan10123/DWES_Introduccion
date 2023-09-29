<?php
require('conexion.php');

$id = $_GET["id"] ?? '';

if ($id != '') {
    $resultado = $pdo->query("SELECT id, nombre, precio FROM producto WHERE id=$id");

    while ($registro = $resultado->fetch()){
    echo "Producto con id -> ".$registro['id'].": ";
    echo $registro['nombre']."<br />";
    echo "Precio del producto: ".$registro['precio']."€<br />";
}
} else {
    echo "Introduce el id del producto a buscar";
}

$pdo = null;
