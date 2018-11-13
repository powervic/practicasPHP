<?php
$numero=$_GET["number"];
$i=0;
$suma=0;
while ($i<$numero){
    if ($i%2==0){
        //echo $i;
        $suma=$suma+$i;
    }
    $i++;
}
echo "<p>La suma es <strong>$suma</strong></p>";
echo "<a href='ejercicio4.php'>Volver al formulario</a>"
?>