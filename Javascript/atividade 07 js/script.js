function parOuImpar(){
    var numero = document.getElementById("numero").value;
    numero= Number(numero)
    if (numero % 2 === 0){
        document.getElementById("resImp").innerHTML = "O número " + numero + " é par.";
    }else{
        document.getElementById("resImp").innerHTML = "O número " + numero + " é impar.";
    }
}

function maior(){
    var num1= parseFloat(document.getElementById("num1").value)
    var num2= parseFloat(document.getElementById("num2").value)
    var num3= parseFloat(document.getElementById("num3").value)
    var mensagem = document.getElementById("mensagem")

    if(num1 > num2 && num1 > num3){
        mensagem.innerHTML = "numero: "+ num1 + " é maior"
    }else if(num2 > num1 && num2 > num3){
        mensagem.innerHTML = "numero: "+ num2 + " é maior"
    }else{
        mensagem.innerHTML = "numero: "+ num3 + " é maior"
    }
        

}
