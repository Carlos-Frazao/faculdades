<?php
    include "conexao.php"; // Puxa a sua conexão

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    echo "<h3>Comando enviado pro banco:</h3>";
    echo "<p style='color: blue; font-weight: bold;'>$sql</p><hr>";

    $resultado = $mysqli->query($sql);

    // Verifica se achou alguém
    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        echo "<h1> LOGIN APROVADO!</h1>";
        echo "<p>Bem-vindo, ID: " . $usuario['id'] . " (" . $usuario['email'] . ")</p>";
    } else {
        echo "<h1> ACESSO NEGADO</h1>";
        echo "<p>Email ou senha incorretos.</p>";
    }





    if ($email == "teste@gmail.com" && $senha == "123") {
        echo "Login realizado com sucesso!";
    } else {
        echo "Falha no login!"  ;
    }
?>