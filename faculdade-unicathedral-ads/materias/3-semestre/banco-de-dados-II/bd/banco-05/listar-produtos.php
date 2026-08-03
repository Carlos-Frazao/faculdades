<?php
    include("conexao.php");

    //consultar SQL usando JOIN para trazer a categoria
    $sql = "SELECT produtos.nome, produtos.preco, categorias.nome AS categorias FROM produtos 
    INNER JOIN categorias_id ON produtos.categorias_id = idcategorias";
    
    // executar a consulta
    $resultado = mysqli_query($conexao, $sql);

?>