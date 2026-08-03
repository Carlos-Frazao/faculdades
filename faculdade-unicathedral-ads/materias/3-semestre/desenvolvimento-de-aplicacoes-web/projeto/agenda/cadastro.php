<?php
	require "conexao.php";
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];
	
	$sql = "INSERT INTO contato(nome, email, telefone) 
			VALUES ('$nome', '$email', '$telefone')"; 
	mysqli_query ($con, $sql);
	echo "<a href = 'cadastro.html'> Voltar </a>";
	

?>