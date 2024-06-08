<?php

namespace App\Strategy;

use App\Strategy\Contracts\Imposto;

class Icms implements Imposto
{
    const TAXA = 0.5;

    public function calcula(Orcamento $orcamento): float
    {
        return $orcamento->getValor() * self::TAXA;
    }
}