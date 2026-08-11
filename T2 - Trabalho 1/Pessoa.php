<?php

    class Pessoa
    {

    private string $nome;
    private string $cpf;
    private string $sexo;
    private Data $dataNascimento;

    public function __construct(string $nome, string $cpf, string $sexo, Data $dataNascimento)
    {

        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->dataNascimento = $dataNascimento;

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

     public function getSexo(): string
    {
        return $this->sexo;
    }

    public function setSexo(string $sexo): void
    {
        $this->sexo = $sexo;  
    }


     public function getDataNascimento(): data
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento(data $dataNascimento): void
    {
        $this->dataNascimento = $dataNascimento;  
    }

    public function imprimir(): void
    {

        echo "Nome: " . $this->getNome() . "<br>";
        echo "Cpf: " . $this->getCpf() . "<br>";
        echo "Sexo: " . $this->getSexo() . "<br>";
        echo "Data de nascimento: " . $this->getDataNascimento() . "<br>";
        
    }

    public function __toString(): string
    {

        return
        
        "Nome: " . $this->getNome() . "<br>" .
        "Cpf: " . $this->getCpf() . "<br>" .
        "Sexo: " . $this->getSexo() . "<br>" .
        "Data de nascimento: " . $this->getDataNascimento() . "<br>";
    }











    }