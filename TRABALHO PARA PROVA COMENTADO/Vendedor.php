<?php

    // HERANÇA:
    // Vendedor HERDA da classe Pessoa.
    // "extends Pessoa" significa que Vendedor é uma classe filha de Pessoa.
    class Vendedor extends Pessoa
    {

    // ENCAPSULAMENTO:
    // private faz com que esses atributos só possam ser acessados
    // diretamente dentro da própria classe Vendedor.
    private float $salario;
    private float $comissao;

    // CONSTRUTOR:
    // É executado automaticamente quando um objeto Vendedor é criado.
    // Data $dataNascimento significa que esse parâmetro deve receber
    // um objeto da classe Data.
    public function __construct(string $nome, string $cpf, string $sexo, Data $dataNascimento, float $salario, float $comissao)
    {

        // HERANÇA:
        // parent representa a classe PAI (Pessoa).
        // Aqui chamamos o construtor de Pessoa para inicializar
        // os atributos que Vendedor herdou.
        parent::__construct($nome, $cpf, $sexo, $dataNascimento);

        // Inicializa os atributos específicos de Vendedor.
        $this->salario = $salario;
        $this->comissao = $comissao;

    }

    // GETTER:
    // Retorna o valor do salário.
    public function getSalario(): float
    {
        return $this->salario;
    }

    // SETTER:
    // Altera o valor do salário.
    public function setSalario(float $salario): void
    {
        $this->salario = $salario;  
    }

     // GETTER:
     // Retorna o valor da comissão.
     public function getComissao(): float
    {
        return $this->comissao;
    }

    // SETTER:
    // Altera o valor da comissão.
    public function setComissao(float $comissao): void
    {
        $this->comissao = $comissao;  
    }

    // POLIMORFISMO / SOBRESCRITA:
    // Vendedor possui um método "imprimir()" com o mesmo nome
    // do método existente em Pessoa.
    //
    // A classe filha está sobrescrevendo o comportamento do método
    // da classe pai e adicionando informações próprias do Vendedor.
    public function imprimir(): void
    {

        // HERANÇA:
        // Chama o método imprimir() da classe Pessoa.
        // Depois adiciona as informações específicas do Vendedor.
        parent:: imprimir();

        echo "Salário: " . $this->getSalario() . "<br>";
        echo "Comissão: " . $this->getComissao() . "<br>";

    }    

    // POLIMORFISMO / SOBRESCRITA:
    // Vendedor também possui seu próprio __toString(),
    // sobrescrevendo o comportamento herdado de Pessoa.
    public function __toString(): string
    {

        // parent::__toString() chama o __toString() da classe Pessoa.
        // Depois são concatenadas as informações de Vendedor.
        return parent::__toString() .
        
        "Salário: " . $this->getSalario() . "<br>" .
        "Comissão: " . $this->getComissao() . "<br>";
    
    }















    }