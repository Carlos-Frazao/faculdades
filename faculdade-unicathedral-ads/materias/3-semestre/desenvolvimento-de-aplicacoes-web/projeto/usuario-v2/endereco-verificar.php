<?php
session_start();

include("conexao.php");

$sql = "SELECT * FROM enderecos WHERE usuario_id=".$_SESSION['usuario_id'];
$resultado = mysqli_query($conexao, $sql);

if( mysqli_fetch_assoc($resultado)){
	header("Location:endereco_alterar.php");
}else{
	header("Location:endereco.php");
}
?>