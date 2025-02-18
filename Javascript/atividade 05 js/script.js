function idade(){
    var idade = document.getElementById("numero").value
    var mensagem = document.getElementById("mensagem")
    if (idade >= 18){
        mensagem.innerHTML = "voce é maior de idade"
    } else{
        mensagem.innerHTML = "voce é menor de idade"
    }
    
    
}

function numeros(){
    var num = parseFloat(document.getElementById("numero1").value)
    var mensagem = document.getElementById("mensagem2")
    if (num > 0){
        mensagem.innerHTML = "seu numero é positivo"
    }else if(num < 0){
        mensagem.innerHTML = "seu numero é negativo"
    }else{
        mensagem.innerHTML = "seu numero é nulo"
    }
 }
