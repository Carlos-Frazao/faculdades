<?php
session_start();
$erro = $_SESSION['erro'] ?? null;
$sucesso = $_SESSION['sucesso'] ?? null;
unset($_SESSION['erro'], $_SESSION['sucesso']);
?>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="caixa">
            <h1>Login</h1>

            <?php if ($erro): ?>
                <p style="color: red;"><?php echo htmlspecialchars($erro); ?></p>
            <?php endif; ?>

            <?php if ($sucesso): ?>
                <p style="color: green;"><?php echo htmlspecialchars($sucesso); ?></p>
            <?php endif; ?>

            <form method="POST" action="autenticar.php">
                <br><label>E-mail</label>
                <input type="email" name="email" required><br>

                <br><label>Senha</label>
                <input type="password" name="senha" required><br>

                <br><button type="submit">Entrar</button><br>
            </form>

            <a href="cadastro_usuario.php">Cadastrar</a>
        </div>
    </body>
</html>
