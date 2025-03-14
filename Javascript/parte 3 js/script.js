var contadorCliques = 0;

function contarCliques() {
    contadorCliques++;
    document.getElementById("contador").textContent = contadorCliques;
}

window.onload = function() {
    const div = document.createElement("div");
    div.innerHTML = "<h1>Bem-vindo à nossa página!</h1>";
    div.style.cssText = "background-color: lightseagreen; padding: 10px; text-align: center; font-size: 24px; position: fixed; top: 0; width: 100%; z-index: 1000;";
    document.body.appendChild(div);
};