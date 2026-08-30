<?php

class Personagem
{

    private string $nome;
    private int $nivel;
    private int $vida;
    private int $vidaMaxima;
    private int $experiencia;

    public function __construct(string $nome, int $nivel, int $vida, int $vidaMaxima)
    {

        $this->nome = $nome;
        $this->nivel = $nivel;
        $this->vida = $vida;
        $this->vidaMaxima = $vidaMaxima;
        $this->experiencia = 0;

    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getNivel(): int
    {
        return $this->nivel;
    }

    public function setNivel(int $nivel): void
    {
        $this->nivel = $nivel;
    }

    public function getVida(): int
    {
        return $this->vida;
    }

    public function setVida(int $vida): void
    {
        $this->vida = $vida;
    }

    public function getVidaMaxima(): int
    {
        return $this->vidaMaxima;
    }

    public function setVidaMaxima(int $vidaMaxima): void
    {
        $this->vidaMaxima = $vidaMaxima;
    }

    public function mostrarDados(): void
    {

        echo "Nome: " . $this->nome . "<br>";
        echo "Nivel: " . $this->nivel . "<br>";
        echo "Vida Atual: " . $this->vida . "<br>";
        echo "Vida Máxima: " . $this->vidaMaxima . "<br>";

    }

    public function interagir(): void
    {

        echo $this->nome . " está pronto para a aventura!<br>";

    }

    public function receberDano(int $dano): void
    {

        $this->vida -= $dano;

        if ($this->vida < 0) {

            $this->vida = 0;

        }

        echo $this->nome . "recebeu" . $dano . "de dano.<br>";

        if (!$this->estaVivo()) {
            echo $this->nome . " foi derrotado!<br>";
        }

    }

    public function estaVivo(): bool
    {

        return $this->vida > 0;

    }

    public function ganharExperiencia(int $experiencia): void
    {

        $this->experiencia += $experiencia;

        echo $this->nome . " recebeu " . $experiencia . " pontos de experiência.<br>";

        while ($this->experiencia >= 100) {
            $this->experiencia -= 100;
            $this->nivel++;

            $this->vidaMaxima += 20;
            $this->vida = $this->vidaMaxima;

            echo $this->nome . " subiu para o nível " . $this->nivel . "!<br>";
            echo "Vida máxima aumentou para " . $this->vidaMaxima . ".<br>";
        }

    }










}