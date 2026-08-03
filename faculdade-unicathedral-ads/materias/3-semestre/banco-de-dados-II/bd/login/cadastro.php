<?php
	// Puxando o arquivo conexão. Inclusão pode ser require ou include
	require("conexao.php");
	
	// Puxando as variáveis do HTML
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	
	// Criando o sql que manda informação para o banco de dados
	$sql = "INSERT INTO usuario(nome, email, senha) 
				values('$nome', '$email', '$senha')";
				
	// Realizando o cadastro e retornando fedback
	if (mysqli_query($con, $sql)){
		echo "<script>
				alert('Cadastro realizado com sucesso!');
				window.location.href='login.html';
		</script>";
	} else {
		echo "Erro ao cadastrar, pan!: ".mysqli_error($con);
	}
	
	// Fechando a conexão
	mysqli_close($con);
?>
