<?php
session_start();
include("conexao.php");

$ddd = $_POST['ddd'];
$numero = $_POST['numero'];
$usuario_id = $_SESSION['usuario_id'];

$sql = "INSERT INTO telefones (ddd, numero, usuario_id)
        VALUES ('$ddd','$numero','$usuario_id')";

mysqli_query($conexao, $sql);

header("Location: telefones.php");
?>