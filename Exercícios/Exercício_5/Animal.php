<?php

class Animal{
    protected string $nome;
    private int $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade= $idade;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function exibirInfo(){
        echo "Nome: " .$this->nome. "<br>";
        echo "Idade: " .$this->getIdade(). "<br>";
    }
}

?>