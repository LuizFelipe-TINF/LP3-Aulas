<?php

    class Cliente extends Pessoa
    {

    private Data $dataCadastro;
    private string $preferencias;

   public function __construct(string $nome, string $cpf, string $sexo, int $dia, int $mes, int $ano, string $preferencias = "") 
   {
 
    parent::__construct($nome, $cpf, $sexo, new Data($dia, $mes, $ano));

    $this->dataCadastro = new Data(
        (int)date('d'),
        (int)date('m'),
        (int)date('Y')
    );
    
    $this->preferencias = $preferencias;
}

    public function getDataCadastro(): data
    {
        return $this->dataCadastro;
    }

    public function setDataCadastro(data $dataCadastro): void
    {
        $this->dataCadastro = $dataCadastro;  
    }

     public function getPreferencias(): string
    {
        return $this->preferencias;
    }

    public function setPreferencias(string $preferencias): void
    {
        $this->preferencias = $preferencias;  
    }

    public function imprimir(): void
    {

        parent:: imprimir();
        echo "Data de cadastro: " . $this->getDataCadastro() . "<br>";
        echo "Preferências: " . $this->getPreferencias() . "<br>";

    }    

    public function __toString(): string
    {

        return parent::__toString() .
        
        "Data de cadastro: " . $this->getDataCadastro() . "<br>" .
        "Preferências: " . $this->getPreferencias() . "<br>";
    
    }











    }