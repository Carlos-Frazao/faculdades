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
        <title>Nova Solicitação</title>
    </head>
    <body>
        <h1>Abrir Solicitação</h1>

        <form action="salva_solicitacao.php" method="POST">
            <label>Descrição:</label><br>
            <textarea name="descricao" required></textarea><br><br>

            <label>Local:</label><br>
            <input type="text" name="local" required><br><br>

            <label>Data:</label><br>
            <input type="datetime-local" name="data" required><br><br>

            <label>Status:</label><br>
            <select name="status" required>
                <option value="aberta">Aberta</option>
                <option value="em andamento">Em andamento</option>
                <option value="finalizada">Finalizada</option>
            </select><br><br>

            <button type="submit">Salvar Solicitação</button>
        </form>

        <br>
        <a href="painel.php">Voltar ao painel</a>
    </body>
</html>
