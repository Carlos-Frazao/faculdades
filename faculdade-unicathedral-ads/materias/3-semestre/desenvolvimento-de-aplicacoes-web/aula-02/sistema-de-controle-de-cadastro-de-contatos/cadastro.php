<?php
    require 'conexao.php';

    // Verificando se o formulário foi enviado
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tefone = $_POST['telefone'];

    // Inserindo os dados no banco de dados
    $sql = "INSERT INTO contatos (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
    if (mysqli_query($con, $sql)) {
        echo "Contato cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar contato: " . mysqli_error($con);
    }

    // Voltando home 
    mysqli_query ($con, $sql);
    echo "<a href='index.html'>Voltar para Home</a>";
    
    // Atualizando




?>