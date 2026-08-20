<?php

// =====================================================
// CLASSE ABSTRATA
// =====================================================

// "abstract" significa que essa classe NÃO pode ser
// instanciada diretamente.
// Ela serve como modelo para outras classes.
abstract class Pessoa
{
    // ENCAPSULAMENTO:
    // private = só pode ser acessado diretamente
    // dentro da própria classe.
    private string $nome;
    private string $cpf;

    public function __construct(string $nome, string $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    // GETTER
    public function getNome(): string
    {
        return $this->nome;
    }

    // SETTER
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    // GETTER
    public function getCpf(): string
    {
        return $this->cpf;
    }

    // MÉTODO ABSTRATO:
    // A classe filha será OBRIGADA a implementar esse método.
    abstract public function apresentar(): string;
}


// =====================================================
// HERANÇA + POLIMORFISMO
// =====================================================

class Cliente extends Pessoa
{
    private string $tipoCliente;

    public function __construct(
        string $nome,
        string $cpf,
        string $tipoCliente
    ) {
        // Chama o construtor da classe PAI.
        parent::__construct($nome, $cpf);

        $this->tipoCliente = $tipoCliente;
    }

    public function getTipoCliente(): string
    {
        return $this->tipoCliente;
    }

    public function setTipoCliente(string $tipoCliente): void
    {
        $this->tipoCliente = $tipoCliente;
    }

    // POLIMORFISMO:
    // Cliente é obrigado a implementar o método abstrato
    // apresentar() que foi definido em Pessoa.
    public function apresentar(): string
    {
        return "Cliente: " . $this->getNome();
    }
}


// =====================================================
// HERANÇA + POLIMORFISMO
// =====================================================

class Vendedor extends Pessoa
{
    private float $salario;

    public function __construct(
        string $nome,
        string $cpf,
        float $salario
    ) {
        parent::__construct($nome, $cpf);

        $this->salario = $salario;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }

    // POLIMORFISMO:
    // Vendedor também implementa o método apresentar(),
    // mas com um comportamento diferente de Cliente.
    public function apresentar(): string
    {
        return "Vendedor: " . $this->getNome();
    }
}


// =====================================================
// PRODUTO
// =====================================================

class Produto
{
    // ENCAPSULAMENTO
    private int $codigo;
    private string $nome;
    private float $valor;

    public function __construct(
        int $codigo,
        string $nome,
        float $valor
    ) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function getCodigo(): int
    {
        return $this->codigo;
    }

    public function setCodigo(int $codigo): void
    {
        $this->codigo = $codigo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $valor): void
    {
        $this->valor = $valor;
    }

    public function __toString(): string
    {
        return $this->nome . " - R$ " . $this->valor;
    }
}


// =====================================================
// ITEM DO PEDIDO
// =====================================================

class ItemPedido
{
    private Produto $produto;
    private int $quantidade;

    public function __construct(
        Produto $produto,
        int $quantidade
    ) {
        $this->produto = $produto;
        $this->quantidade = $quantidade;
    }

    public function getProduto(): Produto
    {
        return $this->produto;
    }

    public function setProduto(Produto $produto): void
    {
        $this->produto = $produto;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    public function setQuantidade(int $quantidade): void
    {
        $this->quantidade = $quantidade;
    }

    public function getValorTotal(): float
    {
        return $this->produto->getValor() * $this->quantidade;
    }

    public function __toString(): string
    {
        return
            $this->produto->getNome() .
            " | Quantidade: " .
            $this->quantidade .
            " | Total: R$ " .
            $this->getValorTotal();
    }
}


// =====================================================
// PEDIDO
// =====================================================

class Pedido
{
    // ARRAY DE OBJETOS
    // Esse array armazenará vários objetos ItemPedido.
    private array $itens = [];

    private Cliente $cliente;
    private Vendedor $vendedor;

    // STATIC
    // Esse atributo pertence à CLASSE e não a um objeto específico.
    // Todos os pedidos compartilham o mesmo contador.
    private static int $numeroPedidos = 0;

    private int $numero;

    public function __construct(
        Cliente $cliente,
        Vendedor $vendedor
    ) {
        $this->cliente = $cliente;
        $this->vendedor = $vendedor;

        // STATIC:
        // Acessamos um atributo static usando "::".
        self::$numeroPedidos++;

        $this->numero = self::$numeroPedidos;
    }

