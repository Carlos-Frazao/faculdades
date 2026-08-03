<?php
    include('conexao.php');

    // Inicia a sessão
    session_start();

    // Verificar se os dados foram enviados via POST
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificar se o email e senha estão corretos
    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    // Executar a consulta
    $resultado = mysqli_query($conexao, $sql);

    // Verificar se encontrou um usuário com o email e senha fornecidos
    if (mysqli_num_rows($resultado) > 0) {
        // Pega os dados do usuário
        $usuario = mysqli_fetch_assoc($resultado);

        // Armazzenar o nome do usuário na sessão
        $_SESSION['usuario_id'] = $usuario['id'];

        $_SESSION['nome'] = $usuario['nome'];

        // Redirecionar para a página painel.php
        header("Location: painel.php");
    } else {
        // Criar um alert de javascript para informar que o login falhou
        echo "<script>
                    alert('Login falhou! Verifique seu email e senha.');
                    window.location.href='index.php';
            </script>";
    }
?>