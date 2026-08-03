<?php
	$nome=$_POST["nome"];
	$idade=$_POST["idade"];
	if($idade<11){
		print $nome." você é criança";
	}else if($idade<18){
		print $nome." você é adolescente";
	}else if($idade<61){
		print $nome." você é adulto";
	}else if($idade<100){
		print $nome." você é idoso";
	}else{
		print $nome." você é ancião";
	}
?>