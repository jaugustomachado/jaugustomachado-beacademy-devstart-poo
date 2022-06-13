<?php

declare(strict_types=1);

class Disciplina {
    
    public string $disciplina;

    //metodos de construção do objeto (invocado)

    public function __construct(string $novoDisc)
    {
        $this->disciplina=$novoDisc;
    }


    public function getDisc ():string
    {
        return $this->disciplina;
    }
    public function setDisc (string $novoDisc):void
    {
        $this->disciplina=$novoDisc;
    }
}