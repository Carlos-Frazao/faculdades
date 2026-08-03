<?php
	$numero=$_POST["numero"];
	$contador=0;
	while ($contador<=10){
		print $numero."x".$contador."=".$numero*$contador."<br>";
		$contador++;
	}
?>