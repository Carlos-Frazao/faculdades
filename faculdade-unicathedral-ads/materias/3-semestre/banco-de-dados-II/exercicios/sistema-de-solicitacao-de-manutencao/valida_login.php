<?php
    session_start();
    include('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email='$email'  AND senha='$senha'";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_assoc($resultado);
        $_SESSION['usuario_id'] = $usuario['idusuarios'];
        header("Location: painel.php");
        echo "<script>
                    alert('Login falhou! Verifique seu email e senha.');
                    window.location.href='index.php';
            </script>";
    } else {
        echo "Login inválido";
    }
?>