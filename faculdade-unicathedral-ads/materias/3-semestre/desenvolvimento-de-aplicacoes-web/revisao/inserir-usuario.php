<?php
    // Incluir o arquivo de conexão
    include('conexao.php');

    // Verificar se os dados foram enviados via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Inserir os dados no banco de dados
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";


        mysqli_query($conexao, $sql);

        // Criar um alert de javascript para informar que o cadastro foi realizado com sucesso
        echo "<script>
                    alert('Cadastro realizado com sucesso!');
                    window.location.href='index.php';
            </script>";

    }
?>
