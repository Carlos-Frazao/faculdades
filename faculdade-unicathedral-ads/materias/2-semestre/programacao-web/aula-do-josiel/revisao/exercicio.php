<?php
	$numero = $_POST['numero'];
	$n=1;
	$soma = 0;
	while($n<=$numero){
		$soma = $soma+$n;
		$n++;
		print "<br>Soma = ".$soma;
	}
	
?>