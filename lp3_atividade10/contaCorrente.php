<?php
require_once "ContaBancaria.php";

class ContaCorrente extends ContaBancaria
{
    public float $limiteChequeEspecial;
    public float $taxaManutencaoMensal;
    public string $cartaoCreditoVencimento;
    public float $valorCartaoCredito;


    public function sacar(float $valor): void
    {

        if ($valor <= 0) {

            echo "Não é possível sacar.<br>";

            return;
        }

        if ($valor > ($this->saldo + $this->limiteChequeEspecial)) {

            echo "Limite insuficiente.<br>";

            return;
        }

        $this->saldo -= $valor;

        echo "Saque realizado.<br>";

        echo "Novo saldo: " . $this->saldo . "<br>";

    }

    public function cobrarTaxaMensal(): void
    {

        $this->saldo -= $this->taxaManutencaoMensal;

        echo "Taxa mensal de " . $this->taxaManutencaoMensal . " cobrada. Novo saldo de: " . $this->saldo . "<br>";

    }

    public function solicitarAumentoLimite(
        float $valor
    ): void {

        if ($valor <= 0) {

            echo "O valor é inválido";

            return;
        }

        $limiteMaximo = $this->limiteChequeEspecial * 0.30;

        if ($valor <= $limiteMaximo) {

            $this->limiteChequeEspecial += $valor;

            echo "Aumento realizado.<br>";

            echo "Novo limite: " . $this->limiteChequeEspecial . "<br>";

        } else {

            echo "Não foi possível realizar o aumento.<br>";

        }
    }

    public function pagarFaturaCartao(string $dataAtual): void
    {

        if ($dataAtual >= $this->cartaoCreditoVencimento) {

            $this->saldo -= $this->valorCartaoCredito;

            echo "Fatura paga. Novo saldo: " . $this->saldo . "<br>";

        } else {
            echo "Fatura não foi paga.";
        }

    }








}