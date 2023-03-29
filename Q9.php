<?php
$qtdP=0;
$qtdI=0;
$somaP=0;
$somaI=0;
do{
    $x=readline("Digite número: ");
    
    if($x%2==0) {
        $qtdP++;
        $somaP+=$x;
    } else {
        $qtdI++;
        $somaI+=$x;
    }
}while($x>0);
echo "__________________________\n";
echo "Média dos pares: ".($somaP/$qtdP)."\n";
echo "Média dos ímpares: ".($somaI/$qtdI)."\n";
?>