    
    const campoTexto = document.getElementById("campoTexto");
    const exibicaoTexto = document.getElementById("exibicaoTexto");

   
    campoTexto.addEventListener("input", function() {
      exibicaoTexto.textContent = campoTexto.value; 
    });