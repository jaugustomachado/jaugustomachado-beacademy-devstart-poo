<?php

declare(strict_types=1);

class Curso {
    public float $cargaHoraria;
    public string $nome;
    public string $descricao;

    //metodos de construção do objeto (invocado)

    public function __construct(string $novoNome, float $novoCarga)
    {
        $this->nome=$novoNome;
        $this->cargaHoraria=$novoCarga;
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

    public function getCarga():string
    {
        return $this->cargaHoraria;
    }
    public function setCarga (float $novoCarga):void
    {
        if($novoCarga<0){
            die('errado');
        }
        $this->cargaHoraria=$novoCarga;
    }

    public function getDesc ():string
    {
        return $this->descricao;
    }
    public function setDesc (string $novoDesc):void
    {
        $this->descricao=$novoDesc;
    }
}