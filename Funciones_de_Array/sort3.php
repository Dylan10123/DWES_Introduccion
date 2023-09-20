<?php 
    $array = ["measas" => "blancas", "teclados" => "negros", "pared" => "verde", "cartel" => "rojo"];

    function comp($a, $b){
        if (strlen($a) != strlen($b)) {
            return (strlen($a) < strlen($b)) ? -1 : 1;
        } else {
            return 0;
        }
    }

    uasort($array, 'comp');
    print_r($array);
?>