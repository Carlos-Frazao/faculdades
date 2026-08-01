<?php
    //ENTRADA DE DADOS DO HTML.
    $emprestimo = $_POST["emprestimo"];
    $mensalidade = $_POST["mensalidade"];
  
    $mes = 1;

    while ($emprestimo > $mensalidade) {
        $emprestimo = $emprestimo + $emprestimo * 5 / 100;
        $emprestimo = $emprestimo - $mensalidade;
        echo $mes." Mês, ".$mensalidade. " Saldo = ".$emprestimo."<br>";
        $mes++;
    }
    echo $mes. " Mês, ".$emprestimo. " Saldo = 0";
?>