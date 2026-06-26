<?php

abstract class Funcionario
{
    private int $matricula;
    private string $nome;
    private string $cpf;
    private float $salarioBase;
    private int $cargaHoraria;
    private bool $ativo;

    public function __construct(int $matricula, string $nome, string $cpf, float $salarioBase, int $cargaHoraria, bool $ativo)
    {

        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salarioBase = $salarioBase;
        $this->cargaHoraria = $cargaHoraria;
        $this->ativo = $ativo;

    }


    public function getMatricula(): int
    {
        return $this->matricula;
    }

    public function setMatricula(int $matricula): void
    {
        $this->matricula = $matricula;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function getSalarioBase(): float
    {
        return $this->salarioBase;
    }

    public function setSalarioBase(float $salarioBase): void
    {
        $this->salarioBase = $salarioBase;
    }

    public function getCargaHoraria(): int
    {
        return $this->cargaHoraria;
    }

    public function setCargaHoraria(int $cargaHoraria): void
    {
        $this->cargaHoraria = $cargaHoraria;
    }

    public function getAtivo(): bool
    {
        return $this->ativo;
    }

    public function setAtivo(bool $ativo): void
    {
        $this->ativo = $ativo;
    }




    public function admitir(): void
    {

        if ($this->getAtivo() == false) {

            $this->setAtivo(true);

        }

    }

    public function demitir(): void
    {

        $this->setAtivo(false);

    }

    public function aplicarAumento(float $percentual): void
    {

        if ($percentual > 0 && $percentual <= 40) {

            $novoSalario = $this->getSalarioBase() + ($this->getSalarioBase() * $percentual / 100);

            $this->setSalarioBase($novoSalario);

        }

    }

    abstract public function calcularSalario(): float;

    abstract public function verificarSituacao(): bool;

}