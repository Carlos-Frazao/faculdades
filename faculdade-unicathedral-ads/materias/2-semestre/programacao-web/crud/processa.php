<?php
    include("conexao.php");

    # Fazendo o cadastro.
    if (isset($_POST['cadastrar'])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        
        $sql = "INSERT INTO alunos (nome, email) VALUES ('$nome', '$email')";
    
        if (mysqli_query($conexao, $sql)) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar: " . mysqli_error($conexao);
        }
    }

    # Fazendo a listagem dos alunos cadastrados.
    if (isset($_POST['listar'])) {
        $sql = "SELECT * FROM alunos";
        $resultado = mysqli_query($conexao, $sql);

        echo "<h2> Lista de alunos:</h2>";
        while ($linha = mysqli_fetch_array($resultado)) {
            echo "Nome: " . $linha['nome'] . "| Email: " . $linha['email'] . "";

            # Adicionando link para exclusão.
            echo " <a href='excluir.php?id=" . $linha['idalunos'] . "'>[Excluir]</a> <br> ";
        }
    }
?>