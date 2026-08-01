<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $Banco = "escola";

    # Fazendo a conexão;
    $conexao = mysqli_connect($servidor, $usuario, $senha, $Banco);

    # Verificando a conexão
    if (!$conexao){
        die("Falha na conexão: " . mysqli_connect_error());
    }
    echo "";
?>