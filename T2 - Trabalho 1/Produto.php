<?php

class Produto
{

    private int $codigo;
    private string $nome;
    private float $valor;

    public function __construct(int $codigo, string $nome, float $valor)
    {

        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->valor = $valor;

    }

    public function getCodigo(): int
    {
        return $this->codigo;
    }

    public function setCodigo(int $codigo): void
    {
        $this->codigo = $codigo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $valor): void
    {
        $this->valor = $valor;
    }

    public function imprimir(): void
    {

        echo "Código: " . $this->getCodigo() . "<br>";
        echo "Nome: " . $this->getNome() . "<br>";
        echo "Valor: " . $this->getValor() . "<br>";

    }

    public function __toString(): string
    {
        return

         "Código: " . $this->getCodigo() . "<br>" .
         "Nome: " . $this->getNome() . "<br>" .
         "Valor: " . $this->getValor() . "<br>";
         
    }


}