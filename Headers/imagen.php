<?php

$letMeIn = $_GET['letMeIn'] ?? 0;
$img = $_GET['img'] ?? "si2";

if ($letMeIn == 0) {
    http_response_code(401);
    header('Content-type: image/png');
    imagepng(imagecreatefrompng("/home/alumno/projects/Carpeta-Oculta/no.png"));
} else if ($letMeIn == 1) {
    if (file_exists("/home/alumno/projects/Carpeta-Oculta/$img.jpg")) {
        header('Content-type: image/png');
        imagepng(imagecreatefromjpeg("/home/alumno/projects/Carpeta-Oculta/$img.jpg"));
    } else {
        http_response_code(404);
        header('Content-type: image/png');
        imagepng(imagecreatefrompng("/home/alumno/projects/Carpeta-Oculta/404.png"));
    }
} else {
    http_response_code(401);
    header('Content-type: image/png');
    imagepng(imagecreatefrompng("/home/alumno/projects/Carpeta-Oculta/no.png"));
}

?>