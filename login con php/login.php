<?php
error_reporting(0);
require 'cn/cnx.php';
session_start();

    $msgError = $_SESSION['msgError'];
    $visible = 'visually-hidden';

    if($msgError) {
        $visible = '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Login</title>
</head>
<body>

    <img class="imagen" src="img/login.jpg">
    <div class="boxblue">
        <div class="contenedor">
        <form class="formulario" action="validacion.php" method="POST">
            <div class="campo">
                <label for="correo" class="label">Email</label>
                <input class="input input-img" type="email" placeholder="   email@servicio.com" name="correo" >
            </div>

            <div class="campo">
                <label class="label">Contraseña</label>
                <input class="input" type="password" name="password">
            </div>
            <div class="campo-recuerda">
                <label class="label-recuerda">
                    <input class="checkbox-recuerda" type="checkbox"/>Recuerdame
                </label> <a class="clave-olvidada" href="#">¿Olvidaste La Contraseña?</a>
            </div>
            <input type="hidden" name="enviado" value="1">
            <button type="submit" name="submit" class="btn btn-primary btn-lg btnIniciar">Iniciar Sesion</button>
        </form>
        </div>
    </div>
</body>
</html>