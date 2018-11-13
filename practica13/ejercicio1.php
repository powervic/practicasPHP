<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Texto interminable</title>
</head>
<body>
    <h1>TEXTO INTERMINABLE</h1>
    <form action="ejercicio1.php" method="post">
        <input type="text" name="texto">
        <button>Enviar</button>
        <?php
        if (!isset($_POST["texto2"]))
            $text2="";
        else $text2=$_POST["texto2"];
        if (isset($_POST["texto"])){
            $text=$_POST["texto"];
            if (strpos($text,'<')===False && strpos($text, '>')===False){
                $text2=$text2."<p>".$text."</p>";
                echo "<input name='texto2' type='hidden' value='$text2'>";
                echo $text2;
            }
            else $text2="";
        }
        ?>

    </form>


</body>
</html>