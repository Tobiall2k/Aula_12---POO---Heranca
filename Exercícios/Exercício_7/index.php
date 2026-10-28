<?php

require_once "ContaCorrente.php";
require_once "ContaPoupanca.php";



$contaCorrente = new ContaCorrente("Tobias", 1000, 12474656);
$contaCorrente->exibirInfo();
$contaCorrente->mostrarCartao();
$contaCorrente->depositar(500);
$contaCorrente->exibirInfo();
$contaCorrente->mostrarCartao();
$contaCorrente->sacar(200);
$contaCorrente->exibirInfo();
$contaCorrente->mostrarCartao();


$contaPoupanca = new ContaPoupanca("Maria", 2000, "Sonho de Consumo");
$contaPoupanca->exibirInfo();
$contaPoupanca->mostrarObjetivo();

?>