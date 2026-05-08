<?php

class Funcionario
{

    public float $codigo;
    public string $nome;
    public float $salario;
    public float $cargaHoraria;

    public function calcularSalarioHora(){

    return $this->salario / $this->cargaHoraria;

    }
    public function aumentarSalario($percentual){

     echo "E com um aumento de {$percentual}% recebe " . $this->salario + ($this->salario * $percentual / 100) . "<br> <br>";

    }
    public function exibirDados(){


    echo "Os dados atualizados são: <br>" . $this->codigo . ". <br>" . $this->nome . "<br>" . "Recebe " . $this->calcularSalarioHora() . " por hora.<br>";
    
    }


}






?>