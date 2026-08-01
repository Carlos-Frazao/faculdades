<?php
	require "conexao.php";
	$id=$_GET['id'];
	$sql="delete from aluno where idaluno=".$id;
	mysqli_query($con,$sql);
?>