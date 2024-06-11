<?php

namespace App\ChainOfResponsibility;

use App\Strategy\Orcamento;

class SemDesconto extends AbstractDesconto
{
    public function __construct()
    {
        parent::__construct(null);
    }
    
    public function calculaDesconto(Orcamento $orcamento): float
    {
        return 0;
    }
}
