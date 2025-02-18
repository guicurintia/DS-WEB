<?php
    abstract class Produto{
        public $nome;
        public $preco;
        protected $estoque;
        public function setEstoque($a){
            $this->estoque = $a;
        }

        protected function calcularDesconto(){
            return $this->preco;
        }
    }
    class Eletronico extends Produto{
        public function calcularDesconto(){
            if($this->estoque < 5){
                $this->preco *= 0.90;
            }

            $this->preco *= 0.90;
            return $this->preco;
        }
    }
    class Roupa extends Produto{
        public function calcularDesconto(){
            if($this->estoque < 5){
                $this->preco *=0.90;
            }
            $this->preco *= 0.80;
            return $this->preco;
        }
    }
    $airFryer = new Eletronico();
    $airFryer->nome= "Air Fryer";
    $airFryer->preco = 200;
    $airFryer->setEstoque(20);
    echo $airFryer->calcularDesconto();

    $calca = new Roupa();
    $calca->nome= "Calça Jeans";
    $calca->preco = 120;
    $calca->setEstoque(3);
    echo $camisa->calcularDesconto();
?>