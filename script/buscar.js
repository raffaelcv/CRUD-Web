function buscarDados() {
    // Obtém os valores do formulário
    var id = document.getElementById("search").value;

    // Cria um objeto XMLHttpRequest
    var xhttp = new XMLHttpRequest();
  
    // Define o método HTTP e o arquivo PHP que irá receber os dados
    xhttp.open("POST", "php/buscar_dados.php", true);
  
    // Define o cabeçalho da requisição
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
    // Define o que fazer quando a resposta do servidor chegar
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // Chama a função para preencher o formulário com os dados retornados
          var response = JSON.parse(this.responseText);
          if ("mensagem" in response) {
            alert(response.mensagem);
            document.getElementById("formulario").reset();
          } else {
            var formulario = document.getElementById("formulario");
            preencherFormulario(response, formulario);
          }
        }
      };
  
    // Envia os dados do formulário para o arquivo PHP
    xhttp.send("id=" + id);
  }
  
  