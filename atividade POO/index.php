<?php

class Pessoa {
    public $nome = "Rasmus";
    protected $idade = "48"

    public function getNome(){
        return $this->$nome;
    }

    public function setIdade(){
        return $this->$idade;
    }
   
}

class funcionario extends Pessoa{
        public function validar():bool {
        $numeroCPF $this->getNumero
        return true;
        }


}