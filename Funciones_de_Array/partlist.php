<?php 
    $frase = ["Seguro", "que", "apruebo", "esta", "asignatura"];

    $longitud = count($frase);

    for ($i=1; $i < $longitud ; $i++) { 
        $resultado = [implode(" ", array_slice($frase, 0, $i)), implode(" ", array_slice($frase, $i, $longitud))];
        echo "<br>";
        print_r($resultado);
    }
?>