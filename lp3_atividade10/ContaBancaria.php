<?php

class ContaBancaria
{

    public int $numero;
    public string $nomeTitular;
    public int $agencia;
    public float $saldo;
    public string $dataAbertura;

    public int $status;


    public function depositar(float $valor): void
    {

        if ($valor <= 0) {

            echo "Tentativas de depósito de valores negativos ou nulos são rejeitadas.<br>";

        } else {

            $this->saldo += $valor;
            echo "O saldo após o depósito é de: " . $this->saldo . "<br>";

        }
    }

    public function sacar(float $valor): void
    {

        if ($valor > 0 && $this->saldo >= $valor) {
            $this->saldo -= $valor;
            echo "Você fez um saque de " . $valor . ", seu novo saldo é de: " . $this->saldo . "<br>";
        } else {

            echo "Você não tem saldo suficiente.<br>";

        }

    }

    public function transferir(float $valor, ContaBancaria $destino): bool
    {

        if ($valor <= 0) {

            echo "Não é possível transferir.<br>";

            return false;
        }

        if ($destino->status == 0) {

            echo "A conta não está ativa.<br>";

            return false;
        }

        if ($this->saldo >= $valor) {

            $this->saldo -= $valor;
            $destino->saldo += $valor;

            echo "A conta de " . $this->nomeTitular . ", transferiu " . $valor . " para a conta de " . $destino->nomeTitular . ", ficando respectivamente com " . $this->saldo . " e " . $destino->saldo . "<br>";

            return true;

        } else {

            echo "Saldo insuficiente.<br>";

            return false;

        }

    }

    public function consultarSaldo(): float
    {

    echo "O saldo da conta de " . $this->nomeTitular . " é de " . $this->saldo . "<br>";
    
        return $this->saldo;

    }

    public function fecharConta(): void {

        if ($this->saldo != 0) {

            echo "Conta precisa estar zerada.<br>";
            
        }

        $this->status = 0;

        echo "Conta encerrada.<br>";
    }



}

