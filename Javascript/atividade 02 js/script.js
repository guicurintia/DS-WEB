//atividade 01

function mostrarBoasVindas() {
    var string = document.getElementById("nome").value;
    var mensagem = document.getElementById("mensagem");
    mensagem.innerHTML = string+" seja bem vindo";
}

//atividade 02

function parOuImpar(){
    var numero = document.getElementById("numero").value;
    numero= Number(numero)
    if (numero % 2 === 0){
        document.getElementById("resImp").innerHTML = "O número " + numero + " é par.";
    }else{
        document.getElementById("resImp").innerHTML = "O número " + numero + " é impar.";
    }
}







