<?php

require_once "Personagem.php";

class Jogador extends Personagem
{
    private string $classe;
    private int $mana;
    private int $manaMaxima;

    public function __construct(
        string $nome,
        string $classe,
        int $nivel,
        int $vidaMaxima,
        int $manaMaxima
    ) {
        parent::__construct($nome, $nivel, $vidaMaxima, $vidaMaxima);

        $this->classe = $classe;
        $this->manaMaxima = $manaMaxima;
        $this->mana = $manaMaxima;
    }

    public function getClasse(): string
    {
        return $this->classe;
    }

    public function setClasse(string $classe): void
    {
        $this->classe = $classe;
    }

    public function getMana(): int
    {
        return $this->mana;
    }

    public function setMana(int $mana): void
    {
        $this->mana = $mana;
    }

    public function getManaMaxima(): int
    {
        return $this->manaMaxima;
    }

    public function setManaMaxima(int $manaMaxima): void
    {
        $this->manaMaxima = $manaMaxima;
    }


    public function interagir(): void
    {

        echo "O " . $this->classe . " " . $this->getNome() . " está pronto para a batalha!<br>";

    }

    public function mostrarDados(): void
    {

        parent::mostrarDados();
        echo "Classe: " . $this->classe . "<br>";
        echo "Mana Atual: " . $this->mana . "<br>";
        echo "Mana Máxima: " . $this->manaMaxima . "<br>";

    }

    public function atacar(): int
    {

        return $this->getNivel() * 10;

    }

    public function usarHabilidade(): int
    {

        if ($this->mana < 30) {
            echo $this->getNome() . " não possui mana suficiente!<br>";
            return 0;
        }

        $this->mana -= 30;

        $dano = $this->getNivel() * 20;

        echo $this->getNome() . " usou sua habilidade especial!<br>";
        echo "Dano causado: " . $dano . "<br>";

        return $dano;

    }

    public function recuperarMana(): void
    {

        $this->mana = $this->manaMaxima;

        echo $this->getNome() . " recuperou toda a mana!<br>";

    }
}