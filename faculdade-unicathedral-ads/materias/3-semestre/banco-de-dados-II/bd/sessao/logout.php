<?php
// Retoma a sessao para poder limpar/destruir.
session_start();

// Limpa todas as variaveis da sessao no PHP.
$_SESSION = [];

// Se a sessao usa cookie, remove tambem o cookie do navegador.
if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params['path'],
        $params['domain'],
        $params['secure'],
        $params['httponly']
    );
}

// Destroi os dados da sessao no servidor.
session_destroy();

// Volta para a tela de login.
header('Location: login.html');
exit;
?>
