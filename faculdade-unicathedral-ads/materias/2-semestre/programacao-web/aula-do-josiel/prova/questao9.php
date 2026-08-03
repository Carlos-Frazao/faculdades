<?php
	$lanche=$_POST["lanche"];
	$bebida=$_POST["bebida"];
	$bolsista=isset($_POST["bolsista"]);
	print "$bolsista<BR>";
	$total=$lanche+$bebida;
	if ($bolsista){
		$total=$total-$total*50/100;
	}
	print "total a pagar de R$ $total";
?>