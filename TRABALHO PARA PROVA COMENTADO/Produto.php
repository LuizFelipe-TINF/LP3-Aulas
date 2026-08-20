<?php

// CLASSE:
// Produto é um modelo usado para criar objetos que representam produtos.
class Produto
{

    // ENCAPSULAMENTO:
    // Os atributos são private, portanto não podem ser acessados
    // diretamente de fora da classe.
    private int $codigo;
    private string $nome;
    private float $valor;

    // CONSTRUTOR:
    // É executado automaticamente quando um objeto Produto é criado.
    public function __construct(int $codigo, string $nome, float $valor)
    {

        // $this representa o objeto atual.
        // Os valores recebidos são armazenados nos atributos privados.
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->valor = $valor;

    }

    // GETTER:
    // Retorna o código do produto.
    public function getCodigo(): int
    {
        return $this->codigo;
    }

    // SETTER:
    // Altera o código do produto.
    public function setCodigo(int $codigo): void
    {
        $this->codigo = $codigo;
    }

    // GETTER:
    // Retorna o nome do produto.
    public function getNome(): string
    {
        return $this->nome;
    }

    // SETTER:
    // Altera o nome do produto.
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    // GETTER:
    // Retorna o valor do produto.
    public function getValor(): float
    {
        return $this->valor;
    }

    // SETTER:
    // Altera o valor do produto.
    public function setValor(float $valor): void
    {
        $this->valor = $valor;
    }

    // MÉTODO:
    // Imprime as informações do Produto.
    public function imprimir(): void
    {

        echo "Código: " . $this->getCodigo() . "<br>";
        echo "Nome: " . $this->getNome() . "<br>";
        echo "Valor: " . $this->getValor() . "<br>";

    }

    // MÉTODO MÁGICO __toString:
    // É executado quando o objeto Produto é tratado como uma string.
    //
    // Exemplo:
    // echo $produto;
    public function __toString(): string
    {
        // "." concatena (junta) os valores.
        return

         "Código: " . $this->getCodigo() . "<br>" .
         "Nome: " . $this->getNome() . "<br>" .
         "Valor: " . $this->getValor() . "<br>";
         
    }


}