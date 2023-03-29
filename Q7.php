<?php
$qtd=0;
do {
    $a=readline("Digite A: ");
    $b=readline("Digite B: ");
    if($a> 0 && $b>0) {
        $qtd++;
        
        for($a; $a <= $b; $a++) {
            echo $a."\n";
        }
        echo "__________________\n";
    } else {
        echo "Valor inválido! Digite números positivos.\n";
    }
} while($qtd<5);
?>