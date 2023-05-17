<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

    <?php

        echo "Bem vindo ao sistema <br> <br>";
        echo "Escolha dois números:";

    ?>
        <form action="atividade abril.php" method="get" name="numeros">
        <label for="numero"></label><input type="text" name="numeros" maxlength="50" placeholder="Insira o primeiro numero" id="Numeros-escolhidos" autocomplete="off"> 
        <label for="numero"></label><input type="text" name="numeros" maxlength="50" placeholder="Insira o segundo numero" id="Numeros-escolhidos" autocomplete="off"> 

        </form>

    <?php

        echo "<br> Selecione entre as operações soma, subtração, multiplicação e divisão para realiza-lá <br> <br>";

    ?>
    
        
    
</body>
</html>