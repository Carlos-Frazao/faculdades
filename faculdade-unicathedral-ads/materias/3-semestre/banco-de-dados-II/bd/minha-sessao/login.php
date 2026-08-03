<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <!--
            Formulário de login:
            - Envia os dados por POST para autenticar.php
            - Campo "usuario" aceita nome ou e-mail
        -->
        <form action="autenticar.php" method="post">
            <h1>Login</h1>

            <label for="usuario">Usuário ou E-mail:</label>
            <input type="text" id="usuario" name="usuario" placeholder="Digite seu nome ou e-mail" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Senha" required>

            <button type="submit">Entrar</button>
        </form>
    </body>
</html>
