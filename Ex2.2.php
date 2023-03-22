<?php

$Horast = 40;
$SalárioH = 20;
$SalárioB;
$SalárioL;
$Númerosd = 2;
$Desir;
$Desinss;


echo "Quantidade de horas trabalhadas: $Horast <br>";
echo "Salário por hora: $SalárioH <br>";
echo "Número de dependentes: $Númerosd <br>";

$SalárioB = $Horast * $SalárioH + ($Númerosd * 50);

if ($SalárioB <= 1000){
    $Desinss = $SalárioB * 8.5/100;
}else{
    $Desinss = $SalárioB * 9/100;
}

if ($SalárioB <= 500){
    $Desir = 0;
}elseif($SalárioB > 500 and $SalárioB <= 1000){
    $Desir = $SalárioB * 5/100;
}else{
    $Desir = $SalárioB * 7/100;
}

$SalárioL = $SalárioB - $Desinss - $Desir;

echo "Desconto INSS: $Desinss <br>";
echo "Desconto IR: $Desir <br>";
echo "Salário líquido: $SalárioL <br>";