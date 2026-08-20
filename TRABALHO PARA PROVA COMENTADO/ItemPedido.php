<?php

// CLASSE:
// Data é uma classe que representa uma data.
// Uma classe funciona como um modelo para criar objetos.
class Data
{

    // ENCAPSULAMENTO:
    // Os atributos são "private", então só podem ser acessados
    // diretamente dentro da própria classe Data.
    private int $dia;
    private int $mes;
    private int $ano;

    // CONSTRUTOR:
    // __construct() é executado automaticamente quando criamos
    // um objeto usando "new Data(...)"
    public function __construct(int $dia, int $mes, int $ano)
    {

        // $this representa o objeto atual.
        // Aqui os valores recebidos pelo construtor são armazenados
        // nos atributos privados do objeto.
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;

    }

    // GETTER:
    // Getter é usado para OBTER/LER o valor de um atributo private.
    public function getDia(): int
    {
        return $this->dia;
    }

    // SETTER:
    // Setter é usado para ALTERAR o valor de um atributo private.
    public function setDia(int $dia): void
    {
        $this->dia = $dia;
    }

    // GETTER:
    // Retorna o valor do mês.
    public function getMes(): int
    {
        return $this->mes;
    }

    // SETTER:
    // Altera o valor do mês.
    public function setMes(int $mes): void
    {
        $this->mes = $mes;
    }

    // GETTER:
    // Retorna o valor do ano.
    public function getAno(): int
    {
        return $this->ano;
    }

    // SETTER:
    // Altera o valor do ano.
    public function setAno(int $ano): void
    {
        $this->ano = $ano;
    }

    // MÉTODO MÁGICO __toString:
    // É chamado automaticamente quando o objeto é usado como uma string.
    //
    // Exemplo:
    // $data = new Data(19, 8, 2026);
    // echo $data;
    //
    // O resultado será:
    // 19/8/2026
    public function __toString(): string
    {

        // "." é usado para CONCATENAR (juntar) valores.
        // Os getters são utilizados para acessar os atributos privados.
        return $this->getDia() . '/' . $this->getMes() . '/' . $this->getAno();

    }

    // MÉTODO:
    // Imprime a data diretamente na tela.
    public function imprimirDataBanco(): void
    {

        // Utiliza os getters para acessar os atributos privados.
        // echo mostra o resultado na tela.
        echo $this->getDia() . '/' . $this->getMes() . '/' . $this->getAno();

    }


}