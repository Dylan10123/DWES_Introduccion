<?php 

    $dejameEntrar = $_GET['dejameEntrar'] ?? 0;

    if ($dejameEntrar == 1) {
        echo "<h1>Bienvenido</h1>";
    } else if ($dejameEntrar == 0) {
        header("Location: login.php");
        exit();
    } else {
        echo "<h1>404</h1>";
        echo "<hr>";
        echo "Parametro de entrada no reconocido";
    }
    

?>