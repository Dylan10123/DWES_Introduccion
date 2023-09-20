<?php 
    $array = ["a", "bb", "ccc", "dddd"];

    function sacarLongitud($cadena) {
        return strlen($cadena);
    }

    $array2 = array_map('sacarLongitud', $array);

    $masAlto = max($array2);
    $masBajo = min($array2);

    echo "Cadena mas larga: " . $masAlto . "<br>";
    echo "Cadena mas corta: " . $masBajo . "<br>";
?>