<?php
    $estado = $_POST["estado_civil"];
    if ($estado == "casado") {
        echo "Você é casado.";
    } else {
        echo "Você é solteiro";
    }
?>