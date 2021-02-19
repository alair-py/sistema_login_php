<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Secret Access - Cadastro</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="estilo.css">
    </head>

    <body>

        <header>
            <nav class="navbar navbar-light bg-light fixed-top">
                <h3>Secret Access</h3>
                <a href="index.php" class="btn btn-light">Voltar</a>
            </nav>
        </header>
        
        <div class="container">
            <div class="col">
                
                <h4>Cadastro</h4>
                
                <!--Se usuario já existe, exibe o erro-->
                <? if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'erro') { ?>
                    <div id="erro">
                        <p>ERRO: Usuário já cadastrado!</p>
                    </div>
                <? } ?>


                <div class="row" id="caixa">

                    <form action="cadastra_usuario.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="novoUsuario" class="form-control" placeholder="seu usuário"/>
                        </div>
                        
                        <div class="form-group">            
                            <input type="password" name="novaSenha" class="form-control" placeholder="sua senha">
                        </div>
                        
                        <div>
                            <button type="submit" class="btn btn-primary botoes3">
                                Cadastrar
                            </button>
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