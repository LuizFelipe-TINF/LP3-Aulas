<?php

// ==========================================
// 1. INCLUSÃO DAS CLASSES
// ==========================================
require_once 'Data.php';
require_once 'Pessoa.php';
require_once 'Cliente.php';
require_once 'Vendedor.php';
require_once 'Produto.php';
require_once 'ItemPedido.php';
require_once 'Pedido.php';

echo "<h2>=== TESTE DO SISTEMA DE PEDIDOS ===</h2>";

// ==========================================
// 2. CRIAÇÃO DOS PRODUTOS
// ==========================================
$produto1 = new Produto(101, "Notebook Gamer", 4500.00);
$produto2 = new Produto(102, "Mouse Sem Fio", 120.00);
$produto3 = new Produto(103, "Teclado Mecânico", 350.00);

echo "<h3>1. Produtos Cadastrados no Estoque:</h3>";
echo $produto1;
echo $produto2;
echo $produto3;
echo "<hr>";

// ==========================================
// 3. CRIAÇÃO DO CLIENTE E DO VENDEDOR
// ==========================================
$cliente = new Cliente("Carlos Silva", "123.456.789-00", "M", 15, 8, 1995, "Prefere entrega no período da tarde");
$vendedor = new Vendedor("Ana Souza", "987.654.321-11", "F", new Data(10, 2, 1988), 5000, 100);

echo "<h3>2. Dados dos Envolvidos:</h3>";
echo "<strong>Cliente:</strong> " . $cliente->getNome() . " | <strong>Cadastrado em:</strong> " . $cliente->getDataCadastro() . "<br>";
echo "<strong>Vendedor:</strong> " . $vendedor->getNome() . " | <strong>Comissão Base:</strong> " . $vendedor->getComissao() . "%<br>";
echo "<hr>";

// ==========================================
// 4. MONTAGEM E CRIAÇÃO DO PEDIDO
// ==========================================
$item1 = new ItemPedido($produto1, 1); // 1x Notebook Gamer (R$ 4.500,00)
$item2 = new ItemPedido($produto2, 2); // 2x Mouse Sem Fio (R$ 240,00)
$item3 = new ItemPedido($produto3, 1); // 1x Teclado Mecânico (R$ 350,00)

// Instancia o Pedido com o primeiro item
$pedido = new Pedido($cliente, $vendedor, $item1);

// Adiciona os demais itens no pedido
$pedido->adicionarItem($produto2, 2);
$pedido->adicionarItem($produto3, 1);

// Calcula o subtotal e atribui a comissão ao vendedor
$pedido->fecharPedido();

// ==========================================
// 5. EXIBIÇÃO COMPLETA DO PEDIDO
// ==========================================
echo "<h3>3. Detalhes Completos do Pedido:</h3>";
echo "<strong>Data da Compra:</strong> " . $pedido->getData() . "<br>";
echo "<strong>Cliente:</strong> " . $pedido->getCliente()->getNome() . "<br>";
echo "<strong>Vendedor Responsável:</strong> " . $pedido->getVendedor()->getNome() . "<br><br>";

echo "<h4>Itens Comprados:</h4>";
echo "<ul>";
foreach ($pedido->getListaItens() as $index => $item) {
    echo "<li>";
    echo "<strong>Item " . ($index + 1) . ":</strong> " . $item->getItem()->getNome() . " | ";
    echo "<strong>Qtd:</strong> " . $item->getQuantidade() . " | ";
    echo "<strong>Preço Unitário:</strong> R$ " . number_format($item->getItem()->getValor(), 2, ',', '.') . " | ";
    echo "<strong>Subtotal:</strong> R$ " . number_format($item->getValor(), 2, ',', '.') . "";
    echo "</li>";
}
echo "</ul>";

echo "<h4>----------------------------------------</h4>";
echo "<h3><strong>VALOR TOTAL DO PEDIDO: R$ " . number_format($pedido->getValorTotal(), 2, ',', '.') . "</strong></h3>";
echo "<hr>";

// ==========================================
// 6. VERIFICAÇÃO DA COMISSÃO DO VENDEDOR
// ==========================================
echo "<h3>4. Comissão do Vendedor:</h3>";
echo "Vendedor: " . $vendedor->getNome() . "<br>";
echo "Taxa de Comissão: " . $vendedor->getComissao() . "%<br>";
echo "<strong>Valor Recebido pelo Pedido: R$ " . number_format($vendedor->getComissao(), 2, ',', '.') . "</strong><br>";