<?php


require_once 'Personagem.php';
require_once 'Sim.php';
require_once 'Npc.php';
require_once 'Casa.php';
require_once 'Comodo.php';




$sim1 = new Sim("Luiz", "Masculino");
$sim1->mostrarDados();
$sim1->interagir();
$sim1->trabalhar(40);
$sim1->trabalhar(40);
$sim1->mostrarDados();
$sim1->trabalhar(30);
$sim1->mostrarDados();

$npc = new Npc("João", "construtor");
$npc->interagir();

$casa = new Casa("Casa do Luiz", $sim1, $espacos);

$Comodo = new Comodo("Sala", 8);
$Comodo = new Comodo("Cozinha", 12);
$Comodo = new Comodo("Quarto", 9);
$Comodo = new Comodo("Banheiro", 4);

$relatorio->imprimirRelatorio();