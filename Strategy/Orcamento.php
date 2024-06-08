<?php

namespace App\Strategy;

class Orcamento
{
    public float $valor;

    public function __construct(float $valor)
    {
        $this->valor = $valor;
    }
    
    public function getValor(): float
    {
        return $this->valor;
    }
}

