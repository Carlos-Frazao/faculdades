<?php
    $nome = $_POST["nome"];
    $nome = ucfirst($nome); //Colocando a primeira letra em maiúscula.
    $idade = $_POST["idade"];
    if ($idade < 11) {
        echo $nome. ", você ainda é criança.";
    } elseif ($idade <= 17) {
        echo $nome. ", você ainda é adolescente.";
    } elseif ($idade <= 60) {
        echo $nome. ", você é adulto.";
    } elseif ($idade <= 99) {
        echo $nome. ",você já é idoso.";
    } else {
        echo $nome. ",você já é ancião.";
    }
?>