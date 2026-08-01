<?php
	require"conexao.php";
	$id=$_POST['id'];
	$nome=$_POST['nome'];
	$curso=$_POST['curso'];
	$idade=$_POST['idade'];
	$sql="UPDATE aluno SET nome='$nome', curso='$curso', idade=$idade WHERE idAluno=$id";
	if (mysqli_query($con,$sql)){
		print "<script> 
						alert('Cadastro alterado com sucesso');
						window.location='index.html';
				</script>";
	}else{
		print mysqli_error($con);
	}
	mysqli_close($con); 	
?>