<?php
for($i=0; $i<=4; $i++) {
    $vet1[$i]=readline("Digite o valor do vetor 1: ");
}
echo "________________________\n";
for($i=0; $i<=4; $i++) {
    $vet2[$i]=readline("Digite o valor do vetor 2: ");
}

for($ini=0; $ini<=9; $ini++) {
    if($ini<=4) {
        $vetR[$ini]=$vet1[$ini];
    } else {
        $vetR[$ini]=$vet2[$ini-5];
    }
}
echo "_______________________\n";
echo "vU=[ ";
for($ini=0; $ini<=9; $ini++) {
    echo $vetR[$ini]." ";
}
echo "]";
echo "\n_______________________\n";
echo "vl=[ ";
for($ini=0;$ini<=9; $ini++) {
    if ($ini<=4) {
        echo $vetR[$ini]." ";
        echo $vetR[$ini+5]." ";
    }
}
echo "]";
echo "\n_______________________\n";
for($ini=0;$ini<=4; $ini++) {
        $vetRR[$ini]=$vet1[$ini]*$vet2[$ini]+$vet2[$ini]**($vet1[$ini]+2);
}
echo "vR=[ ";
for($ini=0;$ini<=4; $ini++) {
        echo $vetRR[$ini]." ";
}
echo "]";
?>