<?php
$numberFila=$_GET["number_fila"];
$numberCol=$_GET["number_col"];
$i=1;

echo "<table border='1'>";
while ($numberFila>=$i){
    echo "<tr>";
    $j=1;
    while($numberCol>=$j){
            echo "<td>&nbsp;</td>";
            $j++;
        }
    echo "</tr>";
    $i++;
}
echo "</table>";
?>