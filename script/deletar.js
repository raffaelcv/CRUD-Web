function deletarDados() {
    // Obtém o valor do campo de busca (ID)
    var id = document.getElementById("search").value;

    // Limpa o campo do ID
    document.getElementById("identificacao").reset();
    
    // Cria um objeto XMLHttpRequest
    var xhttp = new XMLHttpRequest();

    // Define o método HTTP e o arquivo PHP que irá receber os dados
    xhttp.open("POST", "php/deletar_dados.php", true);

    // Define o cabeçalho da requisição
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
    // Define a função a ser executada quando a requisição retornar
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Exibe a mensagem de retorno do PHP
            alert(this.responseText);
            // Limpa o formulário
            document.getElementById("formulario").reset();
        }
    };

    // Envia os dados do formulário para o arquivo PHP
    xhttp.send("id=" + id);
}