function senha(){
    var senha = parseInt(document.getElementById("senha").value)
    var login = document.getElementById("usuario").value
    var mensagem = document.getElementById("mensagem")
    if ((senha != "12345") || (login != "admin")){
        mensagem.innerHTML =  "erro"
    }else{
        mensagem.innerHTML ="Boas Vindas"
    }

}

function calculo(){
    var num1 = parseFloat(document.getElementById("numero").value)
    var num2 = parseFloat(document.getElementById("numero2").value)
    var operação = document.getElementById("calculo").value
    var mensagem = document.getElementById("mensagem2")
    if (operação == "+"){
        mensagem.innerHTML = (num1 + num2)
    }else if(operação == "-"){
        mensagem.innerHTML = (num1 - num2)
    }else if(operação == "*"){
        mensagem.innerHTML = (num1 * num2)
    }else{
        mensagem.innerHTML = (num1 / num2)
    }
}