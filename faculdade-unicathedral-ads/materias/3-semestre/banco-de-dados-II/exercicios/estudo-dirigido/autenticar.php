<?php
session_start();
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

$email = trim($_POST['email'] ?? '');
$senha = trim($_POST['senha'] ?? '');

if ($email === '' || $senha === '') {
    $_SESSION['erro'] = 'Informe e-mail e senha.';
    header('Location: login.php');
    exit;
}

$sql = 'SELECT id, nome, email FROM usuarios WHERE email = ? AND senha = ?';
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, 'ss', $email, $senha);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);
$usuario = mysqli_fetch_assoc($resultado);
mysqli_stmt_close($stmt);

if ($usuario) {
    $_SESSION['usuario_id'] = (int) $usuario['id'];
    $_SESSION['usuario_nome'] = $usuario['nome'];
    $_SESSION['usuario_email'] = $usuario['email'];
    $_SESSION['sucesso'] = 'Login realizado com sucesso.';

    header('Location: cadastrar.php');
    exit;
}

$_SESSION['erro'] = 'E-mail ou senha invalidos.';
header('Location: login.php');
exit;
?>
