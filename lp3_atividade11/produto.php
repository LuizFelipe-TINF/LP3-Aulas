<?php

abstract class Produto
{

    private int $codigo;
    private string $nome;
    private string $descricao;
    private float $precoBase;
    private int $quantidadeEstoque;

    private bool $isAtivo;


    public function adicionarEstoque(int $quantidade): void
    {

    if($quantidade <= 0){

        echo "A quantidade deve ser maior que zero.";
        
    }
       
    }

    public function baixarEstoque(int $quantidade): void
    {

       

    }

    public function aplicarDesconto(float $percentual): void
    {

        

    }

     abstract public function calcularPrecoVenda(): float;

    abstract public function verificarDisponibilidade(): bool;
       


}