<?php
$qtd=0;
$s=0;
$num=2;
$den=1;

$n=readline("Digite a quantidade de termos: ");
if($n>=1) {
    while($qtd<$n) {
        $f=($num)/$den;
        $s+=$f;

        $num=$num+$den;
        $den+=1;
        $qtd++;
    }
}
echo $s."\n";
?>