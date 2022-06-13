<?php



declare(strict_types=1);

class Produto
{   
    //atributos
    
    private string $nome;
    private float $valor;
    private string $descricao;
    private readonly Categoria $categoria;


    //metodos de construção do objeto (invocado)

    public function __construct(string $novoNome, float $novoValor, Categoria $categoria)
    {
        $this->nome=$novoNome;
        $this->valor=$novoValor;
        $this->categoria=$categoria;
    }

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
    public function setValor (float $novoValor):void
    {
        if($novoValor<0){
            die('valor errado');
        }
        $this->valor=$novoValor;
    }

    public function getDesc ():float
    {
        return $this->descricao;
    }
    public function setDesc (float $novoDesc):void
    {
        $this->descricao=$novoDesc;
    } 

    public function setCat (Categoria $categoria):void
    {
        $this->categoria=$categoria;
    } 
}