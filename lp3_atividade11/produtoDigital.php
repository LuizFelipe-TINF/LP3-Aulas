<?php

class ProdutoDigital extends Produto
{

    private float $tamanhoArquivoMB;
    private string $formatoArquivo;
    private int $limiteDownloadsPermitidos;
    private string $linkServidorNuvem;


    public function getTamanhoArquivoMB(): float
    {
        return $this->tamanhoArquivoMB;
    }
    public function setTamanhoArquivoMB(float $tamanhoArquivoMB): void
    {
        $this->tamanhoArquivoMB = $tamanhoArquivoMB;
    }

    public function getFormatoArquivo(): string
    {
        return $this->formatoArquivo;
    }
    public function setFormatoArquivo(string $formatoArquivo): void
    {
        $this->formatoArquivo = $formatoArquivo;
    }

    public function getLimiteDownloadsPermitidos(): int
    {
        return $this->limiteDownloadsPermitidos;
    }
    public function setLimiteDownloadsPermitidos(int $limiteDownloadsPermitidos): void
    {
        $this->limiteDownloadsPermitidos = $limiteDownloadsPermitidos;
    }

    public function getLinkServidorNuvem(): string
    {
        return $this->linkServidorNuvem;
    }
    public function setLinkServidorNuvem(string $linkServidorNuvem): void
    {
        $this->linkServidorNuvem = $linkServidorNuvem;
    }



    public function calcularPrecoVenda(): float
    {

        return $this->getPrecoBase() + 2;

    }

    public function verificarDisponibilidade(): bool
    {

        if ($this->getIsAtivo() == true && $this->getLinkServidorNuvem() != "") {

            return true;

        }

        return false;

    }

    public function gerarLinkExclusivo(string $idUsuario): string
    {

        $token = md5($idUsuario);

        return $this->getLinkServidorNuvem() . "/" . $token . "." . $this->getFormatoArquivo();

    }

    public function revogarAcesso(string $idUsuario): void
    {

        echo "Acesso do usuário " . $idUsuario . " revogado.";

    }


}