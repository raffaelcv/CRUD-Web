<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
    <link rel="stylesheet" href="style/style.css">
	<title>Formulario de cadastro</title>
	<script src="script/inserir.js"></script>
	<script src="script/buscar.js"></script>
	<script src="script/alterar.js"></script>
	<script src="script/deletar.js"></script>
	<script src="script/preencherFormulario.js"></script>
</head>
<body>
    <div class="caixa-titulo">
	<h1><?php
		echo "Formulário de cadastro \u{1F5C9}"
		?></h1>
    </div>
	<form id="identificacao">
	    <label for="id">Buscar ID:</label>
		<input type="text" id="search" maxlength="6" step="any"><br>
		<button type="button" onclick="buscarDados()">Buscar</button>
	</form>
    <form id="formulario">
		<label for="nome">Nome:</label>
		<input type="text" id="nome"><br>

		<label for="email">Email:</label>
		<input type="email" id="email"><br>

		<label for="senha">Senha:</label>
		<input type="password" id="senha"><br>
		
		<button type="button" onclick="enviarDados()">Inserir</button>
		<button type="button" onclick="deletarDados()">Deletar</button>
		<button type="button" onclick="alterarDados()">Editar</button>
	</form>
</body>
</html>
