<?php 

    $cadena = $_GET['cadena'] ?? "";
    $prefijo = $_GET['prefijo'] ?? -1;
    $url = 'http://username:password@hostname:9090/path?arg=value';


    $cadena = trim($cadena, "/");
    $longitud = strlen($cadena);
    $mayus = strtoupper($cadena);
    $minus = strtolower($cadena);
    $pos = strpos($cadena, $prefijo);
    $numA = substr_count($cadena, 'a');
    $primeraA = stripos($cadena, "a");
    if ($primeraA >= 1) {
        $primeraA++;
    }
    $remplazar = str_ireplace("o", "0", $cadena);

    echo "Cadena: $cadena";
    echo "<br>Longitud de la cadena: $longitud";
    echo "<br>Cadena en mayusculas: $mayus";
    echo "<br>Cadena en minusculas: $minus";
    
    if ($prefijo != -1) {
        if ($pos === false) {
            echo "<br>La cadena NO empieza por el prefijo ($prefijo)";
        } else {
            echo "<br>La palabra empieza por el prefijo especificado ($prefijo)";
        }
    } else {
        echo "<br> No se ha especificado el prefijo";
    }

    echo "<br>Cantidad de 'a' o 'A' en la cadena: $numA";
    if ($primeraA == 0) {
        echo "<br>No existe ninguna 'a' o 'A'";
    } else {
        echo "<br>La primera 'a' esta en la posición $primeraA";
    }

    echo "<br>Remplazando 'a' por 'o': $remplazar";

    echo "<br><br>URL: $url <br>";
    echo "<br>&nbsp; Utiliza el protocolo: " . parse_url($url, PHP_URL_SCHEME);
    echo "<br>&nbsp; Nombre de usuario: " . parse_url($url, PHP_URL_USER);
    echo "<br>&nbsp; Path de la url: " . parse_url($url, PHP_URL_PATH);
    echo "<br>&nbsp; Querystring de la url: " . parse_url($url, PHP_URL_QUERY);
?>