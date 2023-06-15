<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação time | Voto</title>
    <link rel="stylesheet" href="style1.css">
</head>

    <?php

    session_start();

    $nome = $_SESSION['nome'] = $_POST['nome'];
        
    ?>

<body>

    <?php
        echo "Olá $nome";
    ?>

    <p>Agora você irá decidir entre as quatro opções quem é o maior na sua opinião</p>

    <form action="Atividade time finalizacao.php">
        <div class="box">
            <fieldset>
                <legend>Times</legend>

                <div class="clubes">
                <input type="radio" name="times" id="Sao Paulo" value="Sao Paulo">
                <label for="Sao Paulo" class="SP">São Paulo</label>
                <br><br>
                <input type="radio" name="times" id="Corinthians" value="Corinthians">
                <label for="Corinthians" class="Corinthians">Corinthians</label>
                <br><br>
                <input type="radio" name="times" id="Palmeiras" value="Palmeiras">
                <label for="Palmeiras" class="Palmeiras">Palmeiras</label>
                <br><br>
                <input type="radio" name="times" id="Santos" value="Santos">
                <label for="Santos" class="Santos">Santos</label>
                <br><br>
                <input type="submit" name="submit" id="submit"></input>
                </div>

                </fieldset>
        </div>        
    </form>
    
</body>
</html>