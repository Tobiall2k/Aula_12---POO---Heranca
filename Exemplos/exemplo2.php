<?php

class Pessoa{
    protected string $nome = 'Samuel';
}

class Aluno extends Pessoa{
    public function apresentar(){
        echo "Olá! Meu nome é ". $this->nome;
    }
}

$aluno = new Aluno();
$aluno->apresentar();
?>