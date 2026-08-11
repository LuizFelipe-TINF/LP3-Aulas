<?php

class Data
{

    private int $dia;
    private int $mes;
    private int $ano;

    public function __construct(int $dia, int $mes, int $ano)
    {

        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;

    }

    public function getDia(): int
    {
        return $this->dia;
    }

    public function setDia(int $dia): void
    {
        $this->dia = $dia;
    }

    public function getMes(): int
    {
        return $this->mes;
    }

    public function setMes(int $mes): void
    {
        $this->mes = $mes;
    }

    public function getAno(): int
    {
        return $this->ano;
    }

    public function setAno(int $ano): void
    {
        $this->ano = $ano;
    }

    public function __toString(): string
    {

        return $this->getDia() . '/' . $this->getMes() . '/' . $this->getAno();

    }

    public function imprimirDataBanco(): void
    {

        echo $this->getDia() . '/' . $this->getMes() . '/' . $this->getAno();

    }


}
