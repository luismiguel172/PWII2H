<?php 

	$a=8;
	$b=7;
	$c=10;

	if ($a<$b and $b<$c) {
		echo "ordem dos numeros é $c $b $a";
	}elseif ($b<$c and $c<$a){
		echo "ordem dos numeros é $a $c $b";
	}elseif ($c<$a and $a<$b){
		echo "ordem dos numeros é $b $a $c";
	}elseif ($c<$b and $b<$a){
		echo "ordem dos numeros é $a $b $c";
	}elseif ($a<$c and $c<$b){
		echo "ordem dos numeros é $b $c $a";
	}else{
		echo "a ordem dos numeros é $c $a $b";
	}



 ?>