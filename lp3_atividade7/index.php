<?php

require_once "Funcionario.php";

$f1 = new Funcionario();

$f1->codigo = 195;
$f1->nome = "Luiz";
$f1->salario = 15000;
$f1->cargaHoraria = 10;


$f2 = new Funcionario();

$f2->codigo = 250;
$f2->nome = "Otavio";
$f2->salario = 20000;
$f2->cargaHoraria = 15;


$f3 = new Funcionario();

$f3->codigo = 375;
$f3->nome = "Matheus";
$f3->salario = 12000;
$f3->cargaHoraria = 20;


echo "<pre>";
print_r($f1);
print_r($f2);
print_r($f3);


echo "<br> Todos os dados atualizados são: <br> <br> ";

$f1->exibirDados();
$f1->aumentarSalario(10);
$f2->exibirDados();
$f2->aumentarSalario(15);
$f3->exibirDados();
$f3->aumentarSalario(5);

?>