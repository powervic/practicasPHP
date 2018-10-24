<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="css/estilo2.css">
</head>
<body>
    <h1>COMPROBACIÓN NUMÉRICA</h1>
    <form action=" " method="get">
        <label>Escribe un número</label> <br>
        <input type="number"<?php
        if (!empty($_GET)==""){
            $numero =$_GET["number"];

        }
        else echo "<p id='rojo'>No se ha enviado un número</p>"

        ?>>
            <br>
        <button>Calcular</button>
    </form>
</body>
</html>