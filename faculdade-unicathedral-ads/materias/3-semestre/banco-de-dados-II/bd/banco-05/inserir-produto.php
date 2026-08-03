<?php
    include("conexao.php");

    //recebe os dados enviados pelo formulário
    $nome=$_POST['nome'];
    $preco=$_POST['preco'];
    $categorias=$_POST['categorias'];

    $sql = "INSERT INTO produtos (nome, preco, categorias) VALUES ('$nome', '$preco', '$categorias')";

    mysqli_query($conexao, $sql);

    header("location: listar_produtos.php");
?>