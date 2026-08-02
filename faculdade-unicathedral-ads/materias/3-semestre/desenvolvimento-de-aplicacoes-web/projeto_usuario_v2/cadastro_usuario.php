
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilo.css">
	</head>
	<body>
		<h2>Cadastro de Usuário</h2>

		<form action="inserir_usuario.php" method="POST">
			<input type="text" name="nome" placeholder="Nome">
			<input type="email" name="email" placeholder="Email">
			<input type="password" name="senha" placeholder="Senha">
			<button>Cadastrar</button>
		</form>
	</body>
</html>