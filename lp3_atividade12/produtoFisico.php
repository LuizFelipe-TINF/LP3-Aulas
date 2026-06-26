<?php

class ProdutoFisico extends Produto
{

    private float $peso;
    private string $dimensoesCxLxA;
    private float $custoFreteFixo;
    private string $transportadoraParceira;

    public function __construct( int $codigo, string $nome, string $descricao, float $precoBase, int $quantidadeEstoque, bool $isAtivo, float $peso, string $dimensoesCxLxA, float $custoFreteFixo, string $transportadoraParceira) {
        
    parent::__construct( $codigo, $nome, $descricao, $precoBase, $quantidadeEstoque, $isAtivo);

    $this->peso = $peso;
    $this->dimensoesCxLxA = $dimensoesCxLxA;
    $this->custoFreteFixo = $custoFreteFixo;
    $this->transportadoraParceira = $transportadoraParceira;
}

    public function getPeso(): float
    {
        return $this->peso;
    }
    public function setPeso(float $peso): void
    {
        $this->peso = $peso;
    }

    public function getDimensoesCxLxA(): string
    {
        return $this->dimensoesCxLxA;
    }
    public function setDimensoesCxLxA(string $dimensoesCxLxA): void
    {
        $this->dimensoesCxLxA = $dimensoesCxLxA;
    }

    public function getCustoFreteFixo(): float
    {
        return $this->custoFreteFixo;
    }
    public function setCustoFreteFixo(float $custoFreteFixo): void
    {
        $this->custoFreteFixo = $custoFreteFixo;
        ;
    }

    public function getTransportadoraParceira(): string
    {
        return $this->transportadoraParceira;
    }
    public function setTransportadoraParceira(string $transportadoraParceira): void
    {
        $this->transportadoraParceira = $transportadoraParceira;
    }


    public function calcularPrecoVenda(): float
    {

        return $this->getPrecoBase() + $this->getCustoFreteFixo() + ($this->getPrecoBase() * 0.05);

    }

    public function verificarDisponibilidade(): bool
    {

        if ($this->getQuantidadeEstoque() > 0 && $this->getIsAtivo() == true) {

            return true;

        }

        return false;

    }

    public function calcularVolumeCubico(): float
    {

        $dimensoes = explode("x", $this->getDimensoesCxLxA());

        $comprimento = (float) $dimensoes[0];
        $largura = (float) $dimensoes[1];
        $altura = (float) $dimensoes[2];

        return $comprimento * $largura * $altura;

    }

    public function estimarPrazoEntrega(string $cepDestino): int
{

    if (substr($cepDestino, 0, 1) == "1") {
        return rand(2, 4);
    }

    if (substr($cepDestino, 0, 1) == "2") {
        return rand(4, 6);
    }

    if (substr($cepDestino, 0, 1) == "3") {
        return rand(1, 3);
    }
    
    return rand(5, 8);
}

}