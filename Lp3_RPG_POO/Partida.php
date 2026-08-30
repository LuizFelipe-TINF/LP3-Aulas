<?php

require_once "Jogador.php";
require_once "Inimigo.php";

class Partida
{
    private string $nome;
    private Jogador $jogador;
    private array $inimigos;
    private int $rodada;

    public function __construct(string $nome, Jogador $jogador)
    {
        $this->nome = $nome;
        $this->jogador = $jogador;
        $this->inimigos = [];
        $this->rodada = 1;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getJogador(): Jogador
    {
        return $this->jogador;
    }

    public function setJogador(Jogador $jogador): void
    {
        $this->jogador = $jogador;
    }

    public function getInimigos(): array
    {
        return $this->inimigos;
    }

    public function setInimigos(array $inimigos): void
    {
        $this->inimigos = $inimigos;
    }

    public function getRodada(): int
    {
        return $this->rodada;
    }

    public function setRodada(int $rodada): void
    {
        $this->rodada = $rodada;
    }

    public function adicionarInimigo(Inimigo $inimigo): void
    {
        $this->inimigos[] = $inimigo;
    }

    public function mostrarInimigos(): void
    {
        echo "<h3>Inimigos da partida</h3>";

        foreach ($this->inimigos as $indice => $inimigo) {
            echo "<strong>Inimigo " . ($indice + 1) . "</strong><br>";

            $inimigo->mostrarDados();

            echo "<hr>";
        }
    }

    public function iniciar(): void
    {
        echo "<h2>Partida iniciada!</h2>";
        echo "Partida: {$this->nome}<br>";
        echo "Jogador: " . $this->jogador->getNome() . "<br>";
        echo "Rodada: {$this->rodada}<br><br>";

        $this->mostrarInimigos();
    }

    public function atacarInimigo(int $indice): void
    {
        if (!isset($this->inimigos[$indice])) {
            echo "Inimigo não encontrado!<br>";
            return;
        }

        if (!$this->jogador->estaVivo()) {
            echo "O jogador está derrotado e não pode atacar!<br>";
            return;
        }

        $inimigo = $this->inimigos[$indice]; 

        if (!$inimigo->estaVivo()) {
            echo "Esse inimigo já está derrotado!<br>";
            return;
        }

        $dano = $this->jogador->atacar();

        echo "<strong>O jogador atacou {$inimigo->getNome()}!</strong><br>";

        $inimigo->receberDano($dano);

        if (!$inimigo->estaVivo()) {
            $this->jogador->ganharExperiencia(50);
        }

        echo "<hr>";
    }

    public function atacarComHabilidade(int $indice): void
    {
        if (!isset($this->inimigos[$indice])) {
            echo "Inimigo não encontrado!<br>";
            return;
        }

        if (!$this->jogador->estaVivo()) {
            echo "O jogador está derrotado!<br>";
            return;
        }

        $inimigo = $this->inimigos[$indice];

        if (!$inimigo->estaVivo()) {
            echo "Esse inimigo já está derrotado!<br>";
            return;
        }

        $dano = $this->jogador->usarHabilidade();

        if ($dano > 0) {
            echo "<strong>Habilidade usada contra {$inimigo->getNome()}!</strong><br>";

            $inimigo->receberDano($dano);

            if (!$inimigo->estaVivo()) {
                $this->jogador->ganharExperiencia(50);
            }
        }

        echo "<hr>";
    }

    public function receberAtaqueInimigo(int $indice): void
    {
        if (!isset($this->inimigos[$indice])) {
            echo "Inimigo não encontrado!<br>";
            return;
        }

        if (!$this->jogador->estaVivo()) {
            echo "O jogador já está derrotado!<br>";
            return;
        }

        $inimigo = $this->inimigos[$indice];

        if (!$inimigo->estaVivo()) {
            echo "Esse inimigo já está derrotado!<br>";
            return;
        }

        $dano = $inimigo->atacar();

        echo "<strong>{$inimigo->getNome()} atacou o jogador!</strong><br>";

        $this->jogador->receberDano($dano);

        echo "<hr>";
    }

    public function verificarFim(): bool
    {
        if (!$this->jogador->estaVivo()) {
            return true;
        }

        foreach ($this->inimigos as $inimigo) {
            if ($inimigo->estaVivo()) {
                return false;
            }
        }

        return true;
    }

    public function relatorio(): void
    {
        echo "<h2>RELATÓRIO DA PARTIDA</h2>";

        echo "<h3>Jogador</h3>";
        $this->jogador->mostrarDados();

        echo "<h3>Quantidade de inimigos: " . count($this->inimigos) . "</h3>";

        $this->mostrarInimigos();

        echo "<h3>Situação da partida</h3>";

        if (!$this->jogador->estaVivo()) {

            echo "O jogador foi derrotado.<br>";

        } elseif ($this->verificarFim()) {

            echo "Todos os inimigos foram derrotados! O jogador venceu!<br>";

        } else {

            echo "A partida ainda está em andamento.<br>";

        }

        echo "Rodada atual: " . $this->rodada . "<br>";
    }
}
