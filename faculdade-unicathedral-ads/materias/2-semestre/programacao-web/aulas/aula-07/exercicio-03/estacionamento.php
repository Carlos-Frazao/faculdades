<?php
    $horas = $_POST["horas"];
    $aluno = $_POST["aluno"];

    //CÁLCULO DAS HORAS CADA HORA É 5,00.
    $valor_por_hora = 5.00;
    $valor_bruto = $horas * $valor_por_hora;

    if ($aluno == "sim") {
        $desconto = $valor_bruto * 10 / 100;
        $valor_final = $valor_bruto - $desconto;
        echo "Você é aluno, e teve um desconto de 10% total a pagar: ".$valor_final;
    } else {    
        echo "Você é não é aluno, então total a pagar no estacionamento é: ".$valor_bruto;
    }
?>