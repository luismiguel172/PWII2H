<?php

    $num1 = 15;
    $num2 = 10;
    $op = 1;
    $res = 0;

    echo "Escolha dois números <br>";
    echo "Escolha a operação: <br> 1 - soma<br> 2 - subtracao <br> 3 - multiplicacao <br> 4 - divisao <br> <br>";

    function soma($num1, $num2, $res){

        $res = $num1 + $num2;
        echo "Resultado: $res";
        
    }function subtracao($num1, $num2, $res){

        $res = $num1 - $num2;
        echo "Resultado: $res";

    }function multiplicacao($num1, $num2, $res){

        $res = $num1 * $num2;
        echo "Resultado: $res";

    }function divisao($num1, $num2, $res){

        $res = $num1/$num2;
        echo "Resultado: $res";
}

    switch($op){
        case 1:
         echo "Operacao selecionada: soma <br>";
         echo "Numeros selecionados: $num1 e $num2 <br>";

         soma($num1, $num2, $res);
         break;
         
        case 2: 
         echo "Operacao selecionada: subtracao <br>";
         echo "Numeros selecionados: $num1 e $num2 <br>";
         subtracao($num1, $num2, $res);
         break;   

        case 3:
         echo "Operacao selecionada: multiplicacao <br>";
         echo "Numeros selecionados: $num1 e $num2 <br>";
         multiplicacao($num1, $num2, $res);

        case 4: 
         echo "Operacao selecionada: divisao <br>";
         echo "Numeros selecionados: $num1 e $num2 <br>";
         divisao($num1, $num2, $res);
         break;   

        default: 
         echo "Escolha uma operação";
        }    

