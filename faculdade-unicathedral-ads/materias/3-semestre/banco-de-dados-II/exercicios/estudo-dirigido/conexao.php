<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'estudo_dirigido';

$con = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$con) {
    die('Erro na conexao: ' . mysqli_connect_error());
}

mysqli_set_charset($con, 'utf8mb4');
?>
