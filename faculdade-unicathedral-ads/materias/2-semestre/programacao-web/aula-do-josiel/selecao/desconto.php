<?php
	$valor=$_POST["valor"];
	$parcelas=$_POST["parcelas"];
	if($valor>1000){
		$valor=$valor-($valor*10/100);
	}
	$valor_parcela=$valor/$parcelas;
	print "Valor da parcela R$ ".$valor_parcela;
?>