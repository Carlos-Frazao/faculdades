<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    $_SESSION['erro'] = 'Faça login para acessar o endereco.';
    header('Location: login.php');
    exit;
}

require 'conexao.php';

$erro = $_SESSION['erro'] ?? null;
$sucesso = $_SESSION['sucesso'] ?? null;
unset($_SESSION['erro'], $_SESSION['sucesso']);

$rua = '';
$numero = '';
$cidade = '';
$estado = '';

$sql = 'SELECT rua, numero, cidade, estado FROM enderecos WHERE usuario_id = ?';
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, 'i', $_SESSION['usuario_id']);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);
$endereco = mysqli_fetch_assoc($resultado);
mysqli_stmt_close($stmt);

if ($endereco) {
    $rua = $endereco['rua'];
    $numero = $endereco['numero'];
    $cidade = $endereco['cidade'];
    $estado = $endereco['estado'];
}
?>
<html>
    <head>
        <title>Cadastro de Endereco</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="caixa_endereco">
            <h1>Cadastro de Endereco</h1>

            <?php if ($erro): ?>
                <p style="color: red;"><?php echo htmlspecialchars($erro); ?></p>
            <?php endif; ?>

            <?php if ($sucesso): ?>
                <p style="color: green;"><?php echo htmlspecialchars($sucesso); ?></p>
            <?php endif; ?>

            <form method="POST" action="cadastro.php">
                <input type="hidden" name="etapa" value="endereco">

                <br><label>Rua:</label>
                <input type="text" name="rua" value="<?php echo htmlspecialchars($rua); ?>" required><br>

                <br><label>Numero:</label>
                <input type="text" name="numero" value="<?php echo htmlspecialchars($numero); ?>" required><br>

                <br><label>Cidade:</label>
                <input type="text" name="cidade" value="<?php echo htmlspecialchars($cidade); ?>" required><br>

                <br><label>Estado:</label>
                <input type="text" name="estado" value="<?php echo htmlspecialchars($estado); ?>" maxlength="2" required><br>

                <br><button type="submit">Salvar Endereco</button>
            </form>
        </div>
    </body>
</html>
