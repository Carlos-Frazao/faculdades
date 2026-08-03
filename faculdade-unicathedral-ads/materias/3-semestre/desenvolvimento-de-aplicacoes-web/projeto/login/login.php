<?php
	require("conexao.php");
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$sql = "SELECT * FROM usuario WHERE email = '$email'
				AND senha = '$senha'";
				
	// Armazenando o resultado da consulta
	$resultado = mysqli_query($con, $sql);
	
	if ($usuario = mysqli_fetch_assoc($resultado)) {
		echo "Nome: <b>". $usuario['nome']."</b><br>";
		echo "Você entrou no sistema ksksksksksk:<br>";
		echo "<a href='login.html'>Sair </a>";
	} else {
		echo "<script>
				alert('Usuário ou senha incorreta!');
				window.location.href = 'login.html'; 
			</script>";
	}
	
	// Fechando a conexão
	mysqli_close($con);
?>