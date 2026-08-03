<?php
    include("conexao.php");

    // criar a consulta para buscar as categorias
    $sql = "SELECT * FROM categorias";

    // executar a consulta
    $resultado = mysqli_query($conexao, $sql);
?>
<html>
    <head>
        <title> Cadastrar Produtos </title>
    </head>
    <body>
        <form action = "inserir_produto.php" method = "POST">
            <label> Nome do produto: </label> <br>
            <input type="text" name="nome" required> <br>
            <label> Preço: <label> <br>
            <input type="text" name="preco" required> <br>
            <label> Categoria: </label> <br>
            <select name="categorias" required>
                <option value = ""></option>

                <?php 

                    // Percorrer todas as categorias encotradas no banco
                    while($linha = mysqli_fetch_assoc($resultado)) {
                ?>

                <option value = "<?php echo$linha['idcategorias'];?>"><?php echo$linha['nome'];?></option>
                <?php
                    }
                ?>
            </select>
            <br><br>
            <button type = "submit"> Cadastrar Produto </button>
        </form>
    </body>
</html>