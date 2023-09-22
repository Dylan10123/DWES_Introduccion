<?php 
    $modo = $_GET['modo'] ?? ($_COOKIE['modo'] ?? 'claro');
    setcookie('modo', $modo, time() + 30 * 24 * 60 * 60);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODO</title>
    <style>
        .claro{
            background-color: #f0f0f0;
        }
        .oscuro, .oscuro a{
            background-color: #3f3f3f;
            color: white;
        }
    </style>
</head>
<body class="<?= $modo ?>">

        <p><a href="?modo=claro">Modo Claro</a></p>
        <p><a href="?modo=oscuro">Modo Oscuro</a></p>
    
</body>
</html>