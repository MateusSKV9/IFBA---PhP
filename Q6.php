<?php
$soma=0;
$somaP=0;
$somaI=0;
$qtd=0;
$qtdP=0;
$qtdI=0;

do{
    $v=readline("Digite um número: ");
    
    $qtd++;
    $soma+=$v;
    if($v%2==0) {
        $qtdP++;
        $somaP+=$v;

    }else {
        $qtdI++;
        $somaI+=$v;
        $mediaI=$somaI/$qtdI;
    }
} while($v!=0);
echo "_____________\n";
echo "Soma= $soma \n";
echo "Quantiadade= ".($qtd-1)."\n";
echo "Média= ".($soma/($qtd-1))."\n";
echo "Média dos pares= ".($somaP/($qtdP-1))."\n";
echo "Média dos ímpares= $mediaI \n";
echo "Porcentagem dos ímpares= ".($qtdI/($qtd-1))*100;
?>