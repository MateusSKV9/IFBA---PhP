<?php
for($i=0; $i<=11; $i++) {
    $vet[$i]=readline("Digite um número: ");
}
$x=readline("Digite a posição X(0 a 11): ");
$y=readline("Digite a posição Y(0 a 11): ");
$a=$x;
$b=$y;
$c=$vet[$x];
$vet[$x]=$vet[$b];
$vet[$y]=$c;

for($i=0; $i<=11; $i++) {
    echo $vet[$i]." ";
}
?>