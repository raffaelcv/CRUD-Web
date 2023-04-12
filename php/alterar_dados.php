<?php
    require_once 'conexao_bd.php';

    if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["senha"])) {
    // Obtém os valores do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Atualiza os dados no banco de dados
    $sql = "UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $email, $senha, $_POST["id"]]);

    if ($stmt->rowCount() > 0) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Nenhum dado foi atualizado!";
    }
} else {
    echo "Preencha todos os campos!";
}
?>
