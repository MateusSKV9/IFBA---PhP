<?php
$n=readline("Digite um número: ");
$soma=0;

for($i=1; $i<$n; $i++) {
    if($n%$i==0) {
        $soma+=$i;
    }
}
if($soma==$n) {
    echo "Este é um número perfeito.";
} else {
    echo "Este não é um número perfeito.";
}
?>