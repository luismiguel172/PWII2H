    <p>Array associativo</p>

<?php

    $salarios = array("João" => 2000, "Pedro" => 1000, "Maria" => 500);

    echo "Salário de João é ". $salarios['João'] . "<br />";
    echo "Salário de Pedro é ". $salarios['Pedro'] . "<br />";
    echo "Salário de Maria é ". $salarios['Maria'] . "<br />";

    $salarios['João'] = "Alto";
    $salarios['Pedro'] = "Médio";
    $salarios['Maria'] = "Baixo";

    echo "Salário de João é ". $salarios['João'] . "<br />";
    echo "Salário de Pedro é ". $salarios['Pedro'] . "<br />";
    echo "Salário de Maria é ". $salarios['Maria'] . "<br />";

 ?>
 
    <p>Função is_array</p>

<?php

$variavel = "Ana";

$nomes = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro");

if (is_array($variavel)){

       echo "<br/> Variavel é um array"; 
}else{
    echo "<br/> Variavel não é um array";
}
if (is_array($nomes)){

    echo "<br/> Nomes é um array";

}else{
    echo "</br> Nomes não é um array";
}
?>    

<p>Função array_values</p>

<?php

$nomes = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro");

$valores = array_values($nomes);

print_r($valores);

?>

    <p>Função array_unshift</p>

<?php

$nomes = array("Maria","José","Pedro");
array_unshift($nomes, "Ana");

foreach($nomes as $item){
    echo "<br/>".$item;
}

?> 

    <p>Função array_shift</p>

<?php

$nomes = array("Maria","José","Pedro");
$excluido = array_shift($nomes);

foreach ($nomes as $item){

    echo "<br/>".$item;
}

echo "<br/><br/> Nome removido: ".$excluido;

?>        

    <p>Função array_search</p>

<?php

$nomes = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro");
$chave = array_search("Ana", $nomes);

echo "<br/> Chave de busca realizada: ".$chave;

?>    

    <p>Função array_pop</p>

<?php

$nomes = array("Maria","José","Pedro");
$excluido = array_pop($nomes);

foreach ($nomes as $item){

    echo "<br/>".$item;
}

echo "<br/><br/> Nome removido: ".$excluido;

?>

    <p>Função array_keys</p>

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

    <p>Função array_key_exists</p>

<?php

$nomes = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro");

if(array_key_exists("ZE",$nomes)){

    echo "<br/> Nome enocntrado no vetor, através da chave.";
}

?>

    <p>Ponteiros array</p>

<?php

$nomes = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro","AN" => "Ana");

echo "<br/> Next: ".next($nomes);
echo "<br/> End: ".end($nomes);
echo "<br/> Prev: ".prev($nomes);
echo "<br/> Reset: ".reset($nomes);

?>

    <p>Recuperando a chave de um ponteiro</p>

<?php

$nomes = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro","AN" => "Ana");

while ($chave = key($nomes)){

    echo "<br/>".$chave;

    next($nomes);
}