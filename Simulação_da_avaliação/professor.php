<?php

class Professor extends Funcionario
{

    private float $valorHoraAula;
    private string $titulacao;
    private int $horasAula;
    private bool $coordenador;

    public function __construct(int $matricula, string $nome, string $cpf, float $salarioBase, int $cargaHoraria, bool $ativo, float $valorHoraAula, string $titulacao, int $horasAula, bool $coordenador)
    {

        parent::__construct($matricula, $nome, $cpf, $salarioBase, $cargaHoraria, $ativo);

        $this->valorHoraAula = $valorHoraAula;
        $this->titulacao = $titulacao;
        $this->horasAula = $horasAula;
        $this->coordenador = $coordenador;

    }

    public function getValorHoraAula(): float
    {
        return $this->valorHoraAula;
    }
    public function setValorHoraAula(float $valorHoraAula): void
    {
        $this->valorHoraAula = $valorHoraAula;
    }

    public function getTitulacao(): string
    {
        return $this->titulacao;
    }
    public function setTitulacao(string $titulacao): void
    {
        $this->titulacao = $titulacao;
    }

    public function getHorasAula(): int
    {
        return $this->horasAula;
    }
    public function setHorasAula(int $horasAula): void
    {
        $this->horasAula = $horasAula;
    }

    public function getCoordenador(): bool
    {
        return $this->coordenador;
    }
    public function setCoordenador(bool $coordenador): void
    {
        $this->coordenador = $coordenador;
    }



    public function calcularSalario(): float
{
    $salario = $this->getsalarioBase() + ($this->horasAula * $this->valorHoraAula);

    if ($this->getCoordenador() == true) {
        $salario += 1500;
    }

    return $salario;
}

    public function verificarSituacao(): bool
    {

        if ($this->getAtivo() == true) {

            return true;

        }

        return false;

    }

    public function calcularBonus(): float
{
    if ($this->titulacao === "Doutorado") {
        return 2000.0;
    }

    if ($this->titulacao === "Mestrado") {
        return 1000.0;
    }

    return 500.0;
}

   public function gerarRelatorio(): string
{
    $salario = $this->calcularSalario();

    return "<br>Matrícula: " . $this->getMatricula() . "<br>Nome: " . $this->getNome() . "<br>Titulação: " . $this->titulacao . "<br>Salário: R$ " . $salario;
}


}