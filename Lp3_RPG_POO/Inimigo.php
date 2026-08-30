<?php

require_once "Personagem.php";

class Inimigo extends Personagem
{
    private string $tipo;
    private int $ataque;

    public function __construct(
        string $nome,
        string $tipo,
        int $nivel,
        int $vidaMaxima,
        int $ataque
    ) {
        parent::__construct($nome, $nivel, $vidaMaxima, $vidaMaxima);

        $this->tipo = $tipo;
        $this->ataque = $ataque;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): void
    {
        $this->tipo = $tipo;
    }

    public function getAtaque(): int
    {
        return $this->ataque;
    }

    public function setAtaque(int $ataque): void
    {
        $this->ataque = $ataque;
    }

    public function interagir(): void
    {
        echo "O " . $this->tipo . " " . $this->getNome() . " apareceu!<br>";
    }

    public function mostrarDados(): void
    {
        parent::mostrarDados();

        echo "Tipo: " . $this->tipo . "<br>";
        echo "Ataque: " . $this->ataque . "<br>";
    }

    public function atacar(): int
    {
        return $this->ataque;
    }
}