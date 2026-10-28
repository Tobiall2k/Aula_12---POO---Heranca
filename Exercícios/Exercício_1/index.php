<?php

require_once "Aluno.php";

$aluno1 = new Aluno("Tobias", 17, "Ciência da Computação");
$aluno1->exibirInformacoes();
$aluno1->exibirCurso();

echo "<br>";

$aluno2 = new Aluno("Maria", 16, "Nutrição");
$aluno2->exibirInformacoes();
$aluno2->exibirCurso()

?>