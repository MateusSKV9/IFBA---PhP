<?php 
$E=21;
$D=22;
$orientação=true;

if ($orientação == false) {
    echo "Não deu!";
} else {
    if($E <= ($D-3)) {
        echo "Muito bem! Apresenta antes do Natal!";
    } else if($E <= ($D-1)) {
        echo "Ops, acho que alguém vai ter que refazer! \n";
        $D+=2;
        if($D<=24) {
            echo "TCC Apresentado!";
        } else {
            echo "Fail! Então é nataaaaal!";
        }
    }
}
?>