<?php
do {
    echo "Menu de Opções\n1. Novo salário\n2. Férias\n3. Décimo Terceiro\n4. Sair\n";
       $op = readline("");
    if($op==4){
        echo "Programa fechado.";
        break;
    }else {
        $sal = readline("Digite o seu salário: ");
        switch($op) {
            case 1:
                if($sal <= 1212) {
                    $NovoSal = (115/100)*$sal;
                } else if($sal > 1212 && $sal <= 3050) {
                    $NovoSal = (110/100)*$sal;
                } else {
                    $NovoSal = (105/100)*$sal;
                }
                echo "$NovoSal\n";
                break;
            case 2:
                $ferias = $sal+(1/3)*$sal;
                echo "$ferias\n";
                break;
            case 3:
                $mes = readline("Digite a quantidade de meses de trabalho: ");
                $decimo = ($sal*$mes)/12;
                echo round($decimo, 2)."\n";
                break;
           default:
                echo "Opção inválida.\n";
        }
        echo "\n";
    }
}while($op!=4);
?>