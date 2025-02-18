<?php
    class Pessoa{
        public $nome;
        protected $idade = 17;
    }
    class Funcionario extends Pessoa{
        public $sal;
        protected function calcularBonus(){
            return '';
        }
    }
    class Gerente extends Funcionario{
        public function calcularBonus(){
            $this->sal *= 1.20;
            return $this->sal;
        }
    }

    class Desenvolvedor extends Funcionario{
        public function calcularBonus(){
            $this->sal *= 1.10;
            return $this->sal;
        }
    }

    $desenvolvedor = new Desenvolvedor();

    $desenvolvedor->nome = "Guilherme";
    $desenvolvedor->sal = 1516;
    echo $desenvolvedor->calcularBonus();
?>