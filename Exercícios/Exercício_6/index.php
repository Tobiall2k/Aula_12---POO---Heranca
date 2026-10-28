<?php

require_once "ProdutoDigital.php";
require_once "ProdutoFisico.php";

$produtoDigital = new ProdutoDigital("Curso Claude", 150, 140);
$produtoDigital->exibirInfo();
$produtoDigital->mostrarTamanho();

echo "<br>";

$produtoFisico = new ProdutoFisico("PS5", 3650, 5);
$produtoFisico->exibirInfo();
$produtoFisico->mostrarPeso();
?>