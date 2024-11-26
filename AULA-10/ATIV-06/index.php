<?php
    include_once('arrays.php');

   
    echo"Produto: " . $produto["nome"]. "<br><br>";
    echo "Preço: R$ " . number_format($produto["preco"], 2, ',', '.') . "\n". "<br><br>";
    echo"Estoque: " . $produto["estoque"]."<br><br>";


    $unidades_vendidas= 5;

    $valor_total = $produto["preco"] * $unidades_vendidas;

    echo "Valor total da venda de {$unidades_vendidas} unidades do produto '{$produto["nome"]}': R$ " . number_format($valor_total, 2, ',', '.') . "\n";
   

 
    

   
?>