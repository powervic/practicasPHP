<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Random Image</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>

        <h1>IMÁGENES ALEATORIAS</h1>
        <?php
        $random = mt_rand(1,2);
        ?>
            <img src="img/<?php echo $random ?>.jpg" alt="foto">
    </body>
</html>

