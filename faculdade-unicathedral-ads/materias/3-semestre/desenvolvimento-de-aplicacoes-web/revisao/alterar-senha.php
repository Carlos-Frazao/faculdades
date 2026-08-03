<html>
    <head>
        <meta charset="UTF-8">
        <title>Alterar Senha</title>
    </head>
    <body>
        <h2>Alterar Senha</h2>

        <form action="atualizar_senha.php" method="post">
            <label>Senha Atual:</label>
            <input type="password" name="senha_atual"><br><br>

            <label>Nova Senha:</label>
            <input type="password" name="nova_senha"><br><br>

            <button type="submit">Alterar Senha</button>
        </form>

        <a href="painel.php">Voltar para o Painel de Controle</a>
    </body>
</html>

<?php
    // Inicia a sessão
    session_start();

    // Verificar se o usuário está logado
    if (!isset($_SESSION['usuario_id'])) {
            echo "<p>Você não tem permissão para acessar esta página. Faça login para continuar.</p>";
            echo "<a href='index.php'>Voltar para a página de login</a>";
    }

    // Fazendo a troca da senha
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Conexão com o banco de dados
        $conn = new mysqli("localhost", "root", "", "revisao");

        // Verificar a conexão
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        // Obter os dados do formulário
        $usuario_id = $_SESSION['usuario_id'];
        $senha_atual = $_POST['senha_atual'];
        $nova_senha = $_POST['nova_senha'];

        // Verificar se a senha atual está correta
        $sql = "SELECT senha FROM usuarios WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $usuario_id);
        $stmt->execute();
        $stmt->bind_result($senha_armazenada);
        $stmt->fetch();

        if (password_verify($senha_atual, $senha_armazenada)) {
            // Atualizar a senha no banco de dados
            $nova_senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT);
            $sql_update = "UPDATE usuarios SET senha = ? WHERE id = ?";
            $stmt_update = $conn->prepare($sql_update);
            $stmt_update->bind_param("si", $nova_senha_hash, $usuario_id);

            if ($stmt_update->execute()) {
                echo "<p>Senha alterada com sucesso!</p>";
            } else {
                echo "<p>Erro ao alterar a senha: " . $stmt_update->error . "</p>";
            }
        } else {
            echo "<p>A senha atual está incorreta. Tente novamente.</p>";
        }

        // Fechar a conexão
        $stmt->close();
        $conn->close();
    }
?>