<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    $_SESSION['erro'] = 'Faça login para acessar os telefones.';
    header('Location: login.php');
    exit;
}

require 'conexao.php';

$erro = $_SESSION['erro'] ?? null;
$sucesso = $_SESSION['sucesso'] ?? null;
unset($_SESSION['erro'], $_SESSION['sucesso']);

$telefones = [];
$sql = 'SELECT ddd, numero FROM telefones WHERE usuario_id = ? ORDER BY id DESC';
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, 'i', $_SESSION['usuario_id']);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);

while ($telefone = mysqli_fetch_assoc($resultado)) {
    $telefones[] = $telefone;
}

mysqli_stmt_close($stmt);
?>
<html>
    <head>
        <title>Cadastro de Telefone</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="caixa">
            <h1>Telefones do Usuario</h1>

            <?php if ($erro): ?>
                <p style="color: red;"><?php echo htmlspecialchars($erro); ?></p>
            <?php endif; ?>

            <?php if ($sucesso): ?>
                <p style="color: green;"><?php echo htmlspecialchars($sucesso); ?></p>
            <?php endif; ?>

            <form method="POST" action="cadastro.php">
                <input type="hidden" name="etapa" value="telefone">

                <label>DDD:</label>
                <input type="number" name="ddd" required>

                <label>Numero:</label>
                <input type="text" name="numero" required>

                <button type="submit" name="acao" value="adicionar">Adicionar</button>
                <button type="submit" name="acao" value="finalizar">Finalizar Cadastro</button>
            </form>

            <p>Telefones cadastrados:</p>

            <?php if ($telefones): ?>
                <?php foreach ($telefones as $telefone): ?>
                    <p>- (<?php echo htmlspecialchars($telefone['ddd']); ?>) <?php echo htmlspecialchars($telefone['numero']); ?></p>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Nenhum telefone cadastrado ainda.</p>
            <?php endif; ?>
        </div>
    </body>
</html>
