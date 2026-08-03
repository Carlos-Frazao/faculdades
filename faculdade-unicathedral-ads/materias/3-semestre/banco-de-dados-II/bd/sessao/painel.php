<?php
// Retoma a sessao para conseguir ler $_SESSION.
session_start();

// Se a chave 'logado' nao existir, bloqueia o acesso.
if (empty($_SESSION['logado'])) {
    header('Location: login.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="caixa">
        <h1>Area Restrita</h1>

        <!--
            htmlspecialchars evita que texto vindo da sessao seja interpretado
            como HTML/JS no navegador.
        -->
        <p><strong>ID:</strong> <?php echo htmlspecialchars((string)$_SESSION['usuario_id']); ?></p>
        <p><strong>Nome:</strong> <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?></p>
        <p><strong>E-mail:</strong> <?php echo htmlspecialchars($_SESSION['usuario_email']); ?></p>

        <!-- Link que encerra a sessao atual -->
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>
