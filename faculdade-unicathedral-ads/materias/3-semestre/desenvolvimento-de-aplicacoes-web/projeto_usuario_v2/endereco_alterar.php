<?php
session_start();
include("conexao.php");

$usuario_id = $_SESSION['usuario_id'];

$sql = "SELECT * FROM enderecos WHERE usuario_id='$usuario_id'";
$resultado = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_assoc($resultado);
?>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilo.css">
	</head>
	<body>

		<h2>Alterar Endereço</h2>
		<form action="alterar_endereco.php" method="POST">
			<input type="text" name="rua" value="<?php echo $linha['rua']; ?>">
			<input type="text" name="numero" value="<?php echo $linha['numero']; ?>">
			<input type="text" name="cidade" value="<?php echo $linha['cidade']; ?>">
			<input type="text" name="estado" value="<?php echo $linha['estado']; ?>">
			<button>Alterar</button>
		</form>
	</body>
</html>