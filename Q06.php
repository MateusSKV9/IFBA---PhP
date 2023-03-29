<?php
    $cod = readline("");
    
    switch($cod) {
        case 61: 
            echo "O DDD é Brasília";
            break;
        case 71:
            echo "O DDD é Salvador";
            break;
        case 11:
            echo "O DDD é São Paulo";
            break;
        case 21:
            echo "O DDD é Rio de Janeiro";
            break;
        case 32:
            echo "O DDD é Juiz de Fora";
            break;
        case 19:
            echo "O DDD é Campinas";
            break;
            break;
        case 27:
            echo "O DDD é Vitória";
            break;
        case 31:
            echo "O DDD é Belo Horizonte";
            break;
        default:
            echo "DDD não cadastrado";
    }
?>