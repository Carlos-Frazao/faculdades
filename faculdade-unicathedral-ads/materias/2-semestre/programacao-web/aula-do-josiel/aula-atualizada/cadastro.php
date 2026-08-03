<?php
	require "conexao.php";// inclue a conexao 
	$nome=$_POST["nome"];
	$curso=$_POST["curso"];
	$idade=$_POST["idade"];
	
	$sql="insert into aluno (nome,curso,idade) values ('$nome','$curso',$idade)";
	if (mysqli_query($con,$sql)){
		print "<script> alert('cadastro realizado com sucesso'); window.location='index.html'; </script>";
	}else{
		print "erro no cadastro: ".mysqli_error($con);
	}
?>