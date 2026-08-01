<?php
    $numero = $_POST["numero"];
    $c = 1;     
    while ($c <= 10) {
        echo $numero. "X" .$c. " = " .$numero * $c. "<br>";
        $c ++;
    }
?>