<?php
    $p1="Telefonou para a vítima - ";
    $p2="Esteve no loal do crime - ";
    $p3="Mora perto da vítima - ";
    $p4="Devia para vítima - ";
    $p5="Já trabalhou com a vítima - ";
    
    echo "Digite 'Sim' ou 'Não' a cada pergunta\n\n";
    
    $resSim=0;
    for($qtd=1; $qtd<=5; $qtd++) {
        if($qtd==1) {
            echo $qtd.") ".$p1;
            $res = readline(" ");
        }
        if($qtd==2) {
            echo $qtd.") ".$p2;
            $res = readline(" ");
        }
        if($qtd==3) {
            echo $qtd.") ".$p3;
            $res = readline(" ");
        }
        if($qtd==4) {
            echo $qtd.") ".$p4;
            $res = readline(" ");
        }
        if($qtd==5) {
            echo $qtd.") ".$p5;
            $res = readline(" ");
        }
        if($res=="Sim" || $res=="sim" || $res=="SIM") {
            $resSim=$resSim+1; 
        }
    }    
    echo "\n\n"."===> ";
    switch($resSim) {
        case 2: 
            echo "Suspeita";
            break;
        case 3:
            case 4:
                echo "Cúmplice";
            break;
        case 5: 
            echo "Assassino";
            break;
        default:
            echo "Inocente";
    }
?>