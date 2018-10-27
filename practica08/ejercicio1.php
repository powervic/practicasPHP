<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fondo aleatorio</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<?php
$x=mt_rand(0,255);
$y=mt_rand(0,255);
$z=mt_rand(0,255);

?>
<body style="background-color: rgb(<?=$x?>,<?=$y?>,<?=$z?>);">

</body>
</html>