<?php

    echo "Escolha a o número para aumentar o valor do produto com base na porcentagem: <br>";
    echo "1 - 10% <br>";
    echo "3 - 25% <br>";
    echo "4 - 30% <br>";
    echo "8 - 50% <br>";

 $Valorp = 10;
 $nume = 2;
 $Novov = 0;

    echo "Escolheu o número $nume <br>";

 switch($nume){
    case 1:
       $Novov = $Valorp * 1.1;
       print ("O novo valor é igual a $Novov");
       break;
    case 3:
        $Novov = $Valorp * 1.25;
        echo "O novo valor é igual a $Novov";
        break;
    case 4:
        $Novov = $Valorp * 1.3;
        echo "O novo valor é igual a $Novov";
        break;
    case 8:
        $Novov = $Valorp * 1.5;
        echo "O novo valor é igual a $Novov";
        break;
    default:
       echo "Escolha uma opção válida";
  }

 ?>