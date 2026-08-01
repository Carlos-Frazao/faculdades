<?php
    $hora = $_POST["hora"];
    $minuto = $_POST["minuto"];
    if ($hora < 12) {
        echo "Matutino!";
    } else if ($hora < 18) {
        echo "Vespertino!";
    } else {
        echo "Noturno!";
    }
?>