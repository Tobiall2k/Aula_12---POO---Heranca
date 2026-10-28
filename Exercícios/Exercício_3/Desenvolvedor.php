<?php

require_once "Funcionario.php";

class Desenvolvedor extends Funcionario{
    private string $langPrincipal;

    public function __construct($nome, $salario, $langPrincipal){
        parent::__construct($nome, $salario);
        $this->langPrincipal = $langPrincipal;
    }

    public function programar(){
        echo "Linguagem Favorita: " .$this->langPrincipal. "<br>";
        echo "O programador está programando...<br>";
    }
}

?>