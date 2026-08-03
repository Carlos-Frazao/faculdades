<?php
	require "conexao.php";
	$sql="SELECT*FROM aluno";
	$resultado=mysqli_query($con,$sql);
	print "<table border=1>";
	print "<TR> <TH> id </TH><TH> Nome </TH><TH> Curso </TH><TH> Idade </TH><TH> Ação </TH> </TR>";
	while ($linha=mysqli_fetch_assoc($resultado)){
		print "<TR>";
		print "<TD>". $linha['idAluno'] ."</TD>";
		print "<TD>". $linha['nome'] ."</TD>";
		print "<TD>". $linha['curso'] ."</TD>";
		print "<TD>". $linha['idade'] ."</TD>";
		print "<TD> <A href='excluir.php?id=". $linha['idAluno']."'>Excluir</A> </TD>";
		print "</TR>";
	}
	print "</TABLE>";
?>