<?php
    include_once('arrays.php');

   
    echo"Produto: " . $produto["nome"]. "<br><br>";
    echo "Preço: R$ " . number_format($produto["preco"], 2, ',', '.') . "\n". "<br><br>";
    echo"Estoque: " . $produto["estoque"]."<br><br>";
   

 
    

   
?>