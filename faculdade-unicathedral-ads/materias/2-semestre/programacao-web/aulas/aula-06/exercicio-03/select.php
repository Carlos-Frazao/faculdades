<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Select</title>
</head>
<body>
    <form method="post" action="resultado.php"> 
        Dia
        <select name="dia">
            <?php
            $dia = 1;
            while ($dia <= 31) {
                echo "<option value=".$dia.">".$dia."<option>";
                $dia ++;
            }
            ?>
        </select>
        Mês 
        <select>
        <?php
            $mes = 1;
            while ($mes <= 12) {
                echo "<option value=".$mes.">".$mes."<option>";
                $mes ++;
            }
            ?>
        </select>
        <select>
        Ano 
        <?php
            $ano = 2025;
            while ($ano >= 1) {
                echo "<option value=".$ano.">".$ano."<option>";
                $ano --;
            }
            ?>
        </select>
    </form>
</body>
</html>