<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votacao Time | Agradecimento</title>

    <?php

    session_start();

    $_SESSION['nome'] = $_POST['nome'];

    $_SESSION['votos'] = $_POST['votos'];

    ?>

</head>
<body>

    <b>Obrigado por votar <?php setcookie("voto",$_SESSION['nome']); echo $_COOKIE['voto']; ?></b> <br> <br>

    <b>Seu voto foi para o: <?php setcookie("votacao",$_SESSION['votos']); echo $_COOKIE['votos']; ?></b>
    
</body>
</html>