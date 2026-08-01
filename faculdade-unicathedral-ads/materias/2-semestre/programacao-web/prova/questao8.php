<?php
	$nome=$_POST["nome"];
	$idade=$_POST["idade"];
	if($idade>18){
		print "$nome você tem idade suficiente para ser inscrito";
	}else{
		print "$nome você não tem idade suficiente";
	}
?>