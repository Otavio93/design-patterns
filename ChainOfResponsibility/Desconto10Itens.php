<?php

namespace App\ChainOfResponsibility;

use App\Strategy\Orcamento;

class Desconto10Itens extends AbstractDesconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->getQtyItens() === 10){
            return $orcamento->getValor() * 0.2;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
