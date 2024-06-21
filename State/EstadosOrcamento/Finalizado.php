<?php

namespace App\State\EstadosOrcamento;

use App\State\Orcamento;

class Finalizado extends Estado
{
	public function calcularDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException('Orçamentos finalizados não podem ter desconto');
    }
}
