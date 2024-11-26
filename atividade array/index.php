<?php
  //ativ1
  include_once('arrays.php');

  foreach($frutas as $frutasLinha){
    echo'frutas: '. $frutasLinha.'<br><br>';
}
//ativ2

foreach($frutas as $frutasLinha){
    echo'frutas: '. $frutasLinha.'<br><br>';
}
//ativ3
sort($frutas);

foreach($frutas as $frutasLinha){
    echo'frutas: '. $frutasLinha.'<br><br>';
}
//ativ4
    echo"Produto: " . $produto["nome"]. "<br><br>";
    echo "Preço: R$ " . number_format($produto["preco"], 2, ',', '.') . "\n". "<br><br>";
    echo"Estoque: " . $produto["estoque"]."<br><br>";
//ativ5

   
echo"Produto: " . $produto["nome"]. "<br><br>";
echo "Preço: R$ " . number_format($produto["preco"], 2, ',', '.') . "\n". "<br><br>";
echo"Estoque: " . $produto["estoque"]."<br><br>";

//ativ6
$unidades_vendidas= 5;

$valor_total = $produto["preco"] * $unidades_vendidas;

echo "Valor total da venda de {$unidades_vendidas} unidades do produto '{$produto["nome"]}': R$ " . number_format($valor_total, 2, ',', '.') . "\n";

//ativ7
$produtos = array("Teclado", "Mouse", "Monitor");
$precos = array(150.00, 80.00, 1200.00);

$array_associativo = array_combine($produtos, $precos);

print_r($array_associativo);
//ativ8

if(in_array("verde",$cores)){
    echo"cor certa";
}else{
    echo "cor errada";
}


//ativ9
    $soma= array_sum($numeros);
    echo "a soma dos numeros é: " . $soma;
   
?>