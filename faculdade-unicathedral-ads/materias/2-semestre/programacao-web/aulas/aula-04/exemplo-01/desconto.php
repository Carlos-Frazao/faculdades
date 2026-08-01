<?php
    $valor = $_POST["valor"];
    $parcela = $_POST["parcelas"];
    if ($valor > 1000) {
        $valor  = ($valor - ($valor * 10 / 100));
    }
    $valor_parcela = $valor / $parcela;
    echo "Valor da parcela R$ ".$valor_parcela;
?>