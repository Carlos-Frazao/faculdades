<?php
// Traz o código de conexão para cá
include 'conexao.php';

// Cria a instrução SQL para buscar todos os usuários
$sql = "SELECT * FROM usuarios";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>CRUD ADS - Usuários</title>
</head>
<body>
    <h2>Cadastrar Novo Usuário (Create)</h2>
    <!-- O formulário envia os dados para o arquivo criar.php via método POST -->
    <form action="criar.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        
        <label>E-mail:</label>
        <input type="email" name="email" required>
        
        <button type="submit">Salvar</button>
    </form>

    <hr>

    <h2>Lista de Usuários (Read)</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
        
        <?php
        // Loop para imprimir cada linha que o banco retornou
        if ($resultado->num_rows > 0) {
            while($linha = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $linha['idusuarios'] . "</td>";
                echo "<td>" . $linha['nome'] . "</td>";
                echo "<td>" . $linha['email'] . "</td>";
                echo "<td>
                        <a href='editar.php?id=" . $linha['idusuarios'] . "'>Editar</a> | 
                        <a href='deletar.php?id=" . $linha['idusuarios'] . "'>Deletar</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhum usuário cadastrado.</td></tr>";
        }
        ?>
    </table>
</body>
</html>