<?php

    class Comodo
    {

    private string $nomeEspaco;
    private int $tamanho;

    public function __construct(string $nomeEspaco, int $tamanho)
    {

        $this->nomeEspaco = $nomeEspaco;
        $this->tamanho = $tamanho;

    }

    public function getNomeEspaco(): string
    {
        return $this->nomeEspaco;
    }

    public function setNomeEspaco(string $nomeEspaco): void
    {
        $this->nomeEspaco = $nomeEspaco;  
    }

    public function getTamanho(): int
    {
        return $this->tamanho;
    }

    public function setTamanho(int $tamanho): void
    {
        $this->tamanho = $tamanho;  
    }


    public function __toString(): string
    {
        
        return
        "Cômodo: ". $this->nomeEspaco . " - Tamanho". $this->tamanho . "<br>";


    }


    }