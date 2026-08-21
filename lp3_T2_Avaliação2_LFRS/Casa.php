<?php

    class Casa extends Comodo
    {

    private string $nomeCasa;
    private Sim $proprietario;
    private Comodo $espacos; 

    public function __construct(string $nomeCasa, Sim $proprietario, Comodo $espacos)
    {


        $this->nomeCasa = $nomeCasa;
        $this->proprietario = $proprietario;
        $this->espacos = $espacos;

    }

    public function getNomeCasa(): string
    {
        return $this->nomeCasa;
    }

    public function setNomeCasa(string $nomeCasa): void
    {
        $this->nomeCasa = $nomeCasa;  
    }

     public function getProprietario(): Sim
    {
        return $this->proprietario;
    }

    public function setProprietario(Sim $proprietario): void
    {
        $this->proprietario = $proprietario;  
    }


     public function getEspacos(): Comodo
    {
        return $this->espacos;
    }

    public function setEspacos(Comodo $espacos): void
    {
        $this->espacos = $espacos;  
    }



    public function adicionarComodo(string $nomeEspaco, int $tamanho):void
    {
        
        $this->getNomeEspaco() = $nomeEspaco;
        $this->getTamanho() = $tamanho;


    }

    private function mostrarComodos(): void
    {
        
       echo "Cômdos: " . $this->getNomeEspaco() . $this->getTamanho();

    }

    public function imprimirRelatorio(): void
    {

        echo "Casa: " . $this->getNomeCasa() . " <br> Proprietario: " . $this->getProprietario() . "<br> Cômodos: " . $this->mostrarComodos();
        
    }

   


    }