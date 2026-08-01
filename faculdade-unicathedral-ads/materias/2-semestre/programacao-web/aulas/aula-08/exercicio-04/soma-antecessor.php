<?php
    $n = $_POST["n"];
    $c = 1;
    $soma = 0;
    while ($c < $n) {
        $soma = $soma + $c;
        $c++;
    }
    echo $soma;
?>