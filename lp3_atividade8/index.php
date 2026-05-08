<?php

require_once "Veiculo.php";

$v1 = new Veiculo();

$v1->marca = "Red Bull Racing";
$v1->modelo = "RB20";
$v1->ano = 2024;
$v1->qntdCombustivel = 110;
$v1->consumoMedio = 2.9;

$v2 = new Veiculo();

$v2->marca = "Mercedes-AMG";
$v2->modelo = "W15";
$v2->ano = 2024;
$v2->qntdCombustivel = 100;
$v2->consumoMedio = 2.4;


$v3 = new Veiculo();

$v3->marca = "Ferrari";
$v3->modelo = "SF-24";
$v3->ano = 2024;
$v3->qntdCombustivel = 105;
$v3->consumoMedio = 2.7;

echo "<pre>";
print_r($v1);
print_r($v2);
print_r($v3);


echo "<br> Todos os dados são: <br> <br> ";

$v1->exibirInformacoes();
$v1->calcularAutonomia();

$v1->abastecer(40);
$v1->exibirInformacoes();
$v1->calcularAutonomia();

$v2->exibirInformacoes();
$v2->calcularAutonomia();

$v2->abastecer(30);
$v2->exibirInformacoes();
$v2->calcularAutonomia();

$v3->exibirInformacoes();
$v3->calcularAutonomia();

$v3->abastecer(20);
$v3->exibirInformacoes();
$v3 ->calcularAutonomia();

?>