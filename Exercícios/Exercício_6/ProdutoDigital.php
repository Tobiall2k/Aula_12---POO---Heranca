<?php

require_once "Produto.php";

class ProdutoDigital extends Produto{
    private float $tamanhoArquivo;

    public function __construct($nome,$preco,$tamanhoArquivo){
        parent::__construct($nome,$preco);
        $this->tamanhoArquivo = $tamanhoArquivo;
    }

    public function mostrarTamanho(){
        echo "Tamanho Arquivo (MB): " .$this->tamanhoArquivo. "Mb <br>";
    }
}

?>