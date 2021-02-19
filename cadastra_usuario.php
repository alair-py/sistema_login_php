<?php
    //inclui conexao instanciada do banco
    include('conexao.php');

    //teste valores vazios no $_POST enviado
    if(empty($_POST['novoUsuario'] || empty($_POST['novaSenha']))) {
        header('Location: cadastro.php');
        exit();
    }

    //armazena valores recuperados do $_POST em variáveis com método preventivo de SQL Injection
    $usuario = mysqli_real_escape_string($conexao, $_POST['novoUsuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['novaSenha']);


    //Consulta se usuário passado já existe no banco
    $query = "
        SELECT usuario 
        FROM `tb_usuario` 
        WHERE usuario = '{$usuario}';
    ";

    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);

    if($row == 1) {
        //se Usuario já existe no banco, retorna erro de usuário já existente
        header('Location: cadastro.php?cadastro=erro');
        exit();
    } else {
        //Se Usuario não existe no banco, cadastra o mesmo e retorna mensagem de sucesso
        $insert = "
            INSERT INTO `tb_usuario`(`usuario`, `senha`) VALUES ('{$usuario}', md5('{$senha}'));
        ";

        mysqli_query($conexao, $insert);

        header('Location: index.php?cadastro=sucesso');
        exit();
    }


?>