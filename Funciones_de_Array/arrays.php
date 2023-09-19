<?php

$nombres = ["Dylan", "Joan", "Jose", "Carlos", "Iker"];

echo "Tamaño del array: " . count($nombres);

$cadenaNombres = implode(" ", $nombres);
echo "<br>Cadena con los nombres del array: " . $cadenaNombres;

$nombresBKP = $nombres;

asort($nombres);
echo "<br>Array ordenado alfabeticamente: ";
print_r($nombres);

$rversed = array_reverse($nombresBKP);
echo "<br>Array de nombres en orden inverso al original: ";
print_r($rversed);

echo "<br>Mi nombre está en la posición " . array_search('Dylan', $nombresBKP) . " de el array.<br>";

$alumnos = [
    [0, "Dylan", 19],
    [1, "Joan", 19],
    [2, "Jose", 18],
    [3, "Carlos", 20],
    [4, "Iker", 19]
];
?>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Edad</th>
    </tr>
    <?php
    foreach ($alumnos as $alumno) {
        echo "<tr>";
        echo "<td>" . $alumno[0] . "</td>";
        echo "<td>" . $alumno[1] . "</td>";
        echo "<td>" . $alumno[2] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<?php 
    $nombresAlumnos = array_column($alumnos, 1);
    echo "<br>";
    print_r($nombresAlumnos);

    $numeros = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1];

    echo "<br>La suma de los numeros del array es: " . array_sum($numeros);
?>