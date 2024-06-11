<?php

namespace App\ChainOfResponsibility;

use App\Strategy\Orcamento;

class CalculadoraDesconto
{
    public function calcula(Orcamento $orcamento): float
    {
        if ($orcamento->getQtyItens() >= 5) {
            $desconto = new Desconto5Itens(
                new Desconto10Itens(
                    new SemDesconto()
                )
            );
            return $desconto->calculaDesconto($orcamento);
        }

        return 0;
    }
}
