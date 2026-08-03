<?php
    session_start();

    // Verificando se os dados de login foram enviados via POST.
    if (!isset($_POST['usuario']) || !isset($_POST['senha'])) {
        // Se não, redireciona de volta para a página de login.
        header('Location: login.php');
        exit();
    }

    
?>