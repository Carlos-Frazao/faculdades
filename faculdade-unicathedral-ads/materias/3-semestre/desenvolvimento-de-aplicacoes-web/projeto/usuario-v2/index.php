<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="login">
			<h1>LOGIN</h1>

			<form action="valida_login.php" method="POST">
				<label>Usuário</label>
				<input type="email" type="email" name="email" placeholder="E-mail">

				<label type="password">Senha</label>
				<input id="senha" type="password" name="senha" placeholder="Senha">

				<button type="submit">Entrar</button>
			</form>

			<p class="cadastro-link">Não tem conta? <a href="cadastro_usuario.php">cadastrar-se</a></p>
		</div>
	</body>
</html>
