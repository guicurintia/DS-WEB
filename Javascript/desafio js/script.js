
function criarCartao(){
    var cartao= document.createElement("div");
    cartao.textContent = document.getElementById("nome").value + " - " + document.getElementById("card").value;
    var cartoes = document.getElementById("cartoes");
    cartoes.appendChild(cartao);
    cartao.style.backgroundColor = "#f9f9f9";
    cartao.style.border = "2px solid #ccc";
    cartao.style.borderRadius = "20px";
    cartao.style.margin = "20px auto";
    cartao.style.padding = "50px";
    cartao.style.color = "#333";
    cartao.style.width = "200px";


    var botao= document.createElement("button");
    botao.textContent = "remover";
    botao.style.backgroundColor = "rgb(255,0,0)";
    botao.style.marginTop = "10px"
    botao.style.border = "2px solid"
    botao.style.width = "20px";
    botao.style.height = "20px";

    botao.addEventListener("click", function(){
        cartao.remove();
    });
    cartao.appendChild(botao);
    
}



