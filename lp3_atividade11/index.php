<?php

require_once "Produto.php";
require_once "ProdutoFisico.php";
require_once "ProdutoDigital.php";

$pf1 = new ProdutoFisico();

$pf1->setCodigo(1);
$pf1->setNome("Notebook");
$pf1->setDescricao("Notebook Gamer");
$pf1->setPrecoBase(5000);
$pf1->setQuantidadeEstoque(10);
$pf1->setIsAtivo(true);

$pf1->setPeso(2.5);
$pf1->setDimensoesCxLxA("0.40x0.30x0.05");
$pf1->setCustoFreteFixo(50);
$pf1->setTransportadoraParceira("Correios");

$pf1->adicionarEstoque(5);
$pf1->baixarEstoque(3);
$pf1->aplicarDesconto(10);

echo "Preço de Venda: R$ " . $pf1->calcularPrecoVenda() . "<br>";

echo "Disponível: ";

if ($pf1->verificarDisponibilidade() == true) {

    echo "Sim <br>";

} else {

    echo "Não <br>";

}


echo "Volume Cúbico: " . $pf1->calcularVolumeCubico() . "<br>";
echo "Prazo de Entrega: " . $pf1->estimarPrazoEntrega("38740000") . " dias<br><br>";


$pd1 = new ProdutoDigital();

$pd1->setCodigo(2);
$pd1->setNome("Curso de PHP");
$pd1->setDescricao("Curso completo de PHP");
$pd1->setPrecoBase(150);
$pd1->setQuantidadeEstoque(0);
$pd1->setIsAtivo(true);

$pd1->setTamanhoArquivoMB(800);
$pd1->setFormatoArquivo("zip");
$pd1->setLimiteDownloadsPermitidos(5);
$pd1->setLinkServidorNuvem("https://servidor.com/downloads");

echo "Preço de Venda: R$ " . $pd1->calcularPrecoVenda() . "<br>";

echo "Disponível: ";

if ($pd1->verificarDisponibilidade() == true) {

    echo "Sim <br>";

} else {

    echo "Não <br>";

}



echo "Link Exclusivo: ";
echo $pd1->gerarLinkExclusivo("12345");

echo "<br><br>";

$pd1->revogarAcesso("12345");

echo "<pre>";

print_r($pf1);
print_r($pd1);