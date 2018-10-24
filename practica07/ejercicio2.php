<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculador de salario</title>
    <link rel="stylesheet" href="css/estilo2.css">
    <?php
    if (!empty($_GET)){
        echo "<style>form{display: none;}</style>";
    }
    ?>
</head>
<body>
    <h1>CÁLCULO DE SALARIO</h1>
    <?php
    if (!empty($_GET)) { // SI $_GET CONTIENE DATOS (CADENAS VACÍAS O NO)
        if ($_GET["nombre"]!="" && $_GET["apellidos"]!="" && $_GET["salario"]!="" && $_GET["edad"]!=""){
            // QUE TODOS LOS DATOS HAN SIDO RELLENADOS
            $nombre=$_GET["nombre"];
            $apellidos=$_GET["apellidos"];
            $salario=$_GET["salario"];
            $edad=$_GET["edad"];
            if ($salario>=1000 && $salario<=2000){ // 1000 < SALARIO < 2000
                if ($edad>45){ // EDAD > 45
                    $salario=$salario+$salario*0.03;
                }
                else $salario=$salario+$salario*0.1; // EDAD < 45
            }
            elseif ($salario<1000){ // SALARIO < 1000
                if ($edad<30){ // EDAD MENOR QUE 30
                    $salario=1100;
                }
                elseif ($edad>=30 && $edad<=45){ // EDAD ENTRE 30 Y 45
                    $salario=$salario+$salario*0.03;

                }
                else { // RESTO DE EDADES
                    $salario=$salario+$salario*0.15;
                }
            }
            echo "<p>$nombre $apellidos, tu salario es de $salario €<br><a href='ejercicio2.php'>Volver al formulario</a></p>";
        }

        else echo "<p id='rojo'>Falta de rellenar algunos datos</p>";
    }
    ?>
    <form action=" " method="get">
        <label for="nombre">Nombre</label> <br>
        <input type="text" name="nombre"><br>
        <label for="apellidos">Apellidos</label> <br>
        <input type="text" name="apellidos"><br>
        <label for="salario">Salario</label> <br>
        <input type="number" name="salario"><br>
        <label for="edad">Edad</label> <br>
        <input type="number" name="edad"><br>
        <br>
        <button>CALCULAR</button>
    </form>
</body>
</html>



