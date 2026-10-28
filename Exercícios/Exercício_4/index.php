<?php

require_once "Livro.php";
require_once "Revista.php";

$livro = new Livro("Harry Potter e a Pedra Filosofal", 1997, "J.K Rowling");
$livro->mostrarTitulo();
$livro->mostrarLivro();

$revista = new Revista("Revista VEJA", 1968, "Roberto Civita e Mino Carta");
$revista->mostrarTitulo();
$revista->mostrarRevista();
?>