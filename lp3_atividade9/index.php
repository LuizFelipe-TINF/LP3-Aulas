<?php

require_once "Livro.php";

$l1 = new Livro();

$l1->titulo = "Dom Casmurro";
$l1->autor = "Machado de Assis";
$l1->qtdePaginas = 256;
$l1->qtdeExemplares = 12;


$l2 = new Livro();

$l2->titulo = "O Pequeno Príncipe";
$l2->autor = "Antoine de Saint-Exupéry";
$l2->qtdePaginas = 96;
$l2->qtdeExemplares = 8;


$l3 = new Livro();

$l3->titulo = "1984";
$l3->autor = "George Orwell";
$l3->qtdePaginas = 328;
$l3->qtdeExemplares = 5;

echo "<pre>";
print_r($l1);
print_r($l2);
print_r($l3);


echo "<br> Todos os dados são: <br> <br> ";


$l1->exibirInformacoes();
$l1->emprestarLivro();
$l1->devolverLivro();


$l2->exibirInformacoes();
$l2->verificarDisponibilidade();


$l3->exibirInformacoes();
$l3->alterarQuantidadePaginas(50);


$l3->exibirInformacoes();
$l3->compararPaginas($l2);

?>