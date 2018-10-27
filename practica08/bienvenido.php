<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/welcome.css.0">
</head>
<body>
<?php
    $usuario=$_GET["user"];
    $contraseña=$_GET["passwd"];
    if ($usuario=="pedro" && $contraseña=="12345" || $usuario=="ana" && $contraseña=="54321" || $usuario=="marta" && $contraseña=="55555" ||
        $usuario=="luis" && $contraseña=="11111")
        echo "<h1>¡BIENVENIDOS!</h1>";
    else echo "<h1>USUARIO Y CONTRASEÑA INCORRECTOS</h1>"
?>
</body>
</html>