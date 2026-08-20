<?php

    // CLASSE PAI:
    // Pessoa é uma classe que pode ser usada como classe base para outras classes.
    // Exemplo: Cliente extends Pessoa.
    class Pessoa
    {

    // ENCAPSULAMENTO:
    // "private" impede que esses atributos sejam acessados diretamente
    // de fora da classe.
    private string $nome;
    private string $cpf;
    private string $sexo;
    private Data $dataNascimento;

    // CONSTRUTOR:
    // Executado automaticamente quando um objeto Pessoa é criado.
    // Data $dataNascimento significa que esse parâmetro deve ser
    // um objeto da classe Data.
    public function __construct(string $nome, string $cpf, string $sexo, Data $dataNascimento)
    {

        // $this representa o objeto atual.
        // Os valores recebidos são armazenados nos atributos.
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->dataNascimento = $dataNascimento;

    }

    // GETTER:
    // Usado para LER/OBTER o valor do atributo privado nome.
    public function getNome(): string
    {
        return $this->nome;
    }

    // SETTER:
    // Usado para ALTERAR o valor do atributo privado nome.
    public function setNome(string $nome): void
    {
        $this->nome = $nome;  
    }

     // GETTER:
     // Retorna o CPF.
     public function getCpf(): string
    {
        return $this->cpf;
    }

    // SETTER:
    // Altera o CPF.
    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;  
    }

     // GETTER:
     // Retorna o sexo.
     public function getSexo(): string
    {
        return $this->sexo;
    }

    // SETTER:
    // Altera o sexo.
    public function setSexo(string $sexo): void
    {
        $this->sexo = $sexo;  
    }


     // GETTER:
     // Retorna o objeto Data armazenado em dataNascimento.
     // O tipo de retorno "data" indica que é esperado um objeto Data.
     public function getDataNascimento(): data
    {
        return $this->dataNascimento;
    }

    // SETTER:
    // Altera o objeto Data armazenado em dataNascimento.
    public function setDataNascimento(data $dataNascimento): void
    {
        $this->dataNascimento = $dataNascimento;  
    }

    // MÉTODO:
    // Imprime as informações da Pessoa.
    public function imprimir(): void
    {

        echo "Nome: " . $this->getNome() . "<br>";
        echo "Cpf: " . $this->getCpf() . "<br>";
        echo "Sexo: " . $this->getSexo() . "<br>";

        // getDataNascimento() retorna um objeto Data.
        // Como Data possui __toString(), ele pode ser usado diretamente no echo.
        echo "Data de nascimento: " . $this->getDataNascimento() . "<br>";
        
    }

    // MÉTODO MÁGICO __toString:
    // Define o que será retornado quando um objeto Pessoa
    // for tratado como uma string.
    //
    // Exemplo:
    // echo $pessoa;
    public function __toString(): string
    {

        // return devolve a string.
        // "." concatena (junta) os textos.
        return
        
        "Nome: " . $this->getNome() . "<br>" .
        "Cpf: " . $this->getCpf() . "<br>" .
        "Sexo: " . $this->getSexo() . "<br>" .
        "Data de nascimento: " . $this->getDataNascimento() . "<br>";
    }















    }