<?php
// Inicia ou retoma a sessao atual.
// Sem isso, nao conseguimos ler/gravar dados em $_SESSION.
session_start();

// Carrega a conexao com o banco (variavel $con).
require 'conexao.php';

// Bloqueia acesso direto por URL.
// Esse script deve ser chamado apenas pelo formulario (metodo POST).
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.html');
    exit;
}

// Recebe os dados enviados pelo formulario.
// trim() remove espacos extras no inicio/fim.
$email = trim($_POST['email'] ?? '');
$senha = trim($_POST['senha'] ?? '');

// Validacao basica para evitar consulta com campos vazios.
if ($email === '' || $senha === '') {
    echo "<script>alert('Preencha email e senha.');window.location.href='login.html';</script>";
    exit;
}

// Prepared Statement: protege contra SQL Injection.
// O SQL fica fixo e os valores sao enviados separadamente.
$stmt = mysqli_prepare($con, 'SELECT id, nome, email FROM usuario WHERE email = ? AND senha = ? LIMIT 1');

// 'ss' = 2 parametros string: email e senha.
mysqli_stmt_bind_param($stmt, 'ss', $email, $senha);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);

// Se encontrou um usuario, login aprovado.
if ($usuario = mysqli_fetch_assoc($resultado)) {
    // Troca o ID da sessao apos autenticar (boa pratica de seguranca).
    session_regenerate_id(true);

    // Dados que identificam o usuario logado.
    $_SESSION['logado'] = true;
    $_SESSION['usuario_id'] = $usuario['id'];
    $_SESSION['usuario_nome'] = $usuario['nome'];
    $_SESSION['usuario_email'] = $usuario['email'];

    // Libera recursos do banco antes de redirecionar.
    mysqli_stmt_close($stmt);
    mysqli_close($con);

    // Vai para a pagina protegida.
    header('Location: painel.php');
    exit;
}

// Se nao autenticou, fecha recursos e volta para login.
mysqli_stmt_close($stmt);
mysqli_close($con);

echo "<script>alert('Usuario ou senha incorretos!');window.location.href='login.html';</script>";
?>
