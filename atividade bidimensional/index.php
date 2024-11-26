<?php
//ativ1
$alunos = array(
array('nome' => 'batata', 'preço' => 4, 'estoque' => 20),
array('nome' => 'cenoura', 'preço' => 5, 'estoque' => 15),
array('nome' => 'pepino', 'preço' => 8, 'estoque' => 10)
);
echo $alunos[0]['nome']. '<br><br>'; 
echo $alunos[0]['preço']. '<br><br>';
echo $alunos[1]['nome']. '<br><br>'; 
echo $alunos[1]['preço']. '<br><br>';
echo $alunos[2]['nome']. '<br><br>'; 
echo $alunos[2]['preço']. '<br><br>';

//ativ2
$produtos = array(
array('nome' => 'batata', 'preço' => 4, 'estoque' => 20),
array('nome' => 'cenoura', 'preço' => 5, 'estoque' => 15),
array('nome' => 'pepino', 'preço' => 8, 'estoque' => 10)
);
$valor_total_estoque = 0;

foreach ($produtos as $produto) {
    $valor_total_estoque += $produto["preço"] * $produto["estoque"];
}
echo "O valor total em estoque de todos os produtos é: R$ " . number_format($valor_total_estoque, 2, ',', '.') . "\n" . '<br><br>';
//ativ3

$alunos = array(
    array('nome' => 'Ana', 'matematica' => 8, 'portugues' => 7),
    array('nome' => 'Bruno', 'matematica' => 6, 'portugues' => 9),
    array('nome' => 'Carlos', 'matematica' => 7, 'portugues' => 8)
);

// Exibindo o nome de cada aluno e suas notas
foreach ($alunos as $aluno) {
    echo "Nome do Aluno: " . $aluno['nome'] . "\n" . '<br><br>';
    echo "Nota de Matemática: " . $aluno['matematica'] . "\n";
    echo "Nota de Português: " . $aluno['portugues'] . "\n";
    
    // Calculando a média de cada aluno
    $media = ($aluno['matematica'] + $aluno['portugues']) / 2;
    echo "Média: " . number_format($media, 2, ',', '.') . "\n\n";
}

?>