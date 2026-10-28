<?php

require_once "Moto.php";
require_once "Carro.php";

$carro = new Carro("Chevrolet", 2011, 4);
$carro->apresentarVeiculo();
$carro->mostrarCarro();

echo "<br>";

$moto = new Moto("Yamaha", 2019, 600);
$moto->apresentarVeiculo();
$moto->mostrarMoto();

?>