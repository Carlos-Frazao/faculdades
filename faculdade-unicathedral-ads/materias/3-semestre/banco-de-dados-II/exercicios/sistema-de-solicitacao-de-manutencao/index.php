<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Solicitação de Manutenção</title>
        <link rel="stylesheet" href="./estilos/index.css">
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Sistema de Solicitação de Manutenção</h1>
            </header>
            <nav>
                <a href="#">Home</a>
                <a href="#">Produtos</a>
                <a href="#">Serviços</a>
                <a href="#">Contato</a>
            </nav>
            <main>
                <form action="valida_login.php" method="POST">
                    <h2>Faça login para acessar o sistema</h2>
                    <label for="email">E-mail:</label><br>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="senha">Senha:</label><br>
                    <input type="password" id="senha" name="senha" required><br><br>

                    <button type="submit">Entrar</button><br><br>
                    <a href="cadastro.php"> Cadastrar-se</a>
                </form>
            </main>
             <footer>
                Rodapé
            </footer>
        </div>
    </body>
</html>
