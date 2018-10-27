<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Comprobacion</title>
    <link rel="stylesheet" href="css/estilo3.css">
</head>
<body>
    <h1>COMPROBACIÓN NUMÉRICA</h1>
<?php
$number=$_GET["number"];
if (is_numeric($number)){
    if ($number==(int)$number){

        echo "<p class='verde'>Es un número y no tiene decimales</p>";
        echo "<a href='ejercicio3.php'>Volver al formulario</a>";
    }
    else {
        echo "<p class='verde'>Es un número y tiene decimales</p>";
        echo "<a href='ejercicio3.php'>Volver al formulario</a>";
    };
}
else {
    echo "<p class='rojo'>No se ha enviado un número</p>";
    echo "<a href='ejercicio3.php'>Volver al formulario</a>";
}

?>
</body>
</html>