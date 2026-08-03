<?php
// Inicia a sessão para podermos destruí-la corretamente.
session_start();

// Remove todos os dados da sessão atual.
session_destroy();

// Volta para a página de login.
header('Location: login.php');

// Garante que nada mais será executado depois do redirecionamento.
exit();
?>
