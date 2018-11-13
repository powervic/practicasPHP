<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Serie numérica</title>
    <style>
        html,body,h1{
            margin: 0;
        }
        h1{
            font-family: sans-serif;
            text-align: center;
            background-color: #e9ecef;
            padding: 30px;
            font-size: 3.5em;
        }
        form{
            max-width: 300px;
            margin: 0 auto;
            display: block;
            margin-top: 50px;
            text-align: center;
        }

    </style>
</head>
<body>
    <h1>Serie numérica</h1>
<form action="ejercicio1.php" method="get">
    <input type="number" placeholder="Escriba el primer número" name="first"> <br>
    <input type="number" placeholder="Escriba el segundo número" name="second"> <br>
    <input type="number" placeholder="Intervalo" name="intervalo"> <br>
    <input type="color" name="color"> <br>
    <button>Realizar</button>
    <br>
    <?php
    if (isset($_GET['first']) && isset($_GET["second"]) && isset($_GET["intervalo"]) && isset($_GET["color"])) {
        // compruebo que existen los valores del array $_get
        $n1 = $_GET["first"];
        $n2 = $_GET["second"];
        $intervalo = $_GET["intervalo"];
        $color = $_GET["color"];
        if ($n1 <= $n2) {
            while ($n1 <= $n2) {
                echo "<p style='color:$color'>$n1</p>";
                $n1 = $n1 + $intervalo;
            }
        } else {
            while ($n2 <= $n1) {
                echo "<p style='color:$color'>$n2</p>";
                $n2 = $n2 + $intervalo;
            }
        }
    }
    ?>

</form>
</body>
</html>