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
<body>

    <div class="position-absolute top-0 start-50 translate-middle-x">

    <div class="h4 pb-2 mb-4 text-danger border-bottom border-danger">
    <p class="text-center">
    <p class="text-black bg-white">Bem Vindo ao sistema de votação</p>
    </p>
</div>

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
    <b>(Sua idade pode ser usada a favor de estatísticas)</b> <br> <br>

    
    <button type="submit" class="btn btn-success">Enviar Informações</button>

    </form>

    </div>
    
</body>
</html>