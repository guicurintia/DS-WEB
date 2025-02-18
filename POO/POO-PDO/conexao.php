<?php

    $db = new PDO("mysql:host=localhost;dbname=pdo", "root", "");

    var_dump($db);
    echo "<br><br>";
    print_r($db);
    echo "<br><br>";
    $dados = $db->query("SELECT * FROM clientes");
    $todos = $dados->fetch(PDO::FETCH_ASSOC);
    print_r($todos);
    echo "<br>";
    echo $todos['email'];

    echo"<br><br>";

    echo "<h2>Exemplo de consulta com muitas linhas</h2>";
    $dados = $db->query("SELECT * FROM clientes");
    $todos = $dados->fetchAll(PDO::FETCH_ASSOC);
    foreach($todos as $linha){
        echo "Linha: ". $linha['id'];
        echo "<br>";
        echo "Nome: ". $linha['nome'];
        echo "<br>";
        echo "Email: ". $linha['email'];
    }




?>