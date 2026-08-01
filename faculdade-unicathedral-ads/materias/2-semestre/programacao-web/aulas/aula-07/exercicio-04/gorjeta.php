<?php
	$categorias=$_POST["avaliacao"];
	$valor=$_POST["valor"];
	if($categorias=="bom"){
		$valor=$valor-$valor*10/100;
	}else if($categorias=="regular"){
		$valor=$valor-$valor*5/100;
	}
	print "Valor total a pagar R$ ". $valor;
?>