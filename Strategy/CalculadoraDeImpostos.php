<?php

namespace App\Strategy;

use App\Strategy\Contracts\Imposto;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calcula($orcamento);
    }
}