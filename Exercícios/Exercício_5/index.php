<?php

require_once "Gato.php";
require_once "Cachorro.php";

$cachorro = new Cachorro("Nina", 10, "Vira-lata");
$cachorro->exibirInfo();
$cachorro->latir();

echo "<br>";

$gato = new Gato("Pipoca", 6, "Preto e Branco");
$gato->exibirInfo();
$gato->miar();
?>