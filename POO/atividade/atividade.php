<?php

class esportes{
    public $quadra;
    public $bola ;
    public $tempo;
    public $jogadores ;
    public $estratégia;

    public function praticar(){
        return "Voce praticou um esporte";
    }

    
    public function competir(){
        return "Voce começou a competir";
    }

    
    public function lecionar(){
        return "Voce ensinou um novo esporte";

}
    
}

$futebol = new esportes();
$futebol->nome = "futsal";
echo $futebol->praticar();
echo "<br>";
echo $futebol->competir();
echo "<br>";
echo $futebol->lecionar();


echo "<br>";
echo "<br>";

class mamiferos{
    public $habitat;
    public $pele ;
    public $pata;
    public $passivo ;
    public $agressivo;

    public function caçar(){
        return "Voce caçou seu alimento";
    }

    
    public function procriar(){
        return "Voce começou a pocriar";

    }

    
    public function gestar(){
        return "Voce está em periodo de gestação";

}
    
}

$animal = new mamiferos();
$animal->nome = "cachorro";
echo $animal->caçar();
echo "<br>";
echo $animal->procriar();
echo "<br>";
echo $animal->gestar();

echo "<br>";
echo "<br>";

class bolas{
    public $cor;
    public $modelo ;
    public $marca;
    public $material ;
    public $tipo;

    public function chutar(){
        return "Voce chutou a bola";
    }

    
    public function driblar(){
        return "Voce driblou alguem";
    }

    
    public function lançar(){
        return "Voce cruzou a bola";

}
    
}

$bola = new bolas();
$bola->nome = "handebol";
echo $bola->chutar();
echo "<br>";
echo $bola->driblar();
echo "<br>";
echo $bola->lançar();

echo "<br>";
echo "<br>";

class lampada{
    public $cor;
    public $modelo ;
    public $voltagem;
    public $tipo ;
    public $potência;

    public function ligar(){
        return "Voce ligou a luz";
    }

    
    public function desligar(){
        return "Voce desligou a luz";
    }

    
    public function alterouaCor(){
        return "Voce alterou a cor da luz";

}
    
}

$luz = new lampada();
$luz->nome = "led";
echo $luz->ligar();
echo "<br>";
echo $luz->desligar();
echo "<br>";
echo $luz->alterouaCor();

echo "<br>";
echo "<br>";

class filmes{
    public $editora;
    public $produtora ;
    public $genero;
    public $classificação ;
    public $duração;

    public function assistir(){
        return "Voce assistiu o filme";
    }

    
    public function divulgar(){
        return "Voce fez um post sobre o filme";
    }

    
    public function gravar(){
        return "Voce gravou o filme";
}
    
}

$filme = new filmes();
$filme->nome = "Cinderela";
echo $filme->divulgar();
echo "<br>";
echo $filme->assistir();
echo "<br>";
echo $filme->gravar();

echo "<br>";
echo "<br>";

class contaBancaria{
    public $conta;
    public $nome ;
    public $saldo;

    public function exibirDados(){
        return "Nome do titular: {$this->nome} <br>" .
                "Conta do Titular: {$this->conta} <br>" .
                "Saldo da Conta: {$this->saldo} <br>";


    }

    public function entrar(){
        return "Entrou na conta";
    }

    public function exibirSaldo(){
        return "O saldo é: R$".$this->saldo. ",00";
    }
    public function depositar($deposito){
        $this->saldo +=$deposito;
        return "Esse é seu novo saldo" .$this->saldo;
    }

    
    public function sacar($saque){
        $this-> saldo-= $saque;
        return "Este é o novo saldo: " .$this->saldo; 
}
    
}
echo "<br>";


$guilherme = new contaBancaria();
$guilherme->nome = "Guilherme Oliveira";
$guilherme->saldo = 5000000;
$guilherme->conta = "12365487";
echo $guilherme->entrar();
echo "<br>";
echo $guilherme-> exibirDados();
echo "<br>";
echo $guilherme->exibirSaldo();
echo "<br>";
echo $guilherme->sacar(20);



echo "<br>";

$maciel = new contaBancaria();
$maciel->nome = "Matheus Maciel";
$maciel->saldo = "4.000.000.000";
$maciel->conta = "97863524";
echo $maciel->entrar();
echo "<br>";
echo $maciel-> exibirDados();

echo "<br>";

$arthur = new contaBancaria();
$arthur->nome = "Arthur Ernane";
$arthur->saldo = "5.000.000";
$arthur->conta = "56487231";
echo $arthur->entrar();
echo "<br>";
echo $arthur-> exibirDados();
echo "<br>";







?>