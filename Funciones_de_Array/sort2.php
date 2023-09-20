<?php 
    $temp = "21 30 28 15 18 12 18 23 25 20 17 13 40";

    /*Divido la cadena y la meto en un array que luego ordenaré*/
    $array = explode(" ", $temp);
    sort($array);

    /*Calculo de la media de los numeros del array */
    $media = array_sum($array) / count($array);
    echo "La media de temperaturas es: " . number_format($media, 1) .  "º<br>";
    
    /*Saco los 5 numeros más altos y los 5 mas bajos*/
    $tempMAX = array_slice($array, -5, 5);
    $tempMIN = array_slice($array, 0, 5);

    /*Imprimo los arrays*/
    print_r($tempMAX);
    echo "<br>";
    print_r($tempMIN);
?>