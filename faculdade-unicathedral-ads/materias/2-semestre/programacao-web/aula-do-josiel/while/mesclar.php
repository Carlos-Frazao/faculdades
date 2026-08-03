<html>
	<head>
	<TITLE> </title>
		<body>
			<form method="POST" action="resultado.php">
				
				Dia
				<select name="dia">
					<?php 
						$dia=1;
						while ($dia<=31){
							print "<option value=".$dia.">".$dia."</option>";
							$dia++;
						}
					?>
				</select>
						mês
				<select name="mes">
					<?php 
						$mes=1;
						while ($mes<=12){
							print "<option value=".$mes.">".$mes."</option>";
							$mes++;
						}
					?>
				</select> 
				Ano
				<select name="ano">
					<?php 
						$ano=2025;
						while ($ano>1){
							print "<option value=".$ano.">".$ano."</option>";
							$ano--;
						}
					?>
				</select>
				<input type="submit" value="enviar">
			</form>
		</body>
	</head>
</html>