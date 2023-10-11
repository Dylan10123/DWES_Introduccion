<?php
require('conexion.php');
session_start();

$errores = [];

function filtrado($datos)
{
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes 
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

if (isset($_POST['submit'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    if (empty($usuario)) {
        $errores[] = "El usuario no puede estar vacío.";
    }
    if (empty($password)) {
        $errores[] = "La contraseña no puede estar vacía.";
    }

    if ($usuario && $password) {
        $sql = "SELECT * FROM users WHERE username = ? AND password = ?";

        $pdoSt = $pdo->prepare($sql);
        $pdoSt->bindValue(1, $usuario);
        $pdoSt->bindValue(2, $password);

        $resultado = $pdoSt->execute();

        $registro = $pdoSt->fetch();

        if ($registro) {
            $_SESSION['username'] = filtrado($usuario);
            header('location: inicio.php');
        } else {
            $errores[] = "El usuario no existe.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>

<body>
    <?php
    if (!empty($errores)) {
        foreach ($errores as $error) {
            echo $error . "<br>";
        }
    }
    ?>

    <form action="login.php" method="POST">

        Usuario: <input type="text" name="usuario"><br>
        Contraseña: <input type="password" name="password"><br>
        <input type="submit" value="Enviar" name="submit">

    </form>
    <a href="http://127.0.0.1:8080/Formularios_y_Sesiones/registro.php">Registrarse</a>
</body>

</html>