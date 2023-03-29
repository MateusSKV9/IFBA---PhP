<?php
$a=readline("");
$b=readline("");
$c=readline("");

$delta=($b*$b)-4*$a*$c;
$x1=(-$b+sqrt($delta))/(2*$a);
$x2=(-$b-sqrt($delta))/(2*$a);

if($delta<0) {
    echo “Essa equação não possui raízes reais”;
} else if($delta==0) {
    echo "Essa equação possui uma única raiz real.";
} else {
    echo "essa equação possui duas raízes reais. \n x1 = $x1 \n x2 = $x2";
}
?>