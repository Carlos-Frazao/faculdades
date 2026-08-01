<?php
    $numero = $_POST["numero"];
    $c = $numero;
    while ($c >= 1) {
        if ($numero % $c == 0) {
            echo $c."<br>";
        }
        $c--;
    }
?>
