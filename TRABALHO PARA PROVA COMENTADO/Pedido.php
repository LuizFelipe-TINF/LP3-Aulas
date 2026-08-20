<?php

class Pedido
{

    // ENCAPSULAMENTO:
    // Todos os atributos estão como private.
    // Isso impede o acesso direto de fora da classe.
    private Data $data;

    // ARRAY DE OBJETOS:
    // listaItens é um array que será usado para armazenar objetos ItemPedido.
    // [] cria um array vazio.
    private array $listaItens = [];

    // Esses atributos armazenam OBJETOS de outras classes.
    private Cliente $cliente;
    private Vendedor $vendedor;

    // Valor inicial do pedido.
    private float $valorTotal = 0.0;

    // CONSTRUTOR:
    // É executado automaticamente quando criamos um objeto Pedido.
    // Os parâmetros Cliente, Vendedor e ItemPedido devem ser objetos dessas classes.
    public function __construct(Cliente $cliente, Vendedor $vendedor, ItemPedido $item)
    {

        // Guarda os objetos recebidos nos atributos do Pedido.
        $this->cliente = $cliente;
        $this->vendedor = $vendedor;

        // Cria um objeto Data com a data atual.
        $this->data = new Data(
            (int)date('d'),
            (int)date('m'),
            (int)date('Y')
        );

        // ARRAY DE OBJETOS:
        // [] adiciona o objeto $item ao final do array listaItens.
        // O array passa a armazenar um objeto ItemPedido.
        $this->listaItens[] = $item;

        // Calcula o valor total do pedido.
        $this->calcularValorTotal();

    }

    // GETTER:
    // Retorna o objeto Data armazenado no pedido.
    public function getData(): Data
    {
        return $this->data;
    }

    // SETTER:
    // Altera o objeto Data do pedido.
    public function setData(Data $data): void
    {
        $this->data = $data;
    }

    // GETTER:
    // Retorna o array listaItens.
    // Esse array contém objetos ItemPedido.
    public function getListaItens(): array
    {
        return $this->listaItens;
    }

    // SETTER:
    // Substitui o array inteiro de itens.
    public function setListaItens(array $listaItens): void
    {
        $this->listaItens = $listaItens;
    }

    // GETTER:
    // Retorna o objeto Cliente.
    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    // SETTER:
    // Altera o objeto Cliente.
    public function setCliente(Cliente $cliente): void
    {
        $this->cliente = $cliente;
    }

    // GETTER:
    // Retorna o objeto Vendedor.
    public function getVendedor(): Vendedor
    {
        return $this->vendedor;
    }

    // SETTER:
    // Altera o objeto Vendedor.
    public function setVendedor(Vendedor $vendedor): void
    {
        $this->vendedor = $vendedor;
    }

    // GETTER:
    // Retorna o valor total.
    public function getValorTotal(): float
    {
        return $this->valorTotal;
    }

    // SETTER:
    // Altera o valor total.
    public function setValorTotal(float $valorTotal): void
    {
        $this->valorTotal = $valorTotal;
    }

    // MÉTODO PARA ADICIONAR ITEM:
    // Recebe um objeto Produto e a quantidade desejada.
    public function adicionarItem(Produto $item, int $quantidade): void
    {
        // Cria um novo objeto ItemPedido.
        // Produto + quantidade formam um ItemPedido.
        $itemPedido = new ItemPedido($item, $quantidade);

        // ARRAY DE OBJETOS:
        // Adiciona o novo objeto ItemPedido ao final do array.
        $this->listaItens[] = $itemPedido;

        // Recalcula o valor total depois de adicionar o item.
        $this->calcularValorTotal();
    }

    // PRIVATE:
    // Só pode ser chamado dentro da própria classe Pedido.
    // Calcula a soma dos valores de todos os itens.
    private function calcularValorTotal(): float
    {
        // Zera o valor antes de começar uma nova soma.
        $this->valorTotal = 0.0;

        // FOREACH:
        // Percorre todos os elementos do array listaItens.
        //
        // $item representa cada objeto ItemPedido encontrado no array.
        foreach ($this->listaItens as $item) {

            // Pega o valor de cada ItemPedido e soma ao valor total.
            $this->valorTotal += $item->getValor();
        }

        // Retorna o valor total calculado.
        return $this->valorTotal;
    }

    // PRIVATE:
    // Esse método só pode ser utilizado dentro da classe Pedido.
    // Calcula a comissão do vendedor.
    private function adicionarComissao(): float
    {
        // Valor total × percentual de comissão / 100.
        //
        // $this->vendedor é um objeto Vendedor.
        // ->getComissao() acessa o método desse objeto.
        return $this->valorTotal * ($this->vendedor->getComissao() / 100);
    }

    // MÉTODO:
    // Finaliza o pedido recalculando o valor total.
    public function fecharPedido(): void
    {
        $this->calcularValorTotal();
    }

    // MÉTODO:
    // Imprime todas as informações do pedido.
    public function imprimirPedidoCompleto(): void
{
    echo "PEDIDO <br>";

    // $this->data é um objeto Data.
    // Como Data possui __toString(), ele pode ser usado diretamente no echo.
    echo "Data: " . $this->data . "<br>";

    // $this->cliente é um objeto Cliente.
    // ->getNome() chama o método desse objeto.
    echo "Cliente: " . $this->cliente->getNome() . "<br>";

    // $this->vendedor é um objeto Vendedor.
    echo "Vendedor: " . $this->vendedor->getNome() . "<br>";

    echo "<br>ITENS <br>";

    // ARRAY DE OBJETOS + FOREACH:
    // Percorre todos os objetos ItemPedido armazenados em listaItens.
    foreach ($this->listaItens as $item) {

        // $item é um objeto ItemPedido.
        // Como ItemPedido possui __toString(), podemos usar o objeto diretamente.
        echo $item . "<br>";
    }

    echo "<br>";
    echo "Valor total: R$ " . $this->valorTotal . "<br>";

    // Chama o método privado que calcula a comissão.
    echo "Comissão: R$ " . $this->adicionarComissao() . "<br>";
}

    // MÉTODO MÁGICO __toString:
    // É chamado quando o objeto Pedido é usado como uma string.
    // Exemplo: echo $pedido;
    public function __toString(): string
    {
        return

            // "." concatena os textos.
            "Data: " . $this->data . "<br>" .

            // Acessa o método do objeto Cliente.
            "Cliente: " . $this->cliente->getNome() . "<br>" .

            // Acessa o método do objeto Vendedor.
            "Vendedor: " . $this->vendedor->getNome() . "<br>" .

            "Valor total: R$ " . $this->valorTotal . "<br>" .

            // Chama o método que calcula a comissão.
            "Comissão: R$ " .  $this->adicionarComissao() . "<br>";
    }

}