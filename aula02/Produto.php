<?php



declare(strict_types=1);

class Produto
{
    private string $nome;
    private float $valor;

    public function getNome ():string
    {
        return $this->nome;
    }
    public function setNome (string $novoNome):void
    {
        if(strpos($novoNome, " ")==FALSE)
        {
            die('por favor escreva nome e sobrenome');
        }
        $this->nome=$novoNome;
    }
    public function getValor ():float
    {
        return $this->valor;
    }
    public function setvalor (float $novoValor):void
    {
        if($novoValor<0){
            die('valor errado');
        }
        $this->valor=$novoValor;
    }
}