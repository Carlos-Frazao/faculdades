<?php
session_start();
include("conexao.php");

$usuario_id = $_SESSION['usuario_id'];

$sql = "SELECT * FROM telefones WHERE usuario_id='$usuario_id'";
$resultado = mysqli_query($conexao, $sql);
?>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilo.css">
	</head>
	<body>

		<h2>Telefones</h2>

		<form action="inserir_telefone.php" method="POST">
			<input type="text" name="ddd" placeholder="DDD">
			<input type="text" name="numero" placeholder="Número">
			<button>Adicionar</button>
		</form>

		<table>
			<tr><th>Telefone</th></tr>

			<?php while($linha = mysqli_fetch_assoc($resultado)) { ?>
				<tr>
				<td>(<?php echo $linha['ddd']; ?>) <?php echo $linha['numero']; ?></td>
				</tr>
			<?php } ?>

		</table>

	</body>
</html>