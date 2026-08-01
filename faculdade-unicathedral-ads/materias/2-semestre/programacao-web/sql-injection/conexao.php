<?php
    $hostname = "localhost";
    $bancodedados = "faculdade";
    $usuario = "root";
    $senha = "root";
    $porta = 3307; 
    
    // Criando a conexão (Objeto MySQLi)
    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados, $porta);

    // Verificando se deu erro na conexão
    if ($mysqli->connect_errno) {
        echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        exit(); // Para o código aqui se não conectar
    } 
    
    // Se não deu erro, o script continua silenciosamente 
    // (Não colocamos "Echo Sucesso" aqui para não atrapalhar o login.php)
?>