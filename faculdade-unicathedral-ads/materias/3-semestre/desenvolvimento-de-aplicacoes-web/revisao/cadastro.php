<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
    </head>
    <body>
        <h2>Cadastro de Usuário</h2>

        <form action="inserir_usuario.php" method="post">
            <label>Nome:</label>
            <input type="text" name="nome"><br><br>

            <label>E-mail:</label>
            <input type="email" name="email"><br><br>

            <label>Senha:</label>
            <input type="password" name="senha"><br><br>

            <button type="submit">Cadastrar</button>
        </form>

        <a href="index.php">Já tem uma conta? Faça login</a>
    </body>
</html>