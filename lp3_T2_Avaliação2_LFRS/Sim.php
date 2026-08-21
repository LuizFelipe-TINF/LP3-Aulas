<?php

    class Sim extends Personagem
    {

    private string $sexo;
    private int $experiencia = 0;
    private int $nivel = 0;

    public function __construct(string $nome, string $sexo)
    {
        parent::__construct($nome); 
        $this->sexo = $sexo;

    }

    public function getSexo(): string
    {
        return $this->sexo;
    }

    public function setSexo(string $sexo): void
    {
        $this->sexo = $sexo;  
    }

     public function getExperiencia(): int
    {
        return $this->experiencia;
    }

    public function setExperiencia(int $experiencia): void
    {
        $this->experiencia = $experiencia;  
    }


     public function getNivel(): int
    {
        return $this->nivel;
    }

    public function setNivel(int $nivel): void
    {
        $this->nivel = $nivel;  
    }

    public function interagir():void
    {

        echo "Eu sou o Sim " . $this->getNome() . "! <br>";

    }



    public function mostrarDados(): void
    {

        echo "Nome: " . $this->getNome() . "<br>";
        echo "Sexo" . $this->getSexo() . "<br>";
        echo "XP". $this->getExperiencia() . "<br>";
        echo "Nível". $this->getNivel() . "<br>";

    }

    public function trabalhar(int $experiencia):void
    {

        $this->experiencia = $experiencia;
        
        if ($this->getExperiencia() > 60)
        {
            echo "O XP não pode ser maior do que 60!";
        }


        echo "Sim " . $this->getNome() . " esta trabalhando! XP adicionado: " . $this->getExperiencia();

    }

    private function mudarNivel():void
    {
        
        

        if ($this->getExperiencia() >= 100)
            {
                echo "O Sim subiu de nível!";
               
            }

            
    }

   


    }