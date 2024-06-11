<?php

namespace App\ChainOfResponsibility;

use App\Strategy\Orcamento;

class Desconto5Itens extends AbstractDesconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->getQtyItens() === 5){
            return $orcamento->getValor() * 0.1;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
