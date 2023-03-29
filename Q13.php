<?php

for($i=0; $i<=4; $i++) {
    $M[$i]=readline("Digite o valor do vetor M: ");
} 

for($i=0; $i<=4; $i++) {
    $N[$i]=readline("Digite o valor do vetor N: ");
}
$v=0;
$j=0;
echo "__________________\n";
for($i=0; $i<=9; $i++) {
    if($i%2==0) {
        $O[$i]=$M[$v];
        $v++;
    } else {
        $O[$i]=$N[$j];
        $j++;
    }
}
for($i=0; $i<=9; $i++) {
    echo "O[$i]=".$O[$i]."\n";
}
?>