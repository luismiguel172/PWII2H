<?php

$Horasa;
$Númerosa;
$Saláriop;
$Desinss;

$Saláriop = $Númerosa * $Horasa;

if ($Saláriop <= 1302){
    $Desinss = $Saláriop * 0.075;
}elseif($Saláriop > 1302 and $Saláriop <= 2571.29){
    $Desinss = $Saláriop * 0.09;
}elseif($Saláriop > 2571.29 and $Saláriop <= 3856.94){
    $Desinss = $Saláriop * 0.12;
}elseif($Saláriop > 3856.94 and $Saláriop <= 7507.49){
    $Desinss = $Saláriop * 0.14;

echo "Números de aula: $Númerosa <br>";
echo "Números de horas - aula: $Horasa <br>";
echo "Percentual de desconto INSS: $Desinss";