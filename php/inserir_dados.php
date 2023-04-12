<?php
    require_once 'conexao_bd.php';

    // Obtém os valores do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Insere os dados no banco de dados
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $email, $senha]);

    if ($stmt) {
    echo "Dados salvos com sucesso!";
    } else {
    echo "Erro ao salvar os dados";
    }
?>

