<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "sistema_login";

    // Criar conexão
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    // Verificar conexão
    if (!$conexao) {
        die("Conexão falhou: " . mysqli_connect_error());
    }
?>
