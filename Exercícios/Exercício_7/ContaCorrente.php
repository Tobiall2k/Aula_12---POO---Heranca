<?php

require_once "ContaBancaria.php";

class ContaCorrente extends ContaBancaria {
    private int $nCartao;

    public function __construct($titular, $saldo, $nCartao){
        parent::__construct($titular, $saldo);
        $this->nCartao = $nCartao;
    }

    public function mostrarCartao(){
        echo " " .$this->nCartao. "<br>";
    }
}

?>