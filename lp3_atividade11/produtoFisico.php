<?php

class ProdutoFisico extends Produto
{

    private float $peso;
    private string $dimensoesCxLxA;
    private float $custoFreteFixo;
    private string $transportadoraParceira;


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
    public function setDImensoesCxLxA(string $dimensoesCxLxA): void
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
    public function setTransportadoraPArceira(string $transportadoraParceira): void
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
            return 4;
        }

        if (substr($cepDestino, 0, 1) == "3") {
            return 2;
        }

        if (substr($cepDestino, 0, 1) == "2") {
            return 5;
        }

        return 7;

    }


}