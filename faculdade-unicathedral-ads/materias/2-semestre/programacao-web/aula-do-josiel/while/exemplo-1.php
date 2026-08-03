<?php
	$inicio=$_POST["inicio"];
	$fim=$_POST["fim"];
	while ($inicio<=$fim){
		print $inicio."<BR>";
		$inicio++;
	}
?>