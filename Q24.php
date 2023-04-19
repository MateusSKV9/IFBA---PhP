<?php
$n=readline("Digite a quantidade de linhas: ");

echo "+  ";
for($l=$n-1; $l>0; $l--) {
    echo "*  ";
}
echo "\n";
for($i=0; $i<($n-1); $i++) {
    echo "*  ";
    for($j=0; $j<$i; $j++) {
        echo "*  ";
    }
    for($k=0; $k<1; $k++) {
        echo "+  ";
    }
    for($l=$n-2; $l>$i; $l--) {
        echo "*  ";
    }
    echo "\n";
}
?>