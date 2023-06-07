<!DOCTYPE html>
<html lang="en" class="background">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
<body>
<div class="position-absolute top-50 start-50 translate-middle"> 

    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <span class="navbar-text">
        Bem vindo ao sistema
      </span>
    </div>
  </nav>

  <br>

    <div class="input-group mb-3">
    <div class="form-floating">
    <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
    <label for="floatingInputGroup1">Digite seu nome  </label>
  </div>
</div>

    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <span class="navbar-text">
        Faremos o processo de calculo agora
      </span>
    </div>
  </nav>

        <form action="atividade abril.php" method="get" name="numeros">
            
        <span> <br> Digite dois números: </span>

            <label for="numero"></label><input type="text" name="numeros" maxlength="50" placeholder="1° numero" id="Numeros-escolhidos" autocomplete="off"> 
            <label for="numero"></label><input type="text" name="numeros" maxlength="50" placeholder="2° numero" id="Numeros-escolhidos" autocomplete="off"> 
        
            <?php

            echo "<br> <br> Selecione entre as operações soma, subtração, multiplicação e divisão para realiza-lá: <br> <br>";

            ?> 

            <button type="submit" class="btn btn-success">Enviar</button>
      
        </form>


</div>
</body>
</html>