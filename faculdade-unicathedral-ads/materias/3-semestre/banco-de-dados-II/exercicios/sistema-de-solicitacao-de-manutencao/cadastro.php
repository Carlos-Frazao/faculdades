<html>
	<head>
		<title>Cadastro</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="./estilos/index.css">
	</head>
	<body>
		<div class="container">
			<header>
				<h2>Cadastro de  usuário</h2>
			</header>
			<div class="nav_cadastro">
				<nav>
					<a href="#">Home</a>
					<a href="#">Produtos</a>
					<a href="#">Serviços</a>
					<a href="#">Contato</a>
				</nav>



			<main>
				<form action="inserir_usuario.php" method="POST">
					<h2>Cadastro de  usuário</h2>
					Nome: <input type="text" name="nome" placeholder=""></p>
					Email: <input type="email" name="email" placeholder=""><p>
					Senha: <input type="password" name="senha" placeholder=""></p>
					<button>Cadastrar</button><br><br>
					<a href="index.php"> Voltar para login</a>
				</form>
			</main>
			<div class="rodape_cadastro">
				<footer>
				Contato
				Entre em contato conosco para mais informações.
			</footer>
			</div>
	</body>
</html>