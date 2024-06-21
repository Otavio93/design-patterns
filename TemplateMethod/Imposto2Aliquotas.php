<?php

namespace App\TemplateMethod;

use App\Strategy\Contracts\Imposto;
use App\Strategy\Orcamento;

abstract class Imposto2Aliquotas implements Imposto
{
    final public function calcula(Orcamento $orcamento): float
    {
        if ($this->deveUsarMaximaTaxacao($orcamento)) {
            return $this->maximaTaxacao($orcamento);
        }

        return $this->minimaTaxacao($orcamento);
    }

    abstract protected function deveUsarMaximaTaxacao(Orcamento $orcamento): bool;
    abstract protected function maximaTaxacao(Orcamento $orcamento): float;
    abstract protected function minimaTaxacao(Orcamento $orcamento): float;
}
