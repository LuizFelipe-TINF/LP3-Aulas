<?php
require_once "ContaBancaria.php";

class ContaPoupanca extends ContaBancaria
{
    public int $diaAniversario;
    public float $taxaRendimentoMensal;
    public int $diasSemMovimentacao;

    public function creditarRendimento(): void{

        $diaAtual = date("d");

        if ($diaAtual == $this->diaAniversario) {

            $rendimento = $this->saldo * $this->taxaRendimentoMensal;

            $this->saldo += $rendimento;

            echo "Rendimento creditado. Valor do rendimento: " . $rendimento . "<br> Novo saldo: " . $this->saldo . "<br>";


        } else {

            echo "Hoje não é o dia de rendimento.<br>";

        }
    }

    public function preverProximoRendimento(): float{

        $rendimento = $this->saldo * $this->taxaRendimentoMensal;

        return $rendimento;
    }









}