<?php
require('conexion.php');
session_start();

function filtrado($datos)
{
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes 
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

$errores = [];

$usuario = $email = $password = $repPassword = "";

if (isset($_POST['submit'])) {
    $usuario = $_POST['usuario'] ?? "";
    $email = $_POST['email'] ?? "";
    $password = $_POST['password'] ?? "";
    $repPassword = $_POST['repPassword'] ?? "";

    if (empty($usuario)) {
        $errores[] = "El usuario no puede estar vacío.";
    }
    if (empty($password)) {
        $errores[] = "La contraseña no puede estar vacía.";
    }
    if (empty($repPassword)) {
        $errores[] = "Debe confirmar la contraseña.";
    }
    if (empty($email)) {
        $errores[] = "El correo no puede estar vacío.";
    }

    if ($password != $repPassword) {
        $errores[] = "La contraseña no coincide con la confirmación.";
    }

    if ($usuario && $password == $repPassword && $email) {

        try {
            $pdoSt = $pdo->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?);');
            $pdoSt->bindValue(1, $usuario);
            $pdoSt->bindValue(2, $email);
            $pdoSt->bindValue(3, $password);

            $pdoSt->execute();

            $_SESSION['username'] = filtrado($usuario);
            header('location: inicio.php');
        } catch (PDOException $e) {
            $errores[] = "Error al crear el usuario, puede que ya exista.";
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
    <title>Registro</title>
</head>

<body>

    <?php
    if (!empty($errores)) {
        foreach ($errores as $error) {
            echo $error . "<br>";
        }
    }
    ?>
    <form action="" method="POST">

        Nombre: <input type="text" name="usuario" value=<?= $usuario ?>><br>
        Email: <input type="email" name="email" value=<?= $email ?>><br>
        Contraseña: <input type="password" name="password"><br>
        Confirma la contraseña: <input type="password" name="repPassword"><br>
        <input type="submit" value="Enviar" name="submit">

    </form>
    <a href="http://127.0.0.1:8080/Formularios_y_Sesiones/login.php">Inicio de sesión</a>
</body>

</html>