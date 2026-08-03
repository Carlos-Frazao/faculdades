<?php
	$categorias=$_POST["evento_universitario"];
	$valor=80;
	if($categorias=="calouro"){
		$valor=$valor-$valor*5/100;
	}else if($categorias=="veterano"){
		$valor=$valor-$valor*10/100;
	}
	print "Valor a pagar R$ ". $valor;
?>