<?php
    //RESGATANDO AS VARIÁVEIS DO HTML
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $imc = $peso / ($altura * $altura);
    echo "Seu IMC éh: ".number_format($imc,1,",",".")."<br>";

    //VERIFICANDO AS CONDIÇÕES
    if ($imc < 18.5) {
        echo "Classificação (OMS): Abaixo do peso!";
    } elseif ($imc >= 18.5 and $imc <= 24.9) {
        echo "Classificação (OMS): Peso normal.";
    } elseif ($imc >= 25.0 and $imc <= 29.9) {
        echo "Classificação (OMS): Sobre peso!";
    } else {
        echo "Classificação (OMS): Obesidade!";
    }
?>