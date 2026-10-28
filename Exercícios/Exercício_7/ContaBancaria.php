<?php

class ContaBancaria{
    protected string $titular;
    private float $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor){
        $this->saldo += $valor;
    }

    public function sacar($valor){
        if ($valor > $this->saldo){
            echo "Saldo insuficiente!";
        } else {
            $this->saldo -= $valor;
        }
    }
    
    public function getSaldo(){
        return $this->saldo;
    }

    public function exibirInfo(){
        echo "Titular: " .$this->titular. " | Saldo: " .number_format($this->saldo, 2, ",", "."). " | ";
    }
}

?>