
function verificarTriangulo(lado1, lado2, lado3) {
    
    if (lado1 + lado2 > lado3 && lado1 + lado3 > lado2 && lado2 + lado3 > lado1) {
        return true;
    }
    return false;
}


function classificarTriangulo(lado1, lado2, lado3) {
    if (lado1 === lado2 && lado2 === lado3) {
        return "Equilátero";
    } else if (lado1 === lado2 || lado2 === lado3 || lado1 === lado3) {
        return "Isósceles";
    } else {
        return "Escaleno";
    }
}


let lado1 = parseFloat(prompt("Digite o comprimento do primeiro lado:"));
let lado2 = parseFloat(prompt("Digite o comprimento do segundo lado:"));
let lado3 = parseFloat(prompt("Digite o comprimento do terceiro lado:"));


if (verificarTriangulo(lado1, lado2, lado3)) {
   
    let tipo = classificarTriangulo(lado1, lado2, lado3);
    alert(`O triângulo é válido e é do tipo ${tipo}.`);
} else {
    alert("Os lados informados não formam um triângulo válido.");
}
