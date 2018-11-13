<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <h1>Escriba los parámetros</h1>
    <form action="cuadrados.php" method="get">
        <label for="color1">Color primer cuadradito</label>
        <input type="color" name="color1">
        <label for="color2">Color segundo cuadradito</label>
        <input type="color" name="color2">
        <label for="filas">Número de filas</label>
        <input type="number" name="filas">
        <label for="columnas">Número de columnas</label>
        <input type="number" name="columnas">
        <button>Enviar</button>

    </form>
</body>
</html>