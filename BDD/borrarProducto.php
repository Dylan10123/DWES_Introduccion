<?php
require('conexion.php');

$id = $_GET["id"] ?? '';

$pdoSt = $pdo->prepare('DELETE FROM producto WHERE id= ?;');
$pdoSt->bindValue(1, $id);

if ($id != '') {
    $pdoSt->execute();
} else {
    echo "Debes introducir un id.";
}

$pdo = null;
