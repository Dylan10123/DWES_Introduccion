<?php

$buscador = $_SERVER['HTTP_USER_AGENT'];

if (strpos($buscador, "Firefox")) {
    $content = "<h1> Estas en Firefox </h1>";
} else {
    $content= "<h1> Debes entrar con Firefox </h1>";
    echo '<script language="javascript">alert("Debes entrar con el navegador Firefox");</script>';
}

?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Navegador PHP</title>
</head>

<body>

    <?= $content ?>

</body>

</html>