<?php

    session_start();

    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['idade'] = $_POST['idade'];

    unset($_SESSION['nome']);
    unset($_SESSION['idade']);

    header("Location: Atividade time.php");

    session_destroy();