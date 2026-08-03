<?php
session_start();
include("conexao.php");

$rua = $_POST['rua'];
$numero = $_POST['numero'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$usuario_id = $_SESSION['usuario_id'];

$sql = "UPDATE enderecos 
		SET rua='$rua', numero='$numero', cidade='$cidade', estado='$estado' 
		WHERE usuario_id='$usuario_id' ";

mysqli_query($conexao, $sql);

header("Location: painel.php");
?>