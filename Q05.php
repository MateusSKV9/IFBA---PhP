<?php
$esc=readline("faça uma escolha: (0)pedra,(1)tesoura,(2)papel: ");
$sorteio=rand(0, 2);

if($esc==0 && $sorteio==1 || $esc==1 && $sorteio==2 || $esc==2 && $sorteio==0) {
    echo "vitória!";
} else if ($esc==$sorteio) {
    echo "empate!";
} else {
    echo "derrota!";
}
?>