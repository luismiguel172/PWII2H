<?php

$nomes = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro");

$chaves = array_keys($nomes);

foreach($chaves as $item){

    echo "<br/>".$item;
}
echo "<br/>";

print_r($chaves);
//var_dump faz a função do print_r


?>