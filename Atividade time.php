<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votacao Time</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="background">

    <div class="position-absolute top-50 start-50 translate-middle"> 

    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
    <span class="navbar-text">
        Bem vindo ao sistema para a votação
    </span>
    </div>
    </nav>

    <br>

    <form action="Atividade time voto.php" method="post" name="Informacoes">

    <div class="input-group mb-3">
    <div class="form-floating">
    <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="nome" autocomplete="off">
    <label for="floatingInputGroup1"> Digite seu nome </label>
    </div>
    </div>

    <div class="input-group mb-3">
    <div class="form-floating">
    <input type="text" class="form-control" id="floatingInputGroup2" placeholder="Idade" name="idade" autocomplete="off">
    <label for="floatingInputGroup1">Digite sua idade </label>
    </div>
    </div>
    <b>(Sua idade será usada a favor de estatísticas)</b> <br>

    
    <button type="submit" class="btn btn-success">Enviar Informações</button>

    </form>

    </div>
    
</body>
</html>