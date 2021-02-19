<?php
    session_start();
    //Inclui conexão instanciada
    include('conexao.php');

    //Testa se campos Usuário ou Senha estão vazios (caso sim, redireciona)
    if(empty($_POST['usuario'] || empty($_POST['senha']))) {
        header('Location: index.php');
        exit();
    }

    //Armazena usuario e senha em variáveis, utilizando prevenção contra SQL Injection
    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    //Consulta no banco e verifica dados.
    $query = "
    SELECT usuario_id, usuario 
    FROM `tb_usuario` 
    WHERE usuario = '{$usuario}' 
    AND senha = md5('{$senha}');
    ";

    //Armazena resultado da Consulta em variável
    $result = mysqli_query($conexao, $query);

    //Retorna numero de linhas válidas na consulta
    $row = mysqli_num_rows($result);

    //Baseado no numero de linhas, cria SESSION ou redireciona para Index
    if($row == 1) {
        $_SESSION['usuario'] = $usuario;
        header('Location: painel.php');
        exit();
    } else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: index.php');
        exit();
    }

?>