<?php
    $inscricao = $_POST["inscricao"];
    if ($inscricao == "calouro") {
        $calculo = 80 - (80*5/100);
        echo "Você é Calouro e o valor da sua inscrição é R$".number_format($calculo,2,",",".");
    } else if ($inscricao == "veterano") {
        $calculo = 80 - (80*10/100);
        echo "Você é Veterano e o valor da sua inscrição é R$".number_format($calculo,2,",",".");
    } else {
        echo "Você é Visitante e sua inscrição é R$80,00";
    }
?>