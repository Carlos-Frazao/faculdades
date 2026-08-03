<?php
session_start();
include("conexao.php");

$rua = $_POST['rua'];
$numero = $_POST['numero'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$usuario_id = $_SESSION['usuario_id'];

$sql = "INSERT INTO enderecos (rua, numero, cidade, estado, usuario_id)
        VALUES ('$rua','$numero','$cidade','$estado','$usuario_id')";

mysqli_query($conexao, $sql);

header("Location: painel.php");
?>