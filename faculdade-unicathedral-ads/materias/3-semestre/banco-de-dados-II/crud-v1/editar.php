<?php
include 'conexao.php';

// Pega o ID da URL
$id = $_GET['id'];

// 1. SE O USUÁRIO CLICOU EM "ATUALIZAR" (Enviou o formulário)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_novo = $_POST['nome'];
    $email_novo = $_POST['email'];
    
    // Atualiza no banco
    $sql_update = "UPDATE usuarios SET nome='$nome_novo', email='$email_novo' WHERE idusuarios=$id";
    $conn->query($sql_update);
    
    // Volta para o início
    header("Location: index.php");
    exit;
}

// 2. SE O USUÁRIO APENAS ABRIU A PÁGINA (Busca os dados antigos para preencher a tela)
$sql_busca = "SELECT * FROM usuarios WHERE idusuarios=$id";
$resultado = $conn->query($sql_busca);
$usuario = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Cadastro</title>
</head>
<body>
    <h2>Editar Usuário</h2>
    
    <form method="POST">
        <label>Nome:</label>
        <!-- O 'value' preenche a caixinha com o nome que já estava no banco -->
        <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required>
        
        <label>E-mail:</label>
        <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required>
        
        <button type="submit">Atualizar Cadastro</button>
    </form>
    
    <br>
    <a href="index.php">Cancelar e Voltar</a>
</body>
</html>