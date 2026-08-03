<?php
    // Inicia a sessão
    session_start();

    // Destruir a sessão
    session_destroy();

    // Redecionar para a página de login
    header("location: index.php");
?>