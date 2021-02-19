<?php
    //Cria constantes com dados do banco
    define('HOST', '127.0.0.1');
    define('USUARIO', 'root');
    define('SENHA', '');
    define('DB', 'login');

    //instancia conexão com o banco
    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar.');

?>