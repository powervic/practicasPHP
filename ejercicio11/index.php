<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Balón de Oro</title>
    <style>
        *{
            margin-bottom: 0;
            font-family: sans-serif;
        }
        form{
            text-align: center;
            width: 700px;
            height: 300px;
            margin: 0 auto;
            background-color: gray;
            border-radius: 0 0 5px 5px;
        }

        label{
            padding: 20px;
            margin: 0 auto;
            display: inline-block;
        }
        h1{
            width: 700px;
            border-radius: 5px 5px 0 0;
            margin: 0 auto;
            background-color: darkgray;
            color: white;

        }
    </style>
</head>
<body>
<?php
    if (isset($_GET['messi']) and isset($_GET['cr7']) and isset($_GET['griezmann'])) {
        $messi=$_GET["messi"];
        $cr7=$_GET["cr7"];
        $griezmann=$_GET["griezmann"];
        $suma=($messi+$cr7+$griezmann);
        $messiOk = False;
        $cr7Ok = False;
        $griezmannOk = False;



        if($suma<100) {
            echo "No llega a 100";
        }elseif ($suma>100) {
            echo "La suma de porcentajes supera el 100%";

        }//elseif(is_numeric($messi) or is_numeric($cr7) or is_numeric($griezmann)) {
            //echo "Es un valor no numérico";
        //}
        else{
            echo "La suma da 100";
        }

        if ($messi<0 or $messi>100 ) {
            echo "<p class='rojo'>El rango de Messi tiene que ir de 0 a 100</p>";
        } else
            $messiOk = True;

        if ($cr7<0 or $cr7>100 ){
            echo "<p class='rojo'>El rango de Cristiano tiene que ir de 0 a 100</p>";
        }
        else $cr7Ok = True;


        if ($griezmann<0 or $griezmann>100 ){
            echo "<p class='rojo'>El rango de Griezmann tiene que ir de 0 a 100</p>";
        }
        else $griezmannOk = True;


        if ($suma == 100 and $messiOk and $cr7Ok and $griezmannOk) {
            header("location:resultado.php?messi=$messi&cr7=$cr7&griezmann=$griezmann");
        }
    }

?>
<h1>Resultados encuesta de fútbol, balon de oro</h1>
<form action="index.php" method="get">
    <label for="messi">Messi</label>
    <input type="number" name="messi">%<br>
    <label for="cr7">Cristiano Ronaldo</label>
    <input type="number" name="cr7">%<br>
    <label for="griezmann">Griezmann</label>
    <input type="number" name="griezmann">%<br>
    <button>Enviar</button>
</form>
</body>
</html>