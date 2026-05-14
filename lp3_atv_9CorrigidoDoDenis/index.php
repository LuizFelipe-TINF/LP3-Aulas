<?php
require_once "Livro.php";

$l1 = new Livro();
$l1->titulo="O Pequeno Prícipe";
$l1->autor="Leonardo";
$l1->qtdePaginas=50;
$l1->qtdeExemplares=1;
$l1->exibirInformacoes();
$l1->emprestarLivro();
$l1->exibirInformacoes();
$l1->emprestarLivro();
$l1->exibirInformacoes();

$l2 = new Livro();
$l2->titulo="Para todos garotos que já amei";
$l2->autor="Luiz";
$l2->qtdePaginas=180;
$l2->qtdeExemplares=35;
$l2->exibirInformacoes();

$l2-> verificarDisponibilidade();
$l1-> verificarDisponibilidade();

$l3 = new Livro();
$l3->titulo="O chamado de Cthulhu";
$l3->autor="H.P Lovecraft";
$l3->qtdePaginas=359;
$l3->qtdeExemplares=14;
$l3->exibirInformacoes();

$l3-> verificarDisponibilidade();

$l2-> compararPaginas($l3);

$l2-> compararPaginas($l1);