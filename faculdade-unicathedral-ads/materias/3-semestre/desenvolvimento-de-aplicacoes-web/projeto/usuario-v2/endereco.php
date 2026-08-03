<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style_endereco.css">
	</head>
	<body>
		<div class="endereco">
			<h2>Endereço</h2>
			<form action="salvar_endereco.php" method="POST">
				<input type="text" name="rua" placeholder="Rua">
				<input type="text" name="numero" placeholder="Número">
				<input type="text" name="cidade" placeholder="Cidade">
				<input type="text" name="estado" placeholder="Estado">
				<button>Salvar</button>
			</form>
		</div>
	</body>
</html>