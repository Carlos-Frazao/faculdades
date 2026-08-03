<?php
	$nome=$_POST["nome"];
	$idade=$_POST["idade"];
	if($idade<18){
		print $nome." você é menor de idade";
	}else{
		print $nome." você é maior de idade";
	}
?>