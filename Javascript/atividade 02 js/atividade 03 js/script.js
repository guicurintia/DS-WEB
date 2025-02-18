function string() {
    var string = document.getElementById("nome").value;
    var mensagem = document.getElementById("mensagem");
    mensagem.innerHTML = string.toUpperCase();
}

function porcentagem(){
    var numero = parseFloat(document.getElementById("num").value)
    var porcentagem = parseFloat(document.getElementById("numb").value)
    var mensagem = document.getElementById("mensagem2")
    mensagem.innerHTML = (numero *(porcentagem/100))
}