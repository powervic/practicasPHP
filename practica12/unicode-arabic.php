<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Valores unicode</title>
</head>
<body>
    <h1>Código <?=$_GET["num"]?></h1>
            <?php
            if(isset($_GET["num"])){
                $num=hexdec($_GET["num"]);
                if($num>=1536 && $num<=1791){
                    echo "<table>
                            <tr>
                                <td>Anterior</td>
                                <td id=\"mid\">Actual</td>
                                <td>Siguiente</td>
                            </tr>
                            <tr>";
                    echo "<td>&#".($num-1).";</td>";
                    echo "<td>&#".$num.";</td>";
                    echo "<td>&#".($num+1).";</td>";
                    echo "</tr>
                        </table>";
                }
                else echo "<p>Ese código no es de la zona Árabe</p>";
                echo "<a href='ejercicio2.php'>Probar otro código</a>";
            } else header('location:ejercicio2.php');
            ?>

</body>
</html>