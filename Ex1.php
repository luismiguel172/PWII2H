<?php 

	$a = 10;
	$b = 15;
	$res; $resb;
	echo "Efetuando a soma $a + $b <br/>";

	$res = $a + $b;
	echo "O resultado será $res <br/>";

	if ($res > 20) {
		$resb = $res + 8;
		echo "Qunado for maior que 20, será somado 8, ficando no caso $res + 8 = $resb <br/>";
	}else{
		$resb = $res - 5;
		echo "Qunado for menor ou igual a 20, será subtraido 5, ficando $resb";
	}

	$c = 5;
	$d = 10;
	$res2; $res2b; 
	echo "Efetuando a soma 5 + 10 <br/>";

	$res2 = $c + $d;
	echo "O resultado será $res2 <br/>";

	if ($res2 > 20) {
		$res2b = $res2 + 8;
		echo "Qunado for maior que 20, será somado 8, ficando no caso $res2 + 8 = $res2b <br/>";
	}else{
		$res2b = $res2 - 5;
		echo "Qunado for menor ou igual a 20, será subtraido 5, ficando no caso $res2 - 5 = $res2b";
	}

?>