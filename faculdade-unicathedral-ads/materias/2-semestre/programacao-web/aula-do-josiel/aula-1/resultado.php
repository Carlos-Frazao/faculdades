<?php
		$valor_base = $_POST["n1"];
		$parcelas = $_POST["n2"];
			$soma = $valor_base + ($valor_base * 10/100);
			$resultado = $soma/$parcelas;
			print "resultado =".$resultado;
?>			
			
