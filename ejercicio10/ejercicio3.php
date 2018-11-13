<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla Unicode Paginada</title>
    <style>
        *{
            font-family: sans-serif;
            margin: 0 auto;
        }
        table{
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        tr{
            height: 50px;
        }
        th{
            background-color: black;
            color: white;
        }
        tr:nth-of-type(odd){
            background-color: rgba(0,0,0,.075);
        }
        td:nth-of-type(odd){
            background-color: rgba(0,0,0,.075);
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
<?php
if (!isset($_GET["p"]) or $_GET["p"]<1){
    $p = 1;
} else
    $p = $_GET["p"];
$ant=$p-1;
$sig=$p+1;
?>
<h1><?php if ($p>1){echo "<a href='ejercicio3.php?p=$ant'>&lt;</a>";}?>
    Tabla Unicode Paginada
    <?="<a href='ejercicio3.php?p=$sig'>&gt;</a>";?></h1>
<table>
    <?php
    for ($i=0;$i<5;$i++) {
        echo "<th scope='col'>Código</th>";
        echo "<th scope='col'>Valor</th>";
    }
    for($j=0;$j<100;$j++){
        echo "<tr>";
        for ($i=1;$i<=5;$i++)
            echo "<td>".(($i+5*$j)+(500*$ant))."</td><td>&#".(($i+5*$j)+(500*$ant)).";</td>"; //cod y valor
        echo "</tr>";
    }

    ?>
</table>
</body>
</html>