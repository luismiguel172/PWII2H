<!DOCTYPE html>
<html lang="en" class="background">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora</title>
</head>
<body>
    <div class="Titulo">
    <?php
    
        echo "Bem vindo ao sistema <br> <br>";
        echo "Escolha dois números:";

    ?>
    </div>
        <form action="atividade abril.php" method="get" name="numeros">

            <label for="numero"></label><input type="text" name="numeros" maxlength="50" placeholder="Insira o primeiro numero" id="Numeros-escolhidos" autocomplete="off"> 
            <label for="numero"></label><input type="text" name="numeros" maxlength="50" placeholder="Insira o segundo numero" id="Numeros-escolhidos" autocomplete="off"> 
        
            <?php

            echo "<br> <br> Selecione entre as operações soma, subtração, multiplicação e divisão para realiza-lá: <br> <br>";

            ?> 

             Operações: <br/>
             <input type="radio" name="operacoes" value="soma"/>Soma <br/>  
             <input type="radio" name="operacoes" value="subtracao"/>Subtração <br/>
             <input type="radio" name="operacoes" value="multiplicacao"/>Multiplicação <br/>
             <input type="radio" name="operacoes" value="divisao"/>Divisão <br/> <br/>

             <input type="submit" value="Enviar">
      
        </form>

    
</body>
</html>