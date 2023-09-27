<?php

$idioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

switch ($idioma) {
    case 'en':
        $content = "This page is in English";
        $title = "Change the language of the page";
        break;
    case 'es':
        $content = "Esta página está en Castellano";
        $title = "Cambia el idioma de la página";

        break;
    case 'ca':
        $content = "Aquesta pàgina està en Català";
        $title = "Canvia la llengua de la pàgina";
        break;

    default:
        $content = "This page is in English";
        $title = "Change the language of the page";
        break;
}

?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
</head>

<body>

    <?= $content ?>

</body>

</html>