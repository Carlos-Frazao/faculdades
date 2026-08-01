<?php
    $numero = $_POST["numero"];
    if ($numero % 2 == 0) {
        echo "Par!";
    } else {
        echo "Ímpar.";
    }
?>