<?php

$senha = "abc";
$num1 = 10;
$num2 = 5;
$res;

echo "Digite uma senha <br>";
echo "--- <br>";

echo "Digite dois números reais <br>";
echo "$num1 <br>";
echo "$num2 <br>";

$res = $num1/$num2;

 echo "Digite novamente sua senha <br>";

 if ($senha == "abc"){
    echo "$res <br>";
 }else{
    echo "Erro identificado <br>";
 }