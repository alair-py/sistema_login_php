<?php
    session_start();
    include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Painel de Controle</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="estilo.css">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-light bg-light fixed-top">
                <h3 class="ml-5">Secret Access</h3>
                <a class="btn btn-secondary mr-5" href="logout.php">Sair</a>
            </nav>
        </header>
        
        <div class="container">
            <div id="caixa2">
                <h2>Bem vindo, <? echo $_SESSION['usuario'] ?></h2>
            </div>
        </div>

        <footer class="fixed-bottom">
            <div class="bg-light">
                <span><small>Designed by Alair Junior</small></span>
            </div>
        </footer>

    </body>
</html>

