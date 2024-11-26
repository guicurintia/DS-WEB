<?php
  
$produtos = array("Teclado", "Mouse", "Monitor");
$precos = array(150.00, 80.00, 1200.00);

$array_associativo = array_combine($produtos, $precos);

print_r($array_associativo);

   
?>