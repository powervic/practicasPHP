<?php
    $messi=(int)($_GET["messi"]/2);
    $cr7=(int)($_GET["cr7"]/2);
    $griezmann=(int)($_GET["griezmann"]/2);
    //echo $messi;
    //echo $cr7;
    //echo $griezmann;
    echo "<p>";
    echo "Messi: ";
    for ($i=0;$i<$messi;$i++){
        echo 	"♥";
    }
    echo "</p><br><p>";
    echo "Cristiano Ronaldo: ";
    for ($i=0;$i<$cr7;$i++){
        echo 	"♥";
    }
    echo "</p><br><p>";
    echo "Griezmann: ";
    for ($i=0;$i<$griezmann;$i++){
        echo 	"♥";
    }
echo "</p>";
?>

