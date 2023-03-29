<?php

$i=readline("Digite um número: ");
$r=readline("Digite a razão da PG: ");

for($cont=0; $cont<=9; $cont++) {
    $vet[$cont]=$i*$r;
}

for($cont=0; $cont<=9; $cont++) {
    echo $vet[$cont]." ";
}
?>