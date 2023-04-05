<?php

     function soma($num1, $num2, $res){

        $res = $num1 + $num2;
        return $res;
        
    }function subtracao($num1, $num2, $res){

        $res = $num1 - $num2;
        return $res;

    }function multiplicacao($num1, $num2, $res){

        $res = $num1 * $num2;
        return $res;

    }function divisao($num1, $num2, $res){

        $res = $num1/$num2;
        return $res;
    
    }function imprimir($num1, $num2, $op, $res){
        
        echo "Operacao selecionada: $op <br>";
        echo "Numeros selecionados: $num1 e $num2 <br>";
        soma($res);

    }

    //while($op != 5){

    echo "Bem vindo ao sistema <br> <br>";
    echo "Escolha dois números <br> <br>";
    echo "Escolha a operação: <br> 1 - soma <br> 2 - subtracao <br> 3 - multiplicacao <br> 4 - divisao <br> <br>";
    echo "Pressione 5 para sair do sistema <br> <br>";

    $num1 = 15;
    $num2 = 10;
    $op = 1;
    $res = 0;

    switch($op){
        case 1:
         soma($num1, $num2, $res);
         imprimir($num1, $num2, $op, $res); 
         break;
         
        case 2:
         imprimir($num1, $num2, $op);
         subtracao($num1, $num2, $res);
         break;   

        case 3:
         imprimir($num1, $num2, $op);   
         multiplicacao($num1, $num2, $res);

        case 4:
         imprimir($num1, $num2, $op);   
         divisao($num1, $num2, $res);
         break;   

        case 5:
            echo "Saindo do sistema"; 
            break;

        default: 
         echo "Escolha uma operação";
        }    
    
