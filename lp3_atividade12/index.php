<?php

require_once "Produto.php";
require_once "ProdutoFisico.php";
require_once "ProdutoDigital.php";

$pf1 = new ProdutoFisico(1, "Notebook", "Notebook Gamer", 5000, 10, true, 2.5, "0.40x0.30x0.05", 50, "Correios");

$pf1->adicionarEstoque(5);
$pf1->baixarEstoque(3);
$pf1->aplicarDesconto(10);

echo "<h2>Produto Físico</h2>";

echo "Preço de Venda: R$ " . $pf1->calcularPrecoVenda() . "<br>";

echo "Disponível: ";
echo $pf1->verificarDisponibilidade() ? "Sim" : "Não";

echo "<br>";

echo "Volume Cúbico: " . $pf1->calcularVolumeCubico() . "<br>";

echo "Prazo de Entrega: " .
    $pf1->estimarPrazoEntrega("38740000") .
    " dias<br><br>";



$pd1 = new ProdutoDigital(2, "Curso de PHP", "Curso completo de PHP", 150, 0, true, 800, "zip", 5, "https://servidor.com/downloads");

echo "<h2>Produto Digital</h2>";

echo "Preço de Venda: R$ " . $pd1->calcularPrecoVenda() . "<br>";

echo "Disponível: ";
echo $pd1->verificarDisponibilidade() ? "Sim" : "Não";

echo "<br>";

echo "Link Exclusivo:<br>";
echo $pd1->gerarLinkExclusivo("12345");

echo "<br><br>";

$pd1->revogarAcesso("12345");

echo "<hr>";

echo "<pre>";
print_r($pf1);
print_r($pd1);
echo "</pre>";