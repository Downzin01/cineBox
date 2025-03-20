<?php

    include './includes/header.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
        $usuarioFormulario = $_POST['usuario'];
        $senhaFormulario = $_POST['senha'];

        $dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';
        $user = 'root';
        $password = '';
        
        $banco = new PDO($dsn, $user, $password);
        $consulta = "SELECT * FROM tb_usuario WHERE usuario = '{$usuarioFormulario}' AND senha = '{$senhaFormulario}'";

        $dados = $banco->query($consulta)->fetch();

        if(!empty($dados) && $dados != false) {
            $consultarUsuario = "SELECT * FROM tb_pessoa WHERE id = {$dados['id_pessoa']}";
            $dadosUsuario = $banco->query($consultarUsuario)->fetch();

            session_start();

            $_SESSION['id_pessoa'] = $dadosUsuario['nome'];
            $_SESSION['nome'] = $dadosUsuario['nome'];
            $_SESSION['ano_nascimento'] = $dadosUsuario['ano_nascimento'];
            $_SESSION['telefone_1'] = $dadosUsuario['telefone_1'];

            header('Location: ./usuario.php');
        } else {
            echo '
                <script>
                    alert("Usuário ou senha incorretos"); 
                    window.location.href("./usuario-login.php");
                </script>
            ';
        }
    }

    include './includes/user_login.html';

    include_once './includes/footer.php';
