<?php
$productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];

$mostrar = $_GET['producto'] ?? "";

$prod = ""; 

if (array_key_exists($mostrar, $productos)) {
    $prod = $productos[$mostrar];
} elseif ($mostrar == "") {
    $prod = "";
} else {
    http_response_code(404);
    $prod = "¡Producto no encontrado!";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>

<body>

    <form id="idForm">
        <label>Producto a mostrar:</label><br>
        <input type="text" id="producto" name="producto" placeholder="Inserta el numero de producto..." />
        <input type="submit" value="Enviar ID" />
    </form>

    <h1><?= $prod ?></h1>

</body>

</html>