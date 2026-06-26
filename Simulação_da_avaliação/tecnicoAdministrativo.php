<?php

class TecnicoAdministrativo extends Funcionario
{

    private float $adicionalInsalubridade;
    private string $setor;
    private string $nivel;
    private string $turno;

    public function __construct(int $matricula, string $nome, string $cpf, float $salarioBase, int $cargaHoraria, bool $ativo, float $adicionalInsalubridade, string $setor, string $nivel, string $turno)
    {

        parent::__construct($matricula, $nome, $cpf, $salarioBase, $cargaHoraria, $ativo);

        $this->adicionalInsalubridade = $adicionalInsalubridade;
        $this->setor = $setor;
        $this->nivel = $nivel;
        $this->turno = $turno;

    }

    public function getAdicionalInsalubridade(): float
    {
        return $this->adicionalInsalubridade;
    }
    public function setAdicionalInsalubridade(float $adicionalInsalubridade): void
    {
        $this->adicionalInsalubridade = $adicionalInsalubridade;
    }

    public function getSetor(): string
    {
        return $this->setor;
    }
    public function setSetor(string $setor): void
    {
        $this->setor = $setor;
    }

    public function getNivel(): string
    {
        return $this->nivel;
    }
    public function setNivel(string $nivel): void
    {
        $this->nivel = $nivel;
    }

    public function getTurno(): string
    {
        return $this->turno;
    }
    public function setTurno(string $turno): void
    {
        $this->turno = $turno;
    }



    public function calcularSalario(): float
    {

        $salario = $this->getsalarioBase() + $this->getAdicionalInsalubridade();

        if ($this->getTurno() == "Noturno") {
            $salario += $this->getsalarioBase() * 20 / 100;
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

    public function calcularAdicional(): float
    {

        return $this->getAdicionalInsalubridade();

    }

    public function gerarCracha(): string
    {

        $cracha = $this->getMatricula() . $this->getNome() . $this->getSetor();

        return md5($cracha);

    }


}