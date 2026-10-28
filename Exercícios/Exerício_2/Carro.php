<?php

require_once "Veiculo.php";

class Carro extends Veiculo{
    private int $quantPortas;

    public function __construct($marca,$ano,$quantPortas){
        parent::__construct($marca,$ano);
        $this->quantPortas = $quantPortas;
    }

    public function mostrarCarro(){
        echo "Quantidade de Portas: " .$this->quantPortas. "<br>";
    }
}

?>