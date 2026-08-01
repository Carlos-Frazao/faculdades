<?php
    $opcao = $_POST["avaliacao"];
    $valor = $_POST["valor"];
    if ($opcao == "B") {
        $desconto = $valor - ($valor*10/100);
        echo "Avaliação foi BOA você teve um desconto de 10% R$".number_format($desconto,2,",",".");
    } else if ($opcao == "R") {
        $desconto = $valor - ($valor*5/100);
        echo "Avaliação foi REGULAR você teve um desconto de 5% R$".number_format($desconto,2,",",".");
    } else {
        echo "Avaliação foi RUIM você não teve um desconto R$".number_format($desconto,2,",",".");
    }
?>