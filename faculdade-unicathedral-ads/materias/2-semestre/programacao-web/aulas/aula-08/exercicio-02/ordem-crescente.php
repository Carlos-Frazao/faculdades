<?php
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $numero3 = $_POST["numero3"];

    // Coloca os números em um array (uma lista)
    $numeros = [$numero1, $numero2, $numero3];

    // Ordena o array em ordem crescente
    sort($numeros);

    // Imprime os números ordenados, separados por um espaço
    echo "A ordem crescente é: " . implode(" ", $numeros);
?>