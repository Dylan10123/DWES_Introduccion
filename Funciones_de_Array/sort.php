<?php 
    $edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");

    /*Ordena un array asociativo por la CLAVE de forma ascendente */
    ksort($edades);
    echo "<h3>Orden por nombre ASC</h3>\n";
    foreach ($edades as $key => $val) {
        echo "$key tiene $val años<br>\n";
    }

    /*Ordena un array asociativo por el VALOR de forma ascendente */
    asort($edades);
    echo "<h3>Orden por edad ASC</h3>\n";
    foreach ($edades as $key => $val) {
        echo "$key tiene $val años<br>\n";
    }

    /*Ordena un array asociativo por la CLAVE de forma descendente */
    krsort($edades);
    echo "<h3>Orden por nombre DESC</h3>\n";
    foreach ($edades as $key => $val) {
        echo "$key tiene $val años<br>\n";
    }

    /*Ordena un array asociativo por el VALOR de forma descendente */
    arsort($edades);
    echo "<h3>Orden por edad DESC</h3>\n";
    foreach ($edades as $key => $val) {
        echo "$key tiene $val años<br>\n";
    }
?>