<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Secret Access - Login</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="estilo.css">
    </head>

    <body>

        <header>
            <nav class="navbar navbar-light bg-light fixed-top">
                <h3>Secret Access</h3>
            </nav>
        </header>
        
        <div class="container">
            <div class="col">
                
                <h4>Login</h4>
                <!--Se usuario/senha inválidos, exibe o erro-->
                <? if(isset($_SESSION['nao_autenticado'])) { ?>
                    <div id="erro">
                        <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                <? } ?>
                
                <!--Se usuario foi cadastrado, exibe o sucesso-->
                <? if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'sucesso') { ?>
                    <div id="sucesso">
                        <p>Cadastrado com sucesso!</p>
                    </div>
                <? } ?>

                <? unset($_SESSION['nao_autenticado']); ?>

                <div class="row" id="caixa">

                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="usuario" class="form-control" placeholder="seu usuário"/>
                        </div>
                        
                        <div class="form-group">            
                            <input type="password" name="senha" class="form-control" placeholder="sua senha">
                        </div>
                        
                        <div>
                            <button type="submit" class="btn btn-primary botoes1">
                                Entrar
                            </button>

                            <a class="btn btn-primary botoes2" href="cadastro.php">
                                Cadastrar
                            </a>
                        </div>
                        
                    </form>

                </div>
            </div>
        </div>

        <footer class="fixed-bottom">
            <div class="bg-light">
                <span><small>Designed by Alair Junior</small></span>
            </div>
        </footer>

    </body>
</html>