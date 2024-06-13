<?php

namespace App\TemplateMethod;

use App\Strategy\Orcamento;

class Icms2 extends Imposto2Aliquotas
{
    protected function deveUsarMaximaTaxacao(Orcamento $orcamento): bool
    {
        return $orcamento->getValor() > 500;
    }

    protected function maximaTaxacao(Orcamento $orcamento): float
    {
        return $orcamento->getValor() * 0.15;
    }

    protected function minimaTaxacao(Orcamento $orcamento): float
    {
        return $orcamento->getValor() * 0.05;
    }
}
