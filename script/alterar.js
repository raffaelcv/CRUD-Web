function alterarDados() {
    // Obtém o valor do ID buscado anteriormente
    var id = document.getElementById("search").value;

    // Obtém os valores do formulário
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;
    var senha = document.getElementById("senha").value;

    // Exibe mensagem de sucesso
    alert("Dados alterados com sucesso!");

    // Cria um objeto XMLHttpRequest
    var xhttp = new XMLHttpRequest();

    // Define o método HTTP e o arquivo PHP que irá receber os dados
    xhttp.open("POST", "php/alterar_dados.php", true);

    // Define o cabeçalho da requisição
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
    // Envia os dados do formulário e o ID para o arquivo PHP
    xhttp.send("id=" + id + "&nome=" + nome + "&email=" + email + "&senha=" + senha);
}