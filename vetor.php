<?php

    //Exemplo declaração de variavel sem array

    $nome1 = "Maria";
    $nome2 = "João";
    $nome3 = "Pedro";
    $nome4 = "Paulo";
    $nome5 = "Lucas";

    echo "$nome1 <br/> $nome2 <br/> $nome3 <br/> $nome4 <br/> $nome5 <br/>";

    //Exemplo declaração de variavel com array

    $nome = array("Maria","João","Pedro","Paulo","Lucas");

    echo "Os nomes do array<br/>";

    foreach($nome as $nomes){

        echo "<br/>".$nomes;
    }

    //Outro modo de array

    $num = array( 1, 2, 3, 4, 5);

    foreach( $num as $valor){
        echo "Valor é $valor <br />";
    }

    $num[0] = "um";
    $num[1] = "dois";
    $num[2] = "tres";
    $num[3] = "quatro";
    $num[4] = "cinco";


?>    