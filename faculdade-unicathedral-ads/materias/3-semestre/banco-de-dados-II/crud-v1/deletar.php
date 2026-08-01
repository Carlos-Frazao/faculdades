<?php
include 'conexao.php';

// Pega o ID que veio na URL
$id = $_GET['id'];

// Manda o banco deletar o registro com esse ID
$sql = "DELETE FROM usuarios WHERE idusuarios = $id";
$conn->query($sql);

// Volta para a tela principal
header("Location: index.php");
?>