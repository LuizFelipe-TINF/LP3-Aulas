<?php

    // HERANÇA:
    // "Cliente" herda tudo que for permitido da classe "Pessoa".
    // O "extends" indica que Cliente é uma classe filha de Pessoa.
    class Cliente extends Pessoa
    {

    // ENCAPSULAMENTO:
    // "private" significa que esses atributos só podem ser acessados
    // diretamente dentro da própria classe Cliente.
    private Data $dataCadastro;
    private string $preferencias;

   // CONSTRUTOR:
   // __construct() é executado automaticamente quando um objeto Cliente é criado.
   // Os tipos (string, int) indicam o tipo esperado para cada parâmetro.
   // "= """ define um valor padrão para preferencias caso nada seja informado.
   public function __construct(string $nome, string $cpf, string $sexo, int $dia, int $mes, int $ano, string $preferencias = "") 
   {
 
    // HERANÇA:
    // parent::__construct() chama o construtor da classe PAI (Pessoa).
    // Assim, Cliente aproveita a inicialização que já existe em Pessoa.
    // "new Data(...)" cria um novo objeto da classe Data.
    parent::__construct($nome, $cpf, $sexo, new Data($dia, $mes, $ano));

    // Cria um objeto Data com a data atual.
    // date('d') = dia | date('m') = mês | date('Y') = ano.
    // (int) converte o valor retornado por date() para inteiro.
    $this->dataCadastro = new Data(
        (int)date('d'),
        (int)date('m'),
        (int)date('Y')
    );
    
    // $this se refere ao objeto atual.
    // Aqui o valor recebido no parâmetro é armazenado no atributo privado.
    $this->preferencias = $preferencias;
}

    // GETTER:
    // Método usado para LER/OBTER o valor de um atributo privado.
    // Como dataCadastro é private, não podemos acessá-lo diretamente de fora.
    public function getDataCadastro(): data
    {
        return $this->dataCadastro;
    }

    // SETTER:
    // Método usado para ALTERAR o valor de um atributo privado.
    // Recebe um objeto Data e coloca esse objeto dentro de dataCadastro.
    public function setDataCadastro(data $dataCadastro): void
    {
        $this->dataCadastro = $dataCadastro;  
    }

     // GETTER:
     // Retorna o valor do atributo privado preferencias.
     public function getPreferencias(): string
    {
        return $this->preferencias;
    }

    // SETTER:
    // Permite alterar o atributo privado preferencias de forma controlada.
    public function setPreferencias(string $preferencias): void
    {
        $this->preferencias = $preferencias;  
    }

    // MÉTODO:
    // Executa ações para imprimir as informações do Cliente.
    public function imprimir(): void
    {

        // HERANÇA:
        // Chama o método imprimir() da classe PAI (Pessoa).
        // "parent" representa a classe pai.
        parent:: imprimir();

        // "->" é usado para acessar métodos/atributos de um OBJETO.
        // Aqui estamos usando o getter para acessar dataCadastro.
        echo "Data de cadastro: " . $this->getDataCadastro() . "<br>";

        echo "Preferências: " . $this->getPreferencias() . "<br>";

    }    

    // MÉTODO MÁGICO __toString:
    // É executado quando um objeto é tratado como uma string.
    // Exemplo: echo $cliente;
    public function __toString(): string
    {

        // HERANÇA:
        // Chama o __toString() da classe PAI e acrescenta
        // as informações específicas de Cliente.
        //
        // "." serve para CONCATENAR (juntar) strings.
        return parent::__toString() .
        
        "Data de cadastro: " . $this->getDataCadastro() . "<br>" .
        "Preferências: " . $this->getPreferencias() . "<br>";
    
    }















    }