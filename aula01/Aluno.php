<?php

declare(strict_types=1);

class Aluno {
    public string $nome;
    public string $cpf;

    //metodos de construção do objeto (invocado)

    public function __construct(string $novoNome, float $novoCpf)
    {
        $this->nome=$novoNome;
        $this->cpf=$novoCpf;
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

    public function getCpf():string
    {
        return $this->cpf;
    }
    public function setCpf (float $novoCpf):void
    {
        if($novoCpf<0){
            die('cpf errado');
        }
        $this->cpf=$novoCpf;
    }
    
}