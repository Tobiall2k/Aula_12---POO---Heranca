<?php

class Pessoa{
    private string $nome = 'Samuel';

    public function getNome(){
        return $this->nome;
    }
}

class Aluno extends Pessoa{
    public function apresentar(){
        echo "Olá! Meu nome é ". $this->getNome();
    }
}

$aluno = new Aluno();
$aluno->apresentar();

?>