<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "login";
	
	// Fazendo a conexão
	$con = mysqli_connect($servidor, $usuario, $senha, $banco);
	
	// Verificando a conexão
	if (!$con) {
		// die, ele vai matar o processo.
		die("Erro na conexão: " . mysqli_connect_error());
	}
?>
