<?php
    $nome = $_POST["nome"];
    $nome = ucfirst($nome); //Colocando a primeira letra em maiúscula.
    $idade = $_POST["idade"];
    if ($idade >= 18) {
        echo $nome. ", você é maior de idade.";
    } else {
        echo $nome. ", você é menor de idade.";
    }
?>