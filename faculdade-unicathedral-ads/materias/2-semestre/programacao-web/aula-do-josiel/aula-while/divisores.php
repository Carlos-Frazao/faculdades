<?php
	$horas=$_POST["horas"];
	$aluno=isset($_POST["aluno"]);
	$visitante=$horas*5;
	$estudante=$visitante-$visitante*10/100;
	if ($aluno=="sim"){
		print $estudante;
	} else {
		print $visitante;
	}	
?>