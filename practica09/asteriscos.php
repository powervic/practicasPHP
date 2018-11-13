<?php
$number=$_GET["number"];
$i=0;
echo "<a href='ejercicio1.php'>Volver a escribir asteriscos</a> <br><br>";
if ($number=="") echo "<p>No se ha enviado nada</p>";
else{
    while ($number>=$i) {
        echo "*";
        $i++;
    }
}
?>