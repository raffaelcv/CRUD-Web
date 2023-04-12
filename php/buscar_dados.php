<?php
    require_once 'conexao_bd.php';
    
    // Obtém o valor do ID a ser buscado
    $id = $_POST["id"];

    // Query para buscar os dados do usuário com o ID informado
    $sql = "SELECT * FROM usuarios WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        // Converte os dados para JSON
        $json = json_encode($row);
        
        // Retorna o JSON como resposta
        echo $json;
    } else {
        // Se não encontrou nenhum registro com o ID informado, retorna uma mensagem de erro
        $json = json_encode(array("mensagem" => "Registro nao encontrado."));
        echo $json;
    }
?>