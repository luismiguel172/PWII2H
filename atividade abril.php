<?php


    function imprimir($num1, $num2, $op){
            
        echo "Operacao selecionada: $op <br>";
        echo "Numeros selecionados: $num1 e $num2 <br>";
        if($op == 1){
            echo "Resultado é: ".soma($num1, $num2);
        }else if($op == 2){
            echo "Resultado é: ".subtracao($num1, $num2);
        }else if($op == 3){
            echo "Resultado é: ".multiplicacao($num1, $num2);
        }else if($op == 4){
            echo "Resultado é: ".divisao($num1, $num2);
        }

    }function soma($num1, $num2){
    
        $res = $num1 + $num2;
        return $res;
        
    }function subtracao($num1, $num2){

        $res = $num1 - $num2;
        return $res;

    }function multiplicacao($num1, $num2){

        $res = $num1 * $num2;
        return $res;

    }function divisao($num1, $num2){

        $res = $num1/$num2;
        return $res;
    
    }

    //while($op != 5){

    echo "Bem vindo ao sistema <br> <br>";
    echo "Escolha dois números <br> <br>";
    echo "Escolha a operação: <br> 1 - soma <br> 2 - subtracao <br> 3 - multiplicacao <br> 4 - divisao <br> <br>";
    echo "Pressione 5 para sair do sistema <br> <br>";

    $num1 = 15;
    $num2 = 10;
    $op = 1;
    

    switch($op){
        
        case 1:
         imprimir($num1, $num2, $op);
         break;
         
        case 2:
         imprimir($num1, $num2, $op);
         break;   

        case 3:
         imprimir($num1, $num2, $op);   
         break;

        case 4:
         imprimir($num1, $num2, $op);   
         break;   

        case 5:
            echo "Saindo do sistema"; 
            break;

        default: 
         echo "Escolha uma operação";
        }    
    
