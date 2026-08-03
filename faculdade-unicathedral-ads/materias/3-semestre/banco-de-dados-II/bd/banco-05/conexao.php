<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "lanchonete";

// cria a conexão com o banco de dados
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// verificar se houve erro na conexão
if (!$conexao) {

    // interrompe o programa caso a conexão falhe
    die ("Erro ao conectar com o banco de dados");
}
?>