<?php
	// Dados para conexão com o banco de dados
	$servername = "localhost";
	$port = "5432";
	$username = "postgres";
	$password = "1234";
	$dbname = "localhost";

	try {
		// Conecta-se ao banco de dados
		$pdo = new PDO("pgsql:host=$servername;port=$port;dbname=$dbname", $username, $password);
		//
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Conectado ao banco de dados"; 
		//linha comentada para resolver erro de JSON gerado errado(tire o comentario para verificar conexão com BD)
	} catch(PDOException $e) {
		echo "Erro ao conectar banco de dados!" ;
		//cancela execução do programa imediatamente, e retorna msg de erro
		die($e->getMessage());	
	}

?>