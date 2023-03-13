<?php 

	$a = 10;
	$b = 7;
	echo "Verificação se os números 10 e 7 são divisiveis por 10, 5 e 2 <br/>";

	if ($a % 10 == 0){
		echo "O número 10 é divisivel por 10 pois 10 divido por 10 sobra nenhum número <br/>";
	}elseif ($a % 5 == 0) {
		echo "O número 10 é divisivel por 5 pois 10 divido por 5 sobra nenhum número <br/>";
	}elseif ($a % 2 == 0) {
		echo "O número 10 é divisivel por 2 pois 10 divido por 2 sobra nenhum número <br/>";
	}else{
		echo "O número não é divisel por nenhum dos 3 números <br/>";
	}

	if ($b % 10 == 0){
		echo "O número 7 é divisivel por 10 pois 10 divido por 10 sobra nenhum número <br/>";
	}elseif ($b % 5 == 0) {
		echo "O número 7 é divisivel por 5 pois 10 divido por 5 sobra nenhum número <br/>";
	}elseif ($b % 2 == 0) {
		echo "O número 7 é divisivel por 2 pois 10 divido por 2 sobra nenhum número <br/>";
	}else{
		echo "O número 7 não é divisel por nenhum dos 3 números <br/>";
	}


 ?>