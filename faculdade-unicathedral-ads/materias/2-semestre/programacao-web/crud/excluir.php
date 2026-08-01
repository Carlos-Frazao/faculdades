<?php
    include("conexao.php");

    # Puxando o id 
    $id = $_GET['id'];

    # Fazendo o delete onde o id foi igual a tal 
    $sql = "DELETE FROM alunos WHERE idalunos = $id";

    if (mysqli_query($conexao, $sql)) {
        echo "Aluno excluido com sucesso!";
        echo "<br><a href='index.html'>voltar</a>";
    } else {
        echo "Erro ao excluir: " . mysqli_error($conexao);
        
    }
?>