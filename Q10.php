<?php
   $data = readline("Digite uma sequência de 6 números representando uma data: ");
   
        $dia=(int)substr($data,0,2);
        $dtmes=(int)substr($data,2,2);
        $ano=(int)substr($data,4,6);
        
       switch($dtmes) {
           case 1:
               $dtmes="janeiro";
               break;
           case 2:
               $dtmes="Fevereiro";
               break;
           case 3:
               $dtmes="Março";
               break;
           case 4:
               $dtmes="Abril";
               break;
           case 5:
               $dtmes="Maio";
               break;
           case 6:
               $dtmes="Junho";
               break;
           case 7:
               $dtmes="Julho";
               break;
           case 8:
               $dtmes="Agosto";
               break;
           case 9:
               $dtmes="Setembro";
               break;
           case 10:
               $dtmes="Outubro";
               break;
           case 11:
               $dtmes="Novembro";
               break;
           case 12:
               $dtmes="Dezembro";
               break;
            default:
                echo "X ";
       }
       if($ano>2022 && $dtmes>0 && $dtmes<=12) {
           echo $dia." de ".$dtmes." de ".$ano;
       } else {
           echo "Data inválida";
       }
       
?>