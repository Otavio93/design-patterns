<?php

namespace App\Strategy;

use App\Strategy\Contracts\Imposto;

class Iss implements Imposto
{
    const TAXA = 0.2;

    public function calcula(Orcamento $orcamento): float
    {
        return $orcamento->getValor() * self::TAXA;
    }
}