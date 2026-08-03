<?php
    // incluir a conexão com o banco
    include("conexao.php");

    // consulta SQL que busca todas as categorias
    $sql = "SELECT * FROM categorias";

    // executar a consulta
    $resultado = mysqli_query($conexao, $sql);
?>
<html>
    <head>
        <title> Lista de Categorias </title>
    </head>
    <body>
        <h2> Lista de Categorias </h2>
        <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>
        <?php

            // percorre todos os registros retornados pela consulta
            while ($linha = mysqli_fetch_assoc($resultado)){
        ?>
            <tr>

                <!-- mostra o ID da categoria -->
                <td><?php echo $linha['idcategorias']; ?></td>

                <!-- mostra o nome da categoria -->
                <td><?php echo $linha['nome']; ?></td>
                
            </tr>
        <?php
            }
        ?>
    </body>
</html>