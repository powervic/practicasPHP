<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla ASCII</title>
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
    </style>
</head>
<body>
    <h1>Tabla ASCII</h1>
    <table>
        <?php

        for ($i=0;$i<8;$i++) {
            echo "<th scope='col'>Código</th>";
            echo "<th scope='col'>Valor</th>";
        }
        for($j=0;$j<16;$j++){
            echo "<tr>";
            for ($i=0;$i<8;$i++){
                echo "<td>".($i+8*$j)."</td><td>".chr($i+8*$j)."</td>";
            }
            echo "</tr>";
        }

        ?>
    </table>
</body>
</html>