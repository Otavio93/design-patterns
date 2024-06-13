<?php

namespace App\TemplateMethod;

use App\Strategy\Orcamento;

class Iva extends Imposto2Aliquotas
{
    protected function deveUsarMaximaTaxacao(Orcamento $orcamento): bool
    {
        return $orcamento->getValor() > 400;
    }

    protected function maximaTaxacao(Orcamento $orcamento): float
    {
        return $orcamento->getValor() * 0.10;
    }

    protected function minimaTaxacao(Orcamento $orcamento): float
    {
        return $orcamento->getValor() * 0.05;
    }
}
