<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Capa aleatoria</title>
</head>
<body>
<?php
$x =mt_rand(0,100);
$y= mt_rand(0,100);
?>
    <div style="width: 50px; height: 50px; background-color: red; position: absolute; left:<?=$x?>%; top:<?=$y?>% "></div>
</body>
</html>