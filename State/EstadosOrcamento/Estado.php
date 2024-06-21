<?php

namespace App\State\EstadosOrcamento;

use App\State\Orcamento;

abstract class Estado
{
    abstract function calcularDescontoExtra(Orcamento $orcamento): float;

    public function aprovar(Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamento não pode ser aprovado');
    }

    public function reprovar(Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamento não pode ser reprovado');
    }

    public function finalizar(Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamento não pode ser finalizado');
    }
}
