<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votacao Time</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="Welcome">
        <b>Bem vindo a Votação</b>
    </div>

    <br><br>

    <div class="Info">
         <b> Aqui você irá decidir qual é o melhor time de São Paulo</b>
    </div>

    <br><br>

    <div class="Info">
         <b> Digite as Informarções pedidas para começarmos</b>
    </div>

    <form action="Atividade time voto.php" method="post">

    <div class="box">
        <fieldset>
            <legend><b>Informarções do Usuário</b></legend>

        <br><br>

        <div class="Inputbox">
            <input type="text" name="nome" id="nome" class="Usuario">
            <label for="Nome Completo" class="label">Nome Completo</label>
        </div>

        <br><br>

        <div class="Inputbox">
            <input type="text" name="idade" id="idade" class="Usuario">
            <label for="Idade" class="label">Idade</label>
        </div>

        <br>

        <input type="submit" name="submit" id="submit"></input>

        </fieldset>

        </form>

    </div>

    
</body>
</html>