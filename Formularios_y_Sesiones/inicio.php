<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hola <?= $_SESSION['username'] ?><br>
    <a href="http://127.0.0.1:8080/Formularios_y_Sesiones/logout.php">Cerrar sesión</a>
</body>
</html>