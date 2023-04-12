<?php
    require_once 'conexao_bd.php';

    if (isset($_POST["id"])) {
    // Obtém o valor do ID
    $id = $_POST["id"];

    // Verifica se o registro existe
    $sql = "SELECT * FROM usuarios WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    if ($stmt->rowCount() > 0) {
        // Deleta o registro do banco de dados
        $sql = "DELETE FROM usuarios WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);

        if ($stmt->rowCount() > 0) {
            echo "Dados deletados com sucesso!";
        } else {
            echo "Nenhum dado foi deletado!";
        }
    } else {
        echo "ID não encontrado!";
    }
} else {
    echo "ID inválido!";
}
?>