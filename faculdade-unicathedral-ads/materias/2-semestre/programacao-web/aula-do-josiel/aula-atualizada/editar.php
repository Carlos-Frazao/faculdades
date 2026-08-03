<?php
	require"conexao.php";
	$id=$_GET['id'];
	$sql="SELECT*FROM aluno WHERE idAluno=$id";
	$resultado=mysqli_query($con,$sql);
	$linha=mysqli_fetch_assoc($resultado);
?>
<HTML>
	<head>
		<title> Editar </title>
		<meta charset="UTF-8">
	</head>
	<body>
		<form method="POST" action="editar_executar.php">
			código: <input type="text" name="id" value="<?php print $linha['idAluno'];?>" readonly ><br>
			Nome: <input type="text" name="nome" value="<?php print $linha['nome'];?>"><br>
			Curso: <input type="text" name="curso" value="<?php print $linha['curso'];?>"><br>
			Idade: <input type="text" name="idade" value="<?php print $linha['idade'];?>"><br>
				<input type="submit" value="Editar">
		</form>
	</body>
</HTML>