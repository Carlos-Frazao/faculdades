<?php
    // Inicia a sessão
    session_start();

    // Verificar se o usuário está logado
    if (!isset($_SESSION['usuario_id'])) {
            echo "<p>Você não tem permissão para acessar esta página. Faça login para continuar.</p>";
            echo "<a href='index.php'>Voltar para a página de login</a>";
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel de Controle</title>
    </head>
    <body>
        <h2>Bem-vindo ao Painel de Controle!</h2>
        <p>Você está logado com sucesso.</p>

        <p>Olá, <?php echo $_SESSION['nome'];?>!</p>

        <a href="logout.php">Sair</a><br>    
        <a href="alterar_senha.php">Alterar Senha</a><br>
    </body>
</html>