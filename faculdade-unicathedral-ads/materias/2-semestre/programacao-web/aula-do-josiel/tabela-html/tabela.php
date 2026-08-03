<?php
	print "<table border=1>";
	print "<TR>";
	print "<TH> Nome </TH>";
	print "<TH> Idade </TH>";
	print "<TH> Email </TH>";
	print "</TR>";
	$i=0;
	while ($i<30) {
		print "<TR>";
		print "<TD> Nome $i </TD>";
		print "<TD> $i </TD>";
		print "<TD> Email $i </TD>";
		print "</TR>";
		$i++;
	}
	print "</table>";
?>