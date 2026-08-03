<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'agenda';

    // Fazendo a conexão
    $con = mysqli_connect($servidor, $usuario, $senha, $banco);

    // Verificando a conexão
    if (!$con) {
        die ('Erro na conexão: ' . mysqli_connect_error());
    }
    echo '';

?>