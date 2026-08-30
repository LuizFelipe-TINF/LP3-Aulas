<?php

require_once "Personagem.php";
require_once "Jogador.php";
require_once "Inimigo.php";
require_once "Partida.php";

echo "<h1>SISTEMA DE RPG</h1>";


// ==========================================
// JOGADOR
// ==========================================

echo "<h2>JOGADOR</h2>";

$jogador = new Jogador(
    "Arthur",
    "Guerreiro",
    1,
    100,
    100
);

echo "<h3>Dados iniciais</h3>";
$jogador->mostrarDados();

echo "<br>";

$jogador->interagir();

echo "<br>";

$dano = $jogador->atacar();

echo "Dano do ataque normal: {$dano}<br>";

echo "<br>";

$danoHabilidade = $jogador->usarHabilidade();

echo "Dano da habilidade: {$danoHabilidade}<br>";

echo "<br>";

echo "<h3>Dados após usar habilidade</h3>";
$jogador->mostrarDados();


// ==========================================
// INIMIGOS
// ==========================================

echo "<hr>";
echo "<h2>INIMIGOS</h2>";

$goblin = new Inimigo(
    "Gruk",
    "Goblin",
    1,
    30,
    10
);

$orc = new Inimigo(
    "Gorak",
    "Orc",
    2,
    50,
    15
);

$dragao = new Inimigo(
    "Drakon",
    "Dragão",
    3,
    100,
    25
);


// Interações

$goblin->interagir();
$orc->interagir();
$dragao->interagir();

echo "<br>";


// Dados

echo "<h3>Dados dos inimigos</h3>";

$goblin->mostrarDados();

echo "<hr>";

$orc->mostrarDados();

echo "<hr>";

$dragao->mostrarDados();


// ==========================================
// PARTIDA
// ==========================================

echo "<hr>";
echo "<h2>PARTIDA</h2>";

$partida = new Partida(
    "A Batalha Final",
    $jogador
);


// Adicionando inimigos

$partida->adicionarInimigo($goblin);
$partida->adicionarInimigo($orc);
$partida->adicionarInimigo($dragao);


// Iniciar

$partida->iniciar();


// ==========================================
// ATAQUES
// ==========================================

echo "<hr>";
echo "<h2>COMBATE</h2>";


// Ataca o Goblin
$partida->atacarInimigo(0);


// Ataca o Orc
$partida->atacarInimigo(1);


// Usa habilidade contra o Dragão
$partida->atacarComHabilidade(2);


// Mostra dados dos inimigos

echo "<h3>Vida dos inimigos após os ataques</h3>";

$partida->mostrarInimigos();


// ==========================================
// INIMIGO ATACA O JOGADOR
// ==========================================

echo "<hr>";
echo "<h2>INIMIGO ATACANDO</h2>";

$partida->receberAtaqueInimigo(2);

echo "<h3>Dados do jogador após receber dano</h3>";

$jogador->mostrarDados();


// Receber mais dano

$partida->receberAtaqueInimigo(2);

$partida->receberAtaqueInimigo(2);

echo "<h3>Dados do jogador após receber novos danos</h3>";

$jogador->mostrarDados();


// ==========================================
// VERIFICAR SE ESTÁ VIVO
// ==========================================

echo "<br>";

if ($jogador->estaVivo()) {
    echo "O jogador continua vivo!<br>";
} else {
    echo "O jogador está derrotado!<br>";
}


// ==========================================
// DERROTAR INIMIGOS
// ==========================================

echo "<hr>";
echo "<h2>DERROTANDO INIMIGOS</h2>";


// Derrota o Goblin caso ainda esteja vivo
$partida->atacarInimigo(0);


// Derrota o Orc
$partida->atacarInimigo(1);


// Ataques contra o Dragão
$partida->atacarInimigo(2);
$partida->atacarInimigo(2);
$partida->atacarInimigo(2);


// ==========================================
// EXPERIÊNCIA
// ==========================================

echo "<hr>";
echo "<h2>EXPERIÊNCIA</h2>";

$jogador->ganharExperiencia(50);

$jogador->ganharExperiencia(50);

echo "<h3>Dados após ganhar experiência</h3>";

$jogador->mostrarDados();


// ==========================================
// RECUPERAR MANA
// ==========================================

echo "<hr>";
echo "<h2>RECUPERANDO MANA</h2>";

$jogador->recuperarMana();

$jogador->mostrarDados();


// ==========================================
// VERIFICAR FIM
// ==========================================

echo "<hr>";
echo "<h2>VERIFICANDO FIM DA PARTIDA</h2>";

if ($partida->verificarFim()) {
    echo "A partida terminou!<br>";
} else {
    echo "A partida ainda não terminou.<br>";
}


// ==========================================
// RELATÓRIO FINAL
// ==========================================

echo "<hr>";

$partida->relatorio();

?>