<?php

class ItemPedido
{

    private Produto $item;
    private int $quantidade;
    private float $valor;

    public function __construct(Produto $item, int $quantidade)
    {

        $this->item = $item;
        $this->quantidade = $quantidade;
        $this->valor = $item->getValor() * $quantidade;

    }

    public function getItem(): Produto
    {
        return $this->item;
    }

    public function setItem(Produto $item): void
    {
        $this->item = $item;
        $this->valor = $item->getValor() * $this->quantidade;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    public function setQuantidade(int $quantidade): void
    {
        $this->quantidade = $quantidade;
        $this->valor = $this->item->getValor() * $quantidade;
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

        echo "Item: " . $this->getItem()->getNome() . "<br>";
        echo "Quantidade: " . $this->getQuantidade() . "<br>";
        echo "Valor total: " . $this->getValor() . "<br>";

    }

    public function __toString(): string
    {
        return

        "Item: " . $this->getItem()->getNome() . "<br>" .
        "Quantidade: " . $this->getQuantidade() . "<br>" .
        "Valor total: " . $this->getValor() . "<br>";
        
    }


}