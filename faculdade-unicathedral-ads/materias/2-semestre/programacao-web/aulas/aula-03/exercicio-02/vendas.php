<?php
    $Valor = $_POST["Valor"];
    $Parcela = $_POST["Parcela"];
    $Calculo = (($Valor*10/100) + $Valor) / $Parcela;
    print "Valor da parcela: ".$Calculo;
?>