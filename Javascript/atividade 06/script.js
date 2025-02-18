var capital = Number.parseInt(prompt("digite o capital"))
    var juros = Number.parseFloat(prompt("digite os juros"))
    var tempo =  Number.parseInt(prompt("digite o tempo de investimento"))
    //verificando o tipo de variável
    console.log(typeof(capital))

    montante= (capital  * (1 + (juros/100)) ** tempo)
    alert("montante final é:" +montante.toFixed(2))


