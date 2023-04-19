<?php
$x=readline("Digite o início do intervalo: ");
$y=readline("Digite o final do intervalo: ");
$soma=0;

for($i=($x+1); $i<$y; $i++) {
    if($i%2!=0) {
        $soma+=$i;
    }
}
echo $soma;
?>