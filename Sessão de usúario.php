<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão de usuário</title>
</head>
<body>

    <?php

        session_start();

        $_SESSION['name'] = 'Administrador';

        session_unset();

        session_destroy();

    ?>

    <h3>Sessão de Usuário</h3>

    Bem vindo, Sr. <?php echo $_SESSION['name']; ?>

    
</body>
</html>