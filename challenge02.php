<?php
$qtd=readline("Digite a quantidade de cartas: ");
$vet=[];

for($i=1; $i<=$qtd; $i++) {
    $vet[$i]=$i;
}

for($i=1; $i<=$qtd; $i++) {
    echo $vet[$i]." ";
}
echo "\n";
echo "____________________________________\n";

$sorte=rand(1, $qtd);

$inter=range(1, $qtd);

for($i=0; $i<3; $i++) {
    shuffle($inter);
    for($j = 0; $j<count($inter); $j++) {
            echo "$inter[$j] ";
    }
    echo "\n";
    
    for($k=0; $k<count($inter); $k++) {
        if($inter[$k]==$sorte) {
            $pos=$k+1;
        }
    }
    
    if ($qtd%2==0) {
        if($pos<=($qtd/2)) {
            echo "O número sorteado está na primeira porção!\n";
        } else {
            echo "O número sorteado está na segunda porção!\n";
        }
        echo "\n";
    } else {
        if($pos<=(($qtd/2)+0.5)) {
            echo "O número sorteado está na primeira porção!\n";
        } else {
            echo "O número sorteado está na segunda porção!\n";
        }
        echo "\n";
    }
}
    
$tent=0;
for($l=0; $l < count($inter); $l++) {
    $val=readline("Digite qual o número escolhido: ");
    if($val!=$sorte) {
        $tent++;
    } else {
        $tent++;
        echo "-----------------------------------------\n";
        echo "Achou! O número sorteado era $sorte \n";
        echo "===> Quantidade de tentativas: $tent <===";
        break;
    }
}
?>