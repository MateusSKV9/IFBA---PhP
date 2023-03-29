<?php
$height=readline("");
echo "______________________________\n";

for($i=1; $i<=$height; $i++) {
    for($k=$height; $k>=$i; $k--){
        echo " ";
    }
    for($j=1; $j<=2*($i-1); $j++) {
        echo "*";
    }
    echo "*\n";
}

?>