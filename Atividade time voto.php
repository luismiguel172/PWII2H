<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação time | Voto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
</head>

    <?php

    session_start();

    $_SESSION['nome'] = $_POST['nome'];

    ?>

<body>

    

    <form action="Atividade time finalizacao.php" method="post" name="Votacao">

    <b> Bem vindo a votação <?php setcookie("voto",$_SESSION['nome']); echo $_COOKIE['voto']; ?> </b>

    <br> <br> <b>Vote no time que voce acreditar ser o melhor clube de São Paulo: </b> <br> 

    <ul class="list-group">

    <li class="list-group-item list-group-item-danger">São Paulo</li>
        <img src="SaoPaulo.jpg" alt="Sao Paulo" height="100px" width="100px"> <br> <br>

    <li class="list-group-item list-group-item-light">Corinthians</li>
        <img src="Corinthians.jpg" alt="Corinthians" height="100px" width="100px">  <br> <br>

    <li class="list-group-item list-group-item-dark">Santos</li>
        <img src="Santos.jpg" alt="Santos" height="100px" width="100px"> <br> <br>

    <li class="list-group-item list-group-item-success">Palmeiras</li>
        <img src="Palmeiras.jpg" alt="Palmeiras" height="100px" width="100px"> <br> 
        </ul>

        <div class="input-group mb-3">
    <div class="form-floating">
    <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="votos" autocomplete="off">
    <label for="floatingInputGroup1"> Digite seu voto aqui </label>

    </div>
    </div>
    
    <button type="submit" class="btn btn-danger">Enviar voto</button> 

    </form>
    
</body>
</html>