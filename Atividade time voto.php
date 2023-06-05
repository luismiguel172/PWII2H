<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação time | Voto</title>
</head>

    <?php

    session_start();

    $_SESSION['nome'] = $_POST['nome'];

    ?>

<body>

    <b> Bem vindo a votação <?php setcookie("voto",$_SESSION['nome']); echo $_COOKIE['voto']; ?> </b>

    <b>Vote no time que voce acreditar ser o melhor clube de São Paulo: </b> <br>
    
    
    
</body>
</html>