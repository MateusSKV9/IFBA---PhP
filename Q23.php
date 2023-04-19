$soma=0;
for($i=0; $i<=19; $i++) {
    $d=2**$i;
    $num=1+2*$i;
    $soma+=($num/$d);
}
echo $soma;
?>