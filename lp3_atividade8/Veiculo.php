<?php

class Veiculo
{

    public string $marca;
    public string $modelo;
    public int $ano;
    public float $qntdCombustivel;
    public float $consumoMedio;

    public function abastecer($litros){

    $this->qntdCombustivel += $litros;
    echo "Abastecido com {$litros} litros. Combustível atual: {$this->qntdCombustivel} litros.<br>";

    }

    public function calcularAutonomia(){

        $autonomia = $this->qntdCombustivel * $this->consumoMedio;
        echo "Autonomia atual: " . $autonomia . " km<br> <br>";
        return $autonomia;

    }

    public function exibirInformacoes(){


    echo $this->marca . ". <br>";
    echo $this->modelo . "<br>";
    echo $this->ano . "<br>";
    echo $this->qntdCombustivel . "<br>";
    echo $this->consumoMedio . "<br> <br>";

    }


}






?>