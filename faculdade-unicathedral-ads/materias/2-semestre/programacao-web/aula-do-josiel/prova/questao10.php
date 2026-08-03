<?php
	$horas=$_POST["horas"];
	$bolsista=isset($_POST["bolsista"]);
	$valor_hora=2;
	$total=$horas*$valor_hora;
	if ($bolsista==1){
		$total=$total-$valor_hora*2;
		if ($total<0){
			$total=0;
		}
	}
	print "valor a pagar de $total";
?>