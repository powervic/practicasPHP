<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        main{
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            display: block;
        }
        div{
            display: inline-block;
            float: left;
            margin: 0;
        <?php
        if (isset($_GET["columnas"]) && isset($_GET["filas"])){
            echo "width:".(100/$_GET["columnas"])."%;";
            echo "height:".(100/$_GET["filas"])."%;";
        }
 ?>
        }
        div:nth-of-type(even){
        <?php
        if (isset($_GET["color1"]) && isset($_GET["color2"])){
            echo "background-color:".$_GET['color2'];
        }
 ?>
        }
        div:nth-of-type(odd){
        <?php
    if (isset($_GET["color1"]) && isset($_GET["color2"])){
        echo "background-color:".$_GET['color1'];
    }
?>
        }
    </style>
</head>
<body>
<main>
    <?php
    if (isset($_GET["color1"]) && isset($_GET["color2"]) && isset($_GET["filas"]) && isset($_GET["columnas"]) ){
        $color1=$_GET["color1"];
        $color2=$_GET["color2"];
        $filas=$_GET["filas"];
        $col=$_GET["columnas"];
        if ($col>0 && $col<100){
            if ($filas%2==0 && $col%2!==0){
                for ($i=0;$i<$filas;$i++){
                    for ($j=0;$j<$col;$j++){
                        echo "<div>&nbsp;</div>";
                    }
                }
            }
        }
    }
    ?>
</main>
</body>
</html>