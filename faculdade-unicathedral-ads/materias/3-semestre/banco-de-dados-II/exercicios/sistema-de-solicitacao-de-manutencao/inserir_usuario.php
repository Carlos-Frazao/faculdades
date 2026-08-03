<?php
    include("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (nome, email, senha)
            VALUES ('$nome','$email','$senha')";

    if (mysqli_query($conexao, $sql)) {
        echo "<script>
                alert('Usuario cadastrado com sucesso!');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Erro ao cadastrar usuario!');
                window.location.href = 'cadastro.php';
              </script>";
    }
?>
