<?php
    session_start();

    if (!isset($_SESSION['usuario_id'])) {
        header("Location: index.php");
        exit();
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel</title>
    </head>
    <body>
        <h1>Painel do Sistema</h1>

        <a href="nova_solicitacao.php">Abrir solicitação</a><br><br>
        <a href="listar_solicitacao.php">Listar solicitações</a><br><br>
        <a href="logout.php">Logout</a>
    </body>
</html>
