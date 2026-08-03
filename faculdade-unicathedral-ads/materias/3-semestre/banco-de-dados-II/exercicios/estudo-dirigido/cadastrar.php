<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    $_SESSION['erro'] = 'Faça login para acessar o sistema.';
    header('Location: login.php');
    exit;
}

$erro = $_SESSION['erro'] ?? null;
$sucesso = $_SESSION['sucesso'] ?? null;
unset($_SESSION['erro'], $_SESSION['sucesso']);
?>
<html>
    <head>
        <title>Painel do Usuario</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="caixa">
            <h1>Painel do Usuario</h1>
            <p>Usuario logado: <?php echo htmlspecialchars($_SESSION['usuario_nome'] ?? ''); ?></p>

            <?php if ($erro): ?>
                <p style="color: red;"><?php echo htmlspecialchars($erro); ?></p>
            <?php endif; ?>

            <?php if ($sucesso): ?>
                <p style="color: green;"><?php echo htmlspecialchars($sucesso); ?></p>
            <?php endif; ?>

            <p><a href="cadastro_endereco.php">Cadastrar ou editar endereco</a></p>
            <p><a href="cadastro_telefone.php">Cadastrar telefones</a></p>
            <p><a href="login.php">Voltar para o login</a></p>
        </div>
    </body>
</html>
