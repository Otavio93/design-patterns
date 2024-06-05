<?php

namespace App\Strategy;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.1;
    }
}