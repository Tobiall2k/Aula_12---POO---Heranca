<?php

require_once "Desenvolvedor.php";
require_once "Gerente.php";

$gerente = new Gerente("Maria", 9000, "Projeto Social");
$gerente->exbirInformacoes();
$gerente->gerenciarEquipe();

echo "<br>";

$desenvolvedor = new Desenvolvedor("Tobias", 4500, "Java");
$desenvolvedor->exbirInformacoes();
$desenvolvedor->programar();
?>