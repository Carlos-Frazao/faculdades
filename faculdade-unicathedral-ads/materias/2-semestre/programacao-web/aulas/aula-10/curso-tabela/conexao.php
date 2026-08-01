<?php
	$servidor="localhost";
	$usuario="root";
	$senha="";
	$banco="universidade";
	
	$con=mysqli_connect($servidor,$usuario,$senha,$banco);
	if (!$con){
		die( mysqli_connect_error());
	}
?>