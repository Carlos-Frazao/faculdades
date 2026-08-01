<?php
    $inicio = $_POST["inicio"];
    $fim = $_POST["fim"];
    while ($inicio <= $fim) {
        echo $inicio. '<br>';
        $inicio++;
    }
?>