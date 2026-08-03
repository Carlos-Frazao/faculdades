<?php
    session_start();
    include("conexao.php");

    if (!isset($_SESSION['usuario_id'])) {
        header("Location: index.php");
        exit();
    }

    $descricao = $_POST['descricao'];
    $local = $_POST['local'];
    $data = $_POST['data'];
    $status = $_POST['status'];
    $usuario_id = $_SESSION['usuario_id'];

    $sql = "INSERT INTO solicitacoes (descricao, local, data, status, usuarios_idusuarios)
            VALUES ('$descricao', '$local', '$data', '$status', '$usuario_id')";

    if (mysqli_query($conexao, $sql)) {
        echo "<script>
                alert('Solicitação salva com sucesso!');
                window.location.href='listar_solicitacao.php';
              </script>";
    } else {
        echo "Erro ao salvar solicitação: " . mysqli_error($conexao);
    }
?>