    // STATIC
    // Método static pode ser chamado sem criar um objeto Pedido.
    public static function getNumeroPedidos(): int
    {
        return self::$numeroPedidos;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    // MANIPULAÇÃO DO ARRAY DE OBJETOS
    // Cria um ItemPedido e adiciona ao array.
    public function adicionarItem(
        Produto $produto,
        int $quantidade
    ): void {

        $item = new ItemPedido(
            $produto,
            $quantidade
        );

        // [] adiciona o objeto no final do array.
        $this->itens[] = $item;
    }

    // GETTER DO ARRAY
    public function getItens(): array
    {
        return $this->itens;
    }

    // MANIPULAÇÃO DO ARRAY DE OBJETOS
    public function calcularTotal(): float
    {
        $total = 0;

        // FOREACH percorre todos os objetos do array.
        foreach ($this->itens as $item) {

            // $item é um objeto ItemPedido.
            $total += $item->getValorTotal();
        }

        return $total;
    }

    public function imprimir(): void
    {
        echo "Pedido: " . $this->numero . "<br>";

        echo "Cliente: " .
            $this->cliente->getNome() .
            "<br>";

        echo "Vendedor: " .
            $this->vendedor->getNome() .
            "<br>";

        echo "<br>ITENS:<br>";

        // Percorrendo o ARRAY DE OBJETOS.
        foreach ($this->itens as $item) {
            echo $item . "<br>";
        }

        echo "<br>Total: R$ " .
            $this->calcularTotal() .
            "<br>";
    }
}


// =====================================================
// TESTANDO O SISTEMA
// =====================================================

// Criando objetos Produto.
$produto1 = new Produto(
    1,
    "Teclado",
    100
);

$produto2 = new Produto(
    2,
    "Mouse",
    50
);


// Criando objetos Cliente e Vendedor.
// Eles são objetos das classes FILHAS de Pessoa.
$cliente = new Cliente(
    "João",
    "111.111.111-11",
    "Premium"
);

$vendedor = new Vendedor(
    "Carlos",
    "222.222.222-22",
    2500
);


// Criando o primeiro Pedido.
$pedido1 = new Pedido(
    $cliente,
    $vendedor
);


// Adicionando objetos ao ARRAY DE OBJETOS.
$pedido1->adicionarItem($produto1, 2);
$pedido1->adicionarItem($produto2, 3);


// Criando outro Pedido.
$pedido2 = new Pedido(
    $cliente,
    $vendedor
);


// Adicionando outro item.
$pedido2->adicionarItem($produto2, 1);


// Imprimindo pedidos.
$pedido1->imprimir();

echo "<hr>";

$pedido2->imprimir();


// STATIC:
// Não precisamos criar um novo Pedido para consultar
// a quantidade total de pedidos criados.
echo "<hr>";

echo "Total de pedidos criados: " .
    Pedido::getNumeroPedidos();


// =====================================================
// POLIMORFISMO
// =====================================================

// Podemos ter um array de objetos do tipo Pessoa,
// contendo objetos de suas classes filhas.
$pessoas = [];

$pessoas[] = $cliente;
$pessoas[] = $vendedor;


// FOREACH percorre o array.
foreach ($pessoas as $pessoa) {

    // POLIMORFISMO:
    // O PHP chama o apresentar() correspondente
    // ao tipo real do objeto.
    echo "<br>" . $pessoa->apresentar();
}

/* Encapsulamento

É quando você protege os atributos da classe.

Exemplo:

private string $nome;

Como é private, não fazemos:

$cliente->nome = "João";

Usamos:

$cliente->setNome("João");

E para pegar:

$cliente->getNome();
Decore:

private → proteção

getter → pega

setter → altera

2. Herança

Aqui:

class Cliente extends Pessoa

Significa:

Pessoa
  ↓
Cliente

Cliente herda características e métodos de Pessoa.

O mesmo acontece:

class Vendedor extends Pessoa

Então:

             Pessoa
             /    \
            /      \
       Cliente    Vendedor
3. Método abstrato

Na classe Pessoa:

abstract class Pessoa

Isso significa que Pessoa é uma classe abstrata.

Você não pode fazer:

$pessoa = new Pessoa(...);

Além disso:

abstract public function apresentar(): string;

é um método abstrato.

Ele diz:

"Toda classe filha precisa implementar esse método."

Por isso Cliente tem:

public function apresentar(): string

e Vendedor também tem:

public function apresentar(): string
4. Polimorfismo

Essa é uma das partes mais importantes.

Temos:

$pessoas[] = $cliente;
$pessoas[] = $vendedor;

O array contém:

Cliente
Vendedor

Mas os dois são filhos de:

Pessoa

Depois:

foreach ($pessoas as $pessoa) {
    echo $pessoa->apresentar();
}

Quando $pessoa for um Cliente:

Cliente → apresentar()

Quando $pessoa for um Vendedor:

Vendedor → apresentar()

Mesmo método, comportamentos diferentes.

Isso é polimorfismo.

Para decorar:

Polimorfismo = mesma chamada, comportamento diferente.

5. Array de objetos

Aqui:

private array $itens = [];

Temos um array.

Depois:

$this->itens[] = $item;

Estamos colocando objetos dentro desse array.

Então podemos ter:

itens
 ├── ItemPedido
 ├── ItemPedido
 ├── ItemPedido
 └── ItemPedido

Isso é um array de objetos.

6. Manipular array de objetos

Para adicionar:

$this->itens[] = $item;

Para percorrer:

foreach ($this->itens as $item)

Para acessar informações do objeto:

$item->getValorTotal();

Então a lógica é:

ARRAY
 ↓
FOREACH
 ↓
OBJETO
 ↓
MÉTODO

Por exemplo:

foreach ($this->itens as $item) {
    $total += $item->getValorTotal();
}

Isso significa:

Percorra todos os objetos do array e some o valor de cada um.

7. static

Aqui:

private static int $numeroPedidos = 0;

Esse atributo não pertence a um único objeto.

Ele pertence à classe Pedido.

Quando fazemos:

self::$numeroPedidos++;

estamos aumentando o contador geral.

E para acessar:

Pedido::getNumeroPedidos();

Observe o:

::
Diferença importante

Para objeto:

$pedido->imprimir();

Para static:

Pedido::getNumeroPedidos();
Decore:

-> → objeto

:: → classe/static

🧠 Resumo para decorar antes da prova
Conceito	Como reconhecer
Encapsulamento	private, getters e setters
Herança	extends
Classe abstrata	abstract class
Método abstrato	abstract public function
Polimorfismo	mesmo método implementado de formas diferentes
Array de objetos	array contendo objetos
Adicionar ao array	$array[] = $objeto
Percorrer array	foreach
Acessar método do objeto	->
Static	static + ::
Classe pai	parent
Objeto atual	$this
Criar objeto	new
Construtor	__construct()
Objeto como texto	__toString() */