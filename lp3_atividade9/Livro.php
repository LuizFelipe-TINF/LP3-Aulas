<?php

class Livro
{

    public string $titulo;
    public string $autor;
    public int $qtdePaginas;
    public float $qtdeExemplares;

    public function emprestarLivro(){

    if($this->qtdeExemplares != 0){

    $this->qtdeExemplares -= 1;
    echo "A quantidade de livros após o empréstimo é: " . $this->qtdeExemplares . "<br><br>";

        }
        else{
            echo "Não há livros disponíveis. <br><br>";
        }
    }

    public function devolverLivro(){

     $this->qtdeExemplares += 1;
     echo "Após a devolução, a quantidade de livros é: " . $this->qtdeExemplares . "<br><br>";

    }

     public function verificarDisponibilidade(){

    if($this->qtdeExemplares != 0){
        echo "O livro está disponível para empréstimo <br><br>";
    }
    else{
        echo "O livro não está disponível para empréstimo <br><br>";
    }

    }

     public function alterarQuantidadePaginas($novaQuantidade){

    $this->qtdePaginas += $novaQuantidade;
    echo "O livro tem {$novaQuantidade} páginas novas. Quantidade de páginas atuais: {$this->qtdePaginas} páginas.<br>";

    }


    public function exibirInformacoes(){


    echo "Título: " . $this->titulo . ". <br>";
    echo "Autor: " . $this->autor . "<br>";
    echo "Quantidade de páginas: " . $this->qtdePaginas . "<br>";
    echo "Quantidade de exemplares: " . $this->qtdeExemplares . "<br><br>";

    }

    public function compararPaginas($outroLivro){

    if($this->qtdePaginas > $outroLivro->qtdePaginas){
        echo "O livro " . $this->titulo . " tem mais páginas que " . $outroLivro->titulo . "<br><br>";
    } 
    else if($this->qtdePaginas < $outroLivro->qtdePaginas){
         echo "O livro " . $this->titulo . " tem menos páginas que " . $outroLivro->titulo . "<br><br>";
    }
    else{
        echo "Os livros tem a mesma quantidade de páginas";
    }

    }


}






?>