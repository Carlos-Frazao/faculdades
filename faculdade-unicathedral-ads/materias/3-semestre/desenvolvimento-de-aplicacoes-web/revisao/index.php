<hatml>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <h2>LOGIN</h2>

        <form action="valida_login.php" method="post">
            <label>Email:</label>
            <input type="email" name="email"><br><br>

            <label>Senha:</label>
            <input type="password" name="senha"><br><br>

            <button type="submit">Entrar</button>
        </form>

        <a href="cadastro.php">Não tem uma conta? Cadastre-se</a><br>
        <a href="esqueci_senha.php">Esqueci minha senha</a>
    </body>
</hatml>