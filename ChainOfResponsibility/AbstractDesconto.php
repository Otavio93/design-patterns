<?php

namespace App\ChainOfResponsibility;

use App\Strategy\Orcamento;

abstract class AbstractDesconto
{
    protected $proximoDesconto = null;

    public function __construct(AbstractDesconto $proximoDesconto = null)
    {
        $this->proximoDesconto = $proximoDesconto;
    }

    abstract public function calculaDesconto(Orcamento $orcamento): float;
}
