<?php

require_once "Aluno.php";
require_once "Professor.php";

$aluno = new Aluno("Samuel", 23, "DS");
$aluno->exibirInformacoes();
$aluno->exibirCurso();

echo "<br>";

$professor = new Professor("Luiz", 39, "Back-end");
$professor->exibirInformacoes();
$professor->exibirDiscplina();
?>