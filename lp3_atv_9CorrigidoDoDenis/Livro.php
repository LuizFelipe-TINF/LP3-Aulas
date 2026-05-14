<?php
class Livro {
    public string $titulo;
    public string $autor;
    public int $qtdePaginas;
    public int $qtdeExemplares;

    public function emprestarLivro() {
        if ($this->qtdeExemplares > 0)
            $this->qtdeExemplares--;
    }
    public function devolverLivro() {
        $this->qtdeExemplares++;
    }
    public function verificarDisponibilidade() {
        if ($this->qtdeExemplares > 0)
            echo "Livro disponível para emprestimo. <br> ";
        else 
            echo "Livro não disponível. <br>";
    }
    public function alterarQuantidadePaginas(int $novaQuantidade) {
        $this->qtdePaginas = $novaQuantidade;
    }
    public function exibirInformacoes() {
        echo "Título: $this->titulo <br>";
        echo "Autor: $this->autor <br>";
        echo "Quatidade de páginas: $this->qtdePaginas <br>";
        echo "Número de exemplares: $this->qtdeExemplares <br>";
    }
    public function compararPaginas(Livro $outroLivro) {
        if($this->qtdePaginas > $outroLivro->qtdePaginas) {
            echo "O livro $this->titulo possui mais páginas <br>";
        } elseif ($this->qtdePaginas == $outroLivro->qtdePaginas) {
            echo "Os livros pessuem o mesmo número de páginas<br>";
        } else {
            echo "O livro $outroLivro->titulo possui mais páginas <br>";
        }
    }
    
}