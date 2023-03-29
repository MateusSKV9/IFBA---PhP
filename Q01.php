<?php
$n = readline(" ");
    
if($n%2 == 0) {
    $n=$n/2;
} else {
    $n = $n*3+1;
}
echo $n;
?>