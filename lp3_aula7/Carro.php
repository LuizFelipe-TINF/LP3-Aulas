<?php

    class Carro{

    
    public float $potencia;
    public string $cor;
    public string $modelo;
    public string $acessorios;
    public int $ano;

     public function frear(){
        echo "O carro da " . $this->modelo . " está freando <br>";
     }

    public function acelerar(){
        echo"Vruuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuummmmmmmm!!! <br>";
    }

    public function abrirPorta(){
        echo " O carros do ano" . $this->ano . "estão com falhas na porta.";
    }

    public function abrirJanela(){}
    public function trancar(){}
    public function buzinar(){
        echo "Biiiiiiiibiiiiiiiiiiiiiiiiiiiiiiiiii!!! <br>";
    }

    public function ligarArCondicionado(){}



    }


?>