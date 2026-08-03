<?php
    session_start();
    include("conexao.php");

    if (!isset($_SESSION['usuario_id'])) {
        header("Location: index.php");
        exit();
    }

    $usuario_id = $_SESSION['usuario_id'];

    $sql = "SELECT * FROM solicitacoes WHERE usuarios_idusuarios = '$usuario_id'";
    $resultado = mysqli_query($conexao, $sql);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Listar Solicitações</title>
    </head>
    <body>
        <h1>Minhas Solicitações</h1>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Local</th>
                <th>Data</th>
                <th>Status</th>
            </tr>

            <?php while ($linha = mysqli_fetch_assoc($resultado)) { ?>
                <tr>
                    <td><?php echo $linha['idsolicitacoes']; ?></td>
                    <td><?php echo $linha['descricao']; ?></td>
                    <td><?php echo $linha['local']; ?></td>
                    <td><?php echo $linha['data']; ?></td>
                    <td><?php echo $linha['status']; ?></td>
                </tr>
            <?php } ?>
        </table>

        <br>
        <a href="painel.php">Voltar ao painel</a>
    </body>
</html>
