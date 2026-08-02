<?php
session_start();

if( !isset($_SESSION['usuario_id']) ){
	header("Location:index.php");
}

include("conexao.php");

$sql = "SELECT * FROM usuarios WHERE id=".$_SESSION['usuario_id'];
$resultado = mysqli_query($conexao, $sql);

$usuario = mysqli_fetch_assoc($resultado);

?>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilo.css">
	</head>
	<body>

		<h2>Painel</h2>
		<p><b><?php echo $usuario['nome']; ?> </b> <a href="logout.php">SAIR</a></p>
		<a href="endereco_verificar.php">Endereço</a>
		<a href="telefones.php">Telefones</a>
	</body>
</html>