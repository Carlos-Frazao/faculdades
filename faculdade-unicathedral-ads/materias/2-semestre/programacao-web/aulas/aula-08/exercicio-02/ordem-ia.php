<?php
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $numero3 = $_POST["numero3"];

    echo "A ordem crescente é: ";

    // Caso 1: O número 1 é o menor de todos
    if ($numero1 <= $numero2 && $numero1 <= $numero3) {
        if ($numero2 <= $numero3) {
            echo "$numero1 $numero2 $numero3";
        } else {
            echo "$numero1 $numero3 $numero2";
        }
    } 
    // Caso 2: O número 2 é o menor de todos
    else if ($numero2 <= $numero1 && $numero2 <= $numero3) {
        if ($numero1 <= $numero3) {
            echo "$numero2 $numero1 $numero3";
        } else {
            echo "$numero2 $numero3 $numero1";
        }
    } 
    // Caso 3: Se nenhum dos anteriores, o número 3 é o menor
    else {
        if ($numero1 <= $numero2) {
            echo "$numero3 $numero1 $numero2";
        } else {
            echo "$numero3 $numero2 $numero1";
        }
    }
?>