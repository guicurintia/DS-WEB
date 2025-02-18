
const caixa = document.getElementById("caixa");

caixa.addEventListener("mouseenter", function() {
  caixa.style.backgroundColor = "red"; // Muda a cor para vermelho
  caixa.style.width = "350px"; // Aumenta o tamanho
  caixa.style.height = "350px"; // Aumenta o tamanho
});

caixa.addEventListener("mouseleave", function() {
  caixa.style.backgroundColor = "blue"; // Volta a cor para azul
  caixa.style.width = "300px"; // Volta o tamanho
  caixa.style.height = "300px"; // Volta o tamanho
});

