<?php
    $inicio = $_POST["inicio"];
    $fim = $_POST["fim"];
    echo "Contando do ".$inicio. " até ".$fim."<br>";
    while ($inicio <= $fim) {
        echo $inicio. '<br>';
        $inicio++;
    }
?>