<?php

    class Npc extends Personagem
    {

    private string $papel;

    public function __construct(string $nome, string $papel)
    {
        parent::__construct($nome); 
        
        $this->papel = $papel;

    }

    public function getPapel(): string
    {
        return $this->papel;
    }

    public function setPapel(string $papel): void
    {
        $this->papel = $papel;  
    }


    public function interagir(): void
    {

    echo "Eu sou o NPC " . $this->getNome() . ", sou " . $this->getPapel() ." e estou aqui para ajudar! <br>";

    }


    }