<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuadros Aleatorios</title>
    <style>
        body{
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        div{
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
<?php
    for($i=0;$i<2000;$i++) {
        $x=mt_rand(0,255);
        $y=mt_rand(0,255);
        $z=mt_rand(0,255);
        $left=mt_rand(0,100);
        $top=mt_rand(0,100);
        echo "<div style='background-color:rgb($x,$y,$z); position: absolute; left: $left%; top: $top%;'>&nbsp;</div>";
    }
?>
</body>
</html>