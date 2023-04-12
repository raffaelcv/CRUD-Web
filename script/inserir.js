function enviarDados() {
    // Obtém os valores do formulário
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;
    var senha = document.getElementById("senha").value;
    
    // Limpa os campos do formulário
    document.getElementById("formulario").reset();

    // Exibe mensagem de sucesso
    alert("Dados inseridos com sucesso!");
    
    // Cria um objeto XMLHttpRequest
    var xhttp = new XMLHttpRequest();
  
    // Define o método HTTP e o arquivo PHP que irá receber os dados
    xhttp.open("POST", "php/inserir_dados.php", true);
  
    // Define o cabeçalho da requisição
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
    // Envia os dados do formulário para o arquivo PHP
    xhttp.send("nome=" + nome + "&email=" + email + "&senha=" + senha);
 
}
    
