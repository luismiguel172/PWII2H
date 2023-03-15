<?php 

	$nome = "Gabriela";
	$sexo = "feminino";
	$idade = "23";

	echo "Digite seu nome <br/>";
	print("$nome <br/>");
	echo "Digite seu sexo/genero <br/>";
	print("$sexo <br/>");
	echo "Digite sua idade <br/>";
	print("$idade <br/>");

	if ($sexo == "feminino" and $idade < 25) {
		echo "Nome: $nome <br/>";
		echo "ACEITA";
	}else{
		echo "NÃO ACEITA";
	}

 ?>