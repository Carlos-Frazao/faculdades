<?php
// Inicia/retoma a sessão para acessar $_SESSION.
session_start();

// Se não existir usuário na sessão, significa que não está logado.
if (!isset($_SESSION['usuario'])) {
    // Redireciona para a tela de login.
    header('Location: login.php');
    // Encerra o script para não renderizar nada do painel.
    exit();
}

// Exibe o nome do usuário autenticado.
echo 'Bem-vindo, ' . $_SESSION['usuario'] . '! Você está no painel.<br>';

// Link para encerrar sessão (logout).
echo '<a href="logout.php">Sair (logout)</a>';
?>
