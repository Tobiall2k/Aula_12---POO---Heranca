<?php

class Funcionario{
    protected string $nome;
    private float $salario;

    public function __construct($nome,$salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function exbirInformacoes(){
        echo "Nome: " .$this->nome. "<br>";
        echo "Salário: R$" .number_format($this->getSalario(), 2, ",", "."). "<br>";
    }
}

?>