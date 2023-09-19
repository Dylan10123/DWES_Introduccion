<h1>Recorrer array</h1>
<hr>
<?php
    $meteors = array(
        'Hoba',
        'Cape York',
        'Campo del Cielo',
        'Canyon Diablo'
    );

    print_r($meteors);
    echo "<br>";

    foreach($meteors as $meteor){
        echo $meteor . "<br>";
    }
?>   

<br>
<h1>Recorrer array asociativo</h1>
<hr>

<?php
    $meteors = array(
        'Hoba' => 60000000,
        'Cape York' => 58200000,
        'Campo del Cielo' => 50000000,
        'Canyon Diablo' => 30000000
    );

    print_r($meteors);
    echo "<hr>";

    foreach($meteors as $meteor){
        echo $meteor . "<br>";
    }
?>   

<br>
<h1>Plantillas</h1>

<?php
//Toda la lógica del programa va en esta parte

  $meteors = array(
        'Hoba' => 60000000,
        'Cape York' => 58200000,
        'Campo del Cielo' => 50000000,
        'Canyon Diablo' => 30000000
    );
// Y ahora va el HTML junto con la impresión de variables
?>   
<hr>

<?php foreach($meteors as $nombre => $peso):?>
       <?=$nombre?> pesa <?=$peso?> gramos <br>
<?php endforeach ?>

