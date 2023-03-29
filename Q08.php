<?php
echo "(1)Cachorro Qunete\n(2)X-Salada\n(3)X-Bacon\n(4)Torrada Simples\n(5)Refrigerante\n\n";

$cod = readline("Digite um código: ");
$qtd = readline("Digite a quantidade: ");

    switch($cod) {
        case 1: 
            $total = 4*$qtd;
            break;
        case 2: 
            $total = 4.5*$qtd;
            break;
        case 3: 
            $total = 5*$qtd;
            break;
        case 4: 
            $total = 2*$qtd;
            break;
        case 5: 
            $total = 1.5*$qtd;
            break;
        default:
            echo "Código inválido";
    }
echo "Total: R$ $total";
?>