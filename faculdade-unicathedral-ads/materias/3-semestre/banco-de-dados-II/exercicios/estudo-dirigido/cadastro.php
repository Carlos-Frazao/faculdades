<?php
session_start();
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: cadastro_usuario.php');
    exit;
}

$etapa = $_POST['etapa'] ?? '';

function redirecionar(string $destino, string $mensagem, string $tipo = 'erro'): void
{
    $_SESSION[$tipo] = $mensagem;
    header("Location: {$destino}");
    exit;
}

if ($etapa === 'usuario') {
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $senha = trim($_POST['senha'] ?? '');

    if ($nome === '' || $email === '' || $senha === '') {
        redirecionar('cadastro_usuario.php', 'Preencha nome, e-mail e senha.');
    }

    $sqlVerifica = 'SELECT id FROM usuarios WHERE email = ?';
    $stmtVerifica = mysqli_prepare($con, $sqlVerifica);
    mysqli_stmt_bind_param($stmtVerifica, 's', $email);
    mysqli_stmt_execute($stmtVerifica);
    mysqli_stmt_store_result($stmtVerifica);

    if (mysqli_stmt_num_rows($stmtVerifica) > 0) {
        mysqli_stmt_close($stmtVerifica);
        redirecionar('cadastro_usuario.php', 'Este e-mail ja esta cadastrado.');
    }

    mysqli_stmt_close($stmtVerifica);

    $sql = 'INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)';
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, 'sss', $nome, $email, $senha);

    if (!mysqli_stmt_execute($stmt)) {
        $erro = mysqli_error($con);
        mysqli_stmt_close($stmt);
        redirecionar('cadastro_usuario.php', 'Erro ao cadastrar usuario: ' . $erro);
    }

    $usuarioId = mysqli_insert_id($con);
    mysqli_stmt_close($stmt);

    $_SESSION['usuario_id'] = $usuarioId;
    $_SESSION['usuario_nome'] = $nome;
    $_SESSION['sucesso'] = 'Usuario cadastrado com sucesso. Agora informe o endereco.';

    header('Location: cadastro_endereco.php');
    exit;
}

if (!isset($_SESSION['usuario_id'])) {
    redirecionar('login.php', 'Faça login para continuar.');
}

$usuarioId = (int) $_SESSION['usuario_id'];

if ($etapa === 'endereco') {
    $rua = trim($_POST['rua'] ?? '');
    $numero = trim($_POST['numero'] ?? '');
    $cidade = trim($_POST['cidade'] ?? '');
    $estado = trim($_POST['estado'] ?? '');

    if ($rua === '' || $numero === '' || $cidade === '' || $estado === '') {
        redirecionar('cadastro_endereco.php', 'Preencha todos os campos do endereco.');
    }

    $sqlBusca = 'SELECT id FROM enderecos WHERE usuario_id = ?';
    $stmtBusca = mysqli_prepare($con, $sqlBusca);
    mysqli_stmt_bind_param($stmtBusca, 'i', $usuarioId);
    mysqli_stmt_execute($stmtBusca);
    $resultado = mysqli_stmt_get_result($stmtBusca);
    $endereco = mysqli_fetch_assoc($resultado);
    mysqli_stmt_close($stmtBusca);

    if ($endereco) {
        $sql = 'UPDATE enderecos SET rua = ?, numero = ?, cidade = ?, estado = ? WHERE usuario_id = ?';
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, 'ssssi', $rua, $numero, $cidade, $estado, $usuarioId);
        $mensagem = 'Endereco atualizado com sucesso. Agora adicione os telefones.';
    } else {
        $sql = 'INSERT INTO enderecos (usuario_id, rua, numero, cidade, estado) VALUES (?, ?, ?, ?, ?)';
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, 'issss', $usuarioId, $rua, $numero, $cidade, $estado);
        $mensagem = 'Endereco cadastrado com sucesso. Agora adicione os telefones.';
    }

    if (!mysqli_stmt_execute($stmt)) {
        $erro = mysqli_error($con);
        mysqli_stmt_close($stmt);
        redirecionar('cadastro_endereco.php', 'Erro ao salvar endereco: ' . $erro);
    }

    mysqli_stmt_close($stmt);
    $_SESSION['sucesso'] = $mensagem;

    header('Location: cadastro_telefone.php');
    exit;
}

if ($etapa === 'telefone') {
    $ddd = trim($_POST['ddd'] ?? '');
    $numero = trim($_POST['numero'] ?? '');
    $acao = $_POST['acao'] ?? 'adicionar';

    if ($acao === 'finalizar') {
        $_SESSION['sucesso'] = 'Cadastro finalizado com sucesso.';
        header('Location: login.php');
        exit;
    }

    if ($ddd === '' || $numero === '') {
        redirecionar('cadastro_telefone.php', 'Informe DDD e numero do telefone.');
    }

    $sql = 'INSERT INTO telefones (usuario_id, ddd, numero) VALUES (?, ?, ?)';
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, 'iss', $usuarioId, $ddd, $numero);

    if (!mysqli_stmt_execute($stmt)) {
        $erro = mysqli_error($con);
        mysqli_stmt_close($stmt);
        redirecionar('cadastro_telefone.php', 'Erro ao adicionar telefone: ' . $erro);
    }

    mysqli_stmt_close($stmt);
    $_SESSION['sucesso'] = 'Telefone adicionado com sucesso.';

    header('Location: cadastro_telefone.php');
    exit;
}

redirecionar('cadastro_usuario.php', 'Etapa de cadastro invalida.');
?>
