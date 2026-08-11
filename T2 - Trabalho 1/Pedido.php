<?php

class Pedido
{

    private Data $data;
    private array $listaItens = [];
    private Cliente $cliente;
    private Vendedor $vendedor;
    private float $valorTotal = 0.0;

    public function __construct(Cliente $cliente, Vendedor $vendedor, ItemPedido $item)
    {

        $this->cliente = $cliente;
        $this->vendedor = $vendedor;

        $this->data = new Data(
            (int)date('d'),
            (int)date('m'),
            (int)date('Y')
        );

        $this->listaItens[] = $item;

        $this->calcularValorTotal();

    }

    public function getData(): Data
    {
        return $this->data;
    }

    public function setData(Data $data): void
    {
        $this->data = $data;
    }

    public function getListaItens(): array
    {
        return $this->listaItens;
    }

    public function setListaItens(array $listaItens): void
    {
        $this->listaItens = $listaItens;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public function setCliente(Cliente $cliente): void
    {
        $this->cliente = $cliente;
    }

    public function getVendedor(): Vendedor
    {
        return $this->vendedor;
    }

    public function setVendedor(Vendedor $vendedor): void
    {
        $this->vendedor = $vendedor;
    }

    public function getValorTotal(): float
    {
        return $this->valorTotal;
    }

    public function setValorTotal(float $valorTotal): void
    {
        $this->valorTotal = $valorTotal;
    }

     public function adicionarItem(Produto $item, int $quantidade): void
    {
        $itemPedido = new ItemPedido($item, $quantidade);

        $this->listaItens[] = $itemPedido;

        $this->calcularValorTotal();
    }

    private function calcularValorTotal(): float
    {
        $this->valorTotal = 0.0;

        foreach ($this->listaItens as $item) {
            $this->valorTotal += $item->getValor();
        }

        return $this->valorTotal;
    }

    private function adicionarComissao(): float
    {
        return $this->valorTotal * ($this->vendedor->getComissao() / 100);
    }

    public function fecharPedido(): void
    {
        $this->calcularValorTotal();
    }

    public function imprimirPedidoCompleto(): void
{
    echo "PEDIDO <br>";
    echo "Data: " . $this->data . "<br>";
    echo "Cliente: " . $this->cliente->getNome() . "<br>";
    echo "Vendedor: " . $this->vendedor->getNome() . "<br>";

    echo "<br>ITENS <br>";

    foreach ($this->listaItens as $item) {
        echo $item . "<br>";
    }

    echo "<br>";
    echo "Valor total: R$ " . $this->valorTotal . "<br>";

    echo "Comissão: R$ " . $this->adicionarComissao() . "<br>";
}

    public function __toString(): string
    {
        return
            "Data: " . $this->data . "<br>" .
            "Cliente: " . $this->cliente->getNome() . "<br>" .
            "Vendedor: " . $this->vendedor->getNome() . "<br>" .
            "Valor total: R$ " . $this->valorTotal . "<br>" .
            "Comissão: R$ " .  $this->adicionarComissao() . "<br>";
    }

}