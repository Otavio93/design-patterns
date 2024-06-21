<?php

namespace App\State\EstadosOrcamento;

use App\State\Orcamento;

class Cancelado extends Estado
{
    public function calcularDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException('Orçamentos cancelados não podem ter desconto');
    }

    public function finalizar(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}
