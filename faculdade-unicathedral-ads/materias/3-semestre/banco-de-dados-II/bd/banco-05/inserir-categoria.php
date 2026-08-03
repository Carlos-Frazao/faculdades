<?php

    // incluir o arquivo de conexão com o banco de dados
    require("conexao.php");

    $nome=$_POST['nome'];

    // cria o comando SQL para inserir a categoria
    $sql = "INSERT INTO categorias (nome) values ('$nome')";

    // executar o comando no banco de dados
    mysqli_query ($conexao, $sql);

    //redireciona o usuário para a lista de categorias
    header("location: listar_categorias.php");
?>