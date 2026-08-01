<?php
include 'conexao.php';

// Captura os dados que vieram do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

// Monta o SQL de inserção
$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

// Executa e verifica se deu certo
if ($conn->query($sql) === TRUE) {
    // Redireciona de volta para a página principal
    header("Location: index.php");
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

$conn->close();
?>