<?php
$N=readline("Digite um número: ");
if($N>5 && $N<2000) {
    for($i=2; $i<=$N; $i+=2) {
        $Q=$i**2;
        echo "$i^$i=$Q \n";
    }
} else {
    echo "Resultado inválido. O número deve ser entre 5 e 2000 \n";
}
?>