<?php
//Inicia sessão para guardar quem está logado
session_start();

// 2) Conecta no banco (arquivo da mesma pasta)
require 'conexao.php';

// 3) Se alguém abrir esse arquivo direto pela URL, volta para o login
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

// 4) Recebe os dados do formulário
$usuario = trim($_POST['usuario'] ?? ''); // pode ser nome ou e-mail
$senha = $_POST['senha'] ?? '';

// 5) Validação básica
if ($usuario === '' || $senha === '') {
    echo 'Preencha usuário e senha.';
    exit;
}

// 6) Descobre qual coluna de senha existe no banco: "senha" ou "senhas"
$colunaSenha = '';

$testeSenha = mysqli_query($con, "SHOW COLUMNS FROM usuario LIKE 'senha'");
if ($testeSenha && mysqli_num_rows($testeSenha) > 0) {
    $colunaSenha = 'senha';
}
if ($testeSenha) {
    mysqli_free_result($testeSenha);
}

if ($colunaSenha === '') {
    $testeSenhas = mysqli_query($con, "SHOW COLUMNS FROM usuario LIKE 'senhas'");
    if ($testeSenhas && mysqli_num_rows($testeSenhas) > 0) {
        $colunaSenha = 'senhas';
    }
    if ($testeSenhas) {
        mysqli_free_result($testeSenhas);
    }
}

if ($colunaSenha === '') {
    echo "A tabela 'usuario' precisa ter a coluna 'senha' ou 'senhas'.";
    mysqli_close($con);
    exit;
}

// 7) Busca usuário por e-mail OU por nome (com prepared statement)
$sql = "SELECT idusuarios AS id, nome, $colunaSenha AS senha_banco FROM usuario WHERE email = ? OR nome = ? LIMIT 1";
$stmt = mysqli_prepare($con, $sql);

if (!$stmt) {
    echo 'Erro ao preparar consulta: ' . mysqli_error($con);
    mysqli_close($con);
    exit;
}

mysqli_stmt_bind_param($stmt, 'ss', $usuario, $usuario);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);
$dados = mysqli_fetch_assoc($resultado);

// 8) Se não encontrou usuário
if (!$dados) {
    mysqli_stmt_close($stmt);
    mysqli_close($con);
    echo 'Usuário ou senha inválidos.';
    exit;
}

// 9) Compara a senha digitada com a senha do banco
$senhaBanco = (string) $dados['senha_banco'];
$loginValido = false;

// Caso ideal: senha já está em hash
if (password_verify($senha, $senhaBanco)) {
    $loginValido = true;
}

// Caso antigo: senha ainda em texto puro
if (!$loginValido && $senha === $senhaBanco) {
    $loginValido = true;

    // Migra automaticamente para hash
    $novaHash = password_hash($senha, PASSWORD_DEFAULT);
    $sqlUpdate = "UPDATE usuario SET $colunaSenha = ? WHERE idusuarios = ?";
    $stmtUpdate = mysqli_prepare($con, $sqlUpdate);

    if ($stmtUpdate) {
        mysqli_stmt_bind_param($stmtUpdate, 'si', $novaHash, $dados['id']);
        mysqli_stmt_execute($stmtUpdate);
        mysqli_stmt_close($stmtUpdate);
    }
}

// 10) Finaliza login
if ($loginValido) {
    session_regenerate_id(true);
    $_SESSION['usuario'] = $dados['nome'];

    mysqli_stmt_close($stmt);
    mysqli_close($con);

    header('Location: painel.php');
    exit;
}

mysqli_stmt_close($stmt);
mysqli_close($con);

echo 'Usuário ou senha inválidos.';
?>

