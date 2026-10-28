<?php

class Publicacao{
    protected string $titulo;
    private int $anoPublicacao;

    public function __construct($titulo,$anoPublicacao){
        $this->titulo = $titulo;
        $this->anoPublicacao = $anoPublicacao;
    }

    public function mostrarTitulo(){
        echo $this->titulo. " | " .$this->anoPublicacao. " | ";
    }
}

?>