<?php

abstract class Produto
{

    public int $codigo;
    public string $nome;
    public string $descricao;
    public float $precoBase;
    public int $quantidadeEstoque;

    public bool $isAtivo;


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