<?php
$l1=readline("");
$l2=readline("");
$l3=readline("");

if(($l1+$l2>$l3) && ($l1+$l3>$l2) && ($l2+$l3>$l1)) {
   if($l1==$l2 && $l2==$l3) {
    echo "equilátero";
    } else if (($l1==$l2 && $l2!=$l3) || ($l1==$l3 && $l3!=$l2) || ($l2==$l3 && $l3!=$l1)) {
    echo "isósceles";
    } else {
        echo "escaleno";
    }
} else {
    echo "não é triângulo";
}
?>