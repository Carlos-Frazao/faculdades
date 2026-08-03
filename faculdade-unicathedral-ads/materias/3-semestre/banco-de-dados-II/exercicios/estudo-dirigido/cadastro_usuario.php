<?php
session_start();
$erro = $_SESSION['erro'] ?? null;
$sucesso = $_SESSION['sucesso'] ?? null;
unset($_SESSION['erro'], $_SESSION['sucesso']);
?>
<html>
    <head>
        <title>Cadastro de Usuario</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="caixa">
            <h1>Cadastro de Usuario</h1>

            <?php if ($erro): ?>
                <p style="color: red;"><?php echo htmlspecialchars($erro); ?></p>
            <?php endif; ?>

            <?php if ($sucesso): ?>
                <p style="color: green;"><?php echo htmlspecialchars($sucesso); ?></p>
            <?php endif; ?>

            <form method="POST" action="cadastro.php">
                <input type="hidden" name="etapa" value="usuario">

                <br><label>Nome:</label>
                <input type="text" name="nome" required><br>

                <br><label>E-mail</label>
                <input type="email" name="email" required><br>

                <br><label>Senha</label>
                <input type="password" name="senha" required><br>

                <br><button type="submit">Cadastrar</button>
            </form>
        </div>
    </body>
</html>
