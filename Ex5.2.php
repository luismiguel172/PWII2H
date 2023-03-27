<?php

$Horasa = 270;
$Númerosa = 40;
$Saláriop;
$Desinss;

$Saláriop = $Númerosa * $Horasa;

if ($Saláriop <= 1903.98){
    $Desinss = $Saláriop * 0.0;
}elseif($Saláriop > 1903.98 and $Saláriop <= 2826.65){
    $Desinss = $Saláriop * 0.075;
}elseif($Saláriop > 2826.66 and $Saláriop <= 3705.51){
    $Desinss = $Saláriop * 0.15;
}elseif($Saláriop > 3705.51 and $Saláriop <= 4664.68){
    $Desinss = $Saláriop * 0.225;
}elseif($Saláriop > 4664.68){
    $Desinss = $Saláriop * 0.275;
}

echo "Números de aula: $Númerosa <br>";
echo "Números de horas - aula: $Horasa <br>";
echo "Percentual de desconto INSS: $Desinss";